<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Cart::content();

        return view('website.checkout', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addItem(Request $request, $id)
    {
        $profile = Customer::find($id);
        if ($profile == null)
            return back()->withErrors("Profile not found!");

        $rate = 1500;


        $item = Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id === 1;
        });

        if ($item->count() == 0)
            Cart::add($id, $profile->name, 1, $rate, 0);

        // Cart::add(1, "Imran Hossain", 1, 1500, 0);
        // Cart::add(2, "Enamul Haque", 1, 1500, 0);

        return redirect()->route('checkout')->with('success', "Successfully added profile");
    }

    public function removeItem(Request $request, $rowId)
    {
        Cart::remove($rowId);

        return back()->with('success', "Successfully removed profile");
    }
}
