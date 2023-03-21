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

    public function producto($idProducto)
    {
        $actualUser = User::findOrFail(Auth::user()->id);
        $clothes = Clothes::findOrFail($idProducto);
        $name = ClothesType::findOrFail($clothes->clotheType_id);

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
    }
}
