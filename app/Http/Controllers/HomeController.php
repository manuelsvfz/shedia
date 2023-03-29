<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clothes;
use App\Models\ClothesType;
use App\Models\FavoritesUser;
use App\Models\ShoppincartUser;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }
    public function index($gender)
    {
        $clothes = Clothes::where('gender', $gender)->get();
        $clothesType = ClothesType::all();
        return view('home.index', ["clothes" => $clothes, "clothesType" => $clothesType]);
    }


    public function carritosView()
    {
        $actualUser = User::findOrFail(Auth::user()->id);
        $userShoppinCart = ShoppincartUser::where('idUser', $actualUser->id)->get();
        $clothes = [];
        $clothesType = ClothesType::all();
        foreach ($userShoppinCart as $clothe) {
            $clothes[] = Clothes::findOrFail($clothe->idClothes);
        }
        return view('user.carrito', ["clothes" => $clothes, "types" => $clothesType]);
    }

    public function favoritesView()
    {
        $actualUser = User::findOrFail(Auth::user()->id);
        $userFavorites = FavoritesUser::where('idUser', $actualUser->id)->get();
        $clothes = [];
        $clothesType = ClothesType::all();
        foreach ($userFavorites as $clothe) {
            $clothes[] = Clothes::findOrFail($clothe->idClothes);
        }
        return view('user.favorites', ["clothes" => $clothes, "clothesType" => $clothesType]);
    }

    public function producto($idProducto)
    {
        if (Auth::user()) {
            $actualUser = User::findOrFail(Auth::user()->id);
        }

        $clothes = Clothes::findOrFail($idProducto);
        $name = ClothesType::findOrFail($clothes->clotheType_id);

        if (Auth::user() != null) {
            $userFavorites = FavoritesUser::where('idUser', $actualUser->id)->get();
            if ($userFavorites != null) {
                $thisFavorites = $userFavorites->where('idClothes', $clothes->id)->first() != null;
            } else {
                $thisFavorites = false;
            }

            $userShoppinCart = ShoppincartUser::where('idUser', $actualUser->id)->get();
            if ($userShoppinCart != null) {
                $thisShoppinCart = $userShoppinCart->where('idClothes', $clothes->id)->first() != null;
            } else {
                $thisShoppinCart = false;
            }
            return view('home.product', [
                "clothes" => $clothes,
                "name" => $name->name,
                "thisFavorites" => $thisFavorites,
                "thisShoppinCart" => $thisShoppinCart
            ]);
        } else {
            return view('home.product', [
                "clothes" => $clothes,
                "name" => $name->name,
            ]);
        }
    }
}
