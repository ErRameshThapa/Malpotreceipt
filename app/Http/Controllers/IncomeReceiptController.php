<?php

namespace App\Http\Controllers;

use App\IncomeReceipt;
use Illuminate\Http\Request;

class IncomeReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
		return view('form');
		}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		
		return view('form');
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
     * @param  \App\IncomeReceipt  $incomeReceipt
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeReceipt $incomeReceipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IncomeReceipt  $incomeReceipt
     * @return \Illuminate\Http\Response
     */
    public function edit(IncomeReceipt $incomeReceipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IncomeReceipt  $incomeReceipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IncomeReceipt $incomeReceipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IncomeReceipt  $incomeReceipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncomeReceipt $incomeReceipt)
    {
        //
    }
}
