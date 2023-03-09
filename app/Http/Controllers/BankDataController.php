<?php

namespace App\Http\Controllers;

use App\Models\BankData;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BankDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bankdatas = Bankdata::all();
        return view('bankdata.index', ['bankdatas' => $bankdatas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BankData $bankData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BankData $bankData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BankData $bankData)
    {
        //
    }
}
