<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Transaction;
use Illuminate\Http\Request;

class BKashController extends Controller
{
    public function token(Request $request)
    {
        $post_token = array(
            'app_key' => config('bKash.app_key'),
            'app_secret' => config('bKash.app_secret')
        );

        $url = config('bKash.tokenURL');

        $proxy = config('bKash.proxy');
        $posttoken = json_encode($post_token);
        $header = [
            'Content-Type:application/json',
            'password:' . config('bKash.password'),
            'username:' . config('bKash.username')
        ];

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $posttoken);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        //curl_setopt($ch, CURLOPT_PROXY, $proxy);
        $resultdata = curl_exec($ch);
        curl_close($ch);

        $request_token = json_decode($resultdata, true);
        $idToken = $request_token['id_token'];

        $strJsonFileContents = file_get_contents(storage_path('app/bkash/config.json'));
        $array = json_decode($strJsonFileContents, true);
        $array['token'] = $idToken;
        $newJsonString = json_encode($array);
        file_put_contents(storage_path('app/bkash/config.json'), $newJsonString);


        session('token', $idToken);

        return $idToken;
    }

    public function createPayment(Request $request)
    {
        $strJsonFileContents = file_get_contents(storage_path('app/bkash/config.json'));
        $array = json_decode($strJsonFileContents, true);

        $amount = $request->amount;
        $invoice = uniqid(); // must be unique
        $intent = "sale";
        $proxy = config('bKash.proxy');
        $createpaybody = array('amount' => $amount, 'currency' => 'BDT', 'merchantInvoiceNumber' => $invoice, 'intent' => $intent);
        $url = curl_init(config('bKash.createURL'));

        $createpaybodyx = json_encode($createpaybody);

        $header = array(
            'Content-Type:application/json',
            'authorization:' . $array['token'],
            'x-app-key:' . config('bKash.app_key')
        );

        curl_setopt($url, CURLOPT_HTTPHEADER, $header);
        curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url, CURLOPT_POSTFIELDS, $createpaybodyx);
        curl_setopt($url, CURLOPT_FOLLOWLOCATION, 1);
        //curl_setopt($url, CURLOPT_PROXY, $proxy);

        $resultdata = curl_exec($url);
        curl_close($url);

        try {
            $rate = 1500;
            $order = Order::create([
                'user_id' => $request->uId,
                'number_of_profile' => count($request->items),
                'rate' => $rate,
                'total_amount' => $amount,
                'payment_status' => "Pending"
            ]);


            foreach ($request->items as $key => $item) {
                OrderDetail::create([
                    'order_id' => $order->id,
                    'profile_id' => $item["id"],
                    'is_approved' => false
                ]);
            }

            Transaction::create([
                'transaction_id' => $invoice,
                'order_id' => $order->id,
                'method' => "BKASH",
                'date' => today(),
                'amount' => $amount,
                'status' => "PENDING"
            ]);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 400);
        }

        return $resultdata;
    }

    public function executePayment(Request $request)
    {
        $strJsonFileContents = file_get_contents(storage_path('app/bkash/config.json'));
        $array = json_decode($strJsonFileContents, true);

        $paymentID = $request->paymentID;
        $invoice = $request->invoice;
        $proxy = config('bKash.proxy');

        $transaction = Transaction::where('transaction_id', $invoice)->first();
        if ($transaction == null)
            return redirect()->json('Transaction not found', 400);


        $url = curl_init(config('bKash.executeURL') . $paymentID);

        $header = array(
            'Content-Type:application/json',
            'authorization:' . $array['token'],
            'x-app-key:' . config('bKash.app_key')
        );

        curl_setopt($url, CURLOPT_HTTPHEADER, $header);
        curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url, CURLOPT_FOLLOWLOCATION, 1);
        //curl_setopt($url, CURLOPT_PROXY, $proxy);

        $resultdatax = curl_exec($url);
        curl_close($url);

        if ($resultdatax["paymentID"] != null) {
            $transaction->status = "SUCCESS";
            $transaction->bkash_payment_id = $paymentID;
            $transaction->bkash_payload = json_encode($resultdatax);
            $transaction->save();
        } else {
            $transaction->status = "SUCCESS";
            $transaction->save();
        }

        return $resultdatax;
    }
}
