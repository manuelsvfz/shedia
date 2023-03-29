<?php

namespace App\Http\Controllers;

use App\Models\FavoritesUser;
use App\Models\ShoppincartUser;
use App\Models\User;
use App\Models\Clothes;
use App\Models\ClothesType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use tidy;

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


    public function paymentSuccesful()
    {
        if (Auth::user()) {
            $actualUser = User::findOrFail(Auth::user()->id);
            $shoppinCart = ShoppincartUser::where('idUser', $actualUser->id)->get();
            foreach ($shoppinCart as $item) {
                $item->delete();
            }
        }

        return redirect()->to('/');
    }

    public function shoppinCartIndex($idClothes)
    {
        $actualUser = User::findOrFail(Auth::user()->id);
        $clothes = Clothes::findOrFail($idClothes);

        $shoppinCart = new ShoppincartUser();
        $shoppinCart->idUser = $actualUser->id;
        $shoppinCart->idClothes = $clothes->id;
        $shoppinCart->save();
        return redirect()->to('producto/' . $idClothes);
    }

    public function deleteShoppinCart($idClothes)
    {
        $actualUser = User::findOrFail(Auth::user()->id);
        $clothes = Clothes::findOrFail($idClothes);
        $shoppinCart = ShoppincartUser::where('idUser', $actualUser->id)->where('idClothes', $clothes->id)->first();

        $shoppinCart->delete();
        return redirect()->to('/');
    }

    public function favoritesIndex($idClothes)
    {
        $actualUser = User::findOrFail(Auth::user()->id);
        $clothes = Clothes::findOrFail($idClothes);
        $favorite = new FavoritesUser();
        $favorite->idUser = $actualUser->id;
        $favorite->idClothes = $clothes->id;
        $favorite->save();
        return redirect()->to('producto/' . $idClothes);
    }

    public function deleteFavorites($idClothes)
    {
        $actualUser = User::findOrFail(Auth::user()->id);
        $clothes = Clothes::findOrFail($idClothes);
        $favorite = FavoritesUser::where('idUser', $actualUser->id)->where('idClothes', $clothes->id)->first();
        $favorite->delete();
        return redirect()->to('producto/' . $idClothes);
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

    public function editView($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }

    public function edit(Request $request)
    {
        var_dump($request->name);
        var_dump($request->email);
        $passwordHash = "";
        if ($request->password != "") {
            $passwordHash = bcrypt($request->password);
        }

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($passwordHash != "") {
            $user->password = $passwordHash;
        }
        $user->isAdmin = $request->isAdmin;
        $user->update();
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
