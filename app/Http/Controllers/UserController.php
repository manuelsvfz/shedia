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

    public function createView()
    {
        return view('user.create');
    }

    public function deleteView($id)
    {
        $user = User::find($id);
        return view('user.delete', ['user' => $user]);
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
        $passwordHash = bcrypt($request->password);
        $user = new User();
        $user->name = $request->name;
        $user->email_verified_at = null;
        $user->email = $request->email;
        $user->password = $passwordHash;
        $user->isAdmin = $request->isAdmin;
        $user->bankData_id = null;
        $user->remember_token = null;
        $user->save();
        return redirect()->to('users');
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
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->to('users');
    }
}
