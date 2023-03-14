<?php

namespace App\Http\Controllers;

use App\Models\ClothesType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClothesTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clothestype = ClothesType::all();
        return view("clothestype.index", ['clothestype' => $clothestype]);
    }


    public function createView()
    {
        return view("clothestype.create");
    }

    public function deleteView($id)
    {
        $clothesType = ClothesType::find($id);
        return view('clothestype.delete', ['clothesType' => $clothesType]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clothesType = new ClothesType();
        $clothesType->name = $request->name;
        $clothesType->save();
        return redirect()->to('clothestype');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClothesType $clothesType)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClothesType $clothesType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clothesType = ClothesType::find($id);
        $clothesType->delete();
        return redirect()->to('clothestype');
    }
}
