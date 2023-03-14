<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use App\Models\ClothesType;
use Illuminate\Http\Request;

class ClothesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clothes = Clothes::all();
        return view('clothes.index', ['clothes' => $clothes]);
    }


    public function createView()
    {
        $clothesType = ClothesType::all();
        return view('clothes.create', ['clothesType' => $clothesType]);
    }

    public function deleteView($id)
    {
        $clothes = Clothes::find($id);
        return view('clothes.delete', ['clothes' => $clothes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //size,color,price,gender
        $clothes = new Clothes();
        $clothes->clotheType_id = $request->clotheType_id;
        $clothes->size = $request->size;
        $clothes->color = $request->color;
        $clothes->price = $request->price;
        $clothes->gender = $request->gender;
        $clothes->save();
        return redirect()->to('clothes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clothes $clothes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clothes $clothes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clothes = Clothes::find($id);
        $clothes->delete();
        return redirect()->to('clothes');
    }
}
