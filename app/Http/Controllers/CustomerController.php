<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        //lay tat ca customer hien co
        $customers = Customer::all();

        //goi view va truyen du lieu sang view
        return view('customers.list', compact('customers'));
    }
}
