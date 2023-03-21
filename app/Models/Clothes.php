<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    protected $fillable = ['clotheType_id', 'size',  'color', 'price', 'gender', 'image'];

    public function clotheType()
    {
        return $this->hasOne(ClothesType::class);
    }
}
