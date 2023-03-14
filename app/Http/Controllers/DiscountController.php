<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discounts = Discount::all();
        return view('discount.index', ['discounts' => $discounts]);
    }

    public function createView()
    {
        return view('discount.create');
    }

    public function deleteView($id)
    {
        $discount = Discount::find($id);
        return view('discount.delete', ['discount' => $discount]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $discount = new Discount();
        $discount->name = $request->name;
        $discount->percentageDiscount = $request->percentageDiscount;
        $discount->save();
        return redirect()->to('discounts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Discount $discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $discount = Discount::find($id);
        $discount->delete();
        return redirect()->to('discounts');
    }
}
