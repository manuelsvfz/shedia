<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clothes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function favoritesIndex()
    {
        $actualUser = User::findOrFail(Auth::user()->id);
        $name = $actualUser->name;
        $clothes = $actualUser->favorites_id;
        return view('user.favorites', ['clothes' => $clothes, 'name' => $name]);
    }

    public function shoppinCartIndex()
    {
        $actualUser = User::findOrFail(Auth::user()->id);
        $name = $actualUser->name;
        $clothes = $actualUser->shoppinCart_id;
        return view('user.favorites', ['clothes' => $clothes, 'name' => $name]);
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
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
