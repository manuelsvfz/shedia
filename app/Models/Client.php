<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends User
{

    protected $fillable = ['favorites_id', 'shoppinCart_id', 'bills_id', 'bankData_id'];

    public function favorites()
    {
        return $this->hasMany(Clothes::class);
    }
    public function shoppinCart()
    {
        return $this->hasMany(Clothes::class);
    }

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function bankData()
    {
        return $this->hasOne(BankData::class);
    }
}
