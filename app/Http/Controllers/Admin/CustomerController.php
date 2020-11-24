<?php

namespace App\Http\Controllers\Admin;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $customer = Customer::all();
         return view('admin.customers.index', compact('customer'));
    }
}
