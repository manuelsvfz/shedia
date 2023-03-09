<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoritesUser extends Model
{
    protected $fillable = ['idUser', 'idClothes'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Clothes()
    {
        return $this->belongsTo(Clothes::class);
    }
}
