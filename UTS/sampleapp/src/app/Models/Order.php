<?php
// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id', 
        'quantity', 
        'total_price', 
        'order_date',
    ];

    // Relasi dengan Menu
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    // Relasi dengan Transaksi
    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
