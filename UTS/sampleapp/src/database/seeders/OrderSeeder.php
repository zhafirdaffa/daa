<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::insert([
        [
            'menu_id' => 1,
            'quantity' => 2,
            'total_price' => 50000,
            'order_date' => Carbon::now(),
        ],
        [
            'menu_id' => 2,
            'quantity' => 1,
            'total_price' => 23000,
            'order_date' => Carbon::now(),
        ],
        [
            'menu_id' => 3,
            'quantity' => 3,
            'total_price' => 72000,
            'order_date' => Carbon::now(),
        ],
        ]);
    }
}
