<?php
// app/Models/Menu.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'price', 
        'stock', 
        'description',
    ];

    // Relasi dengan Pesanan
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
 