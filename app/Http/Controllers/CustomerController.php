<?php

namespace App\Http\Controllers;

use App\Customer;
use http\Env\Response;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $customers = Customer::all();
        return view('customers.list', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store()
    {

    }
}
