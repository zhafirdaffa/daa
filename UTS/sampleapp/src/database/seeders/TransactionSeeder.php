<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Carbon\Carbon;

class TransactionSeeder extends Seeder
{
    public function run()
    {
    Transaction::insert([
        [
            'order_id' => 1,
            'payment_method' => 'cash',
            'transaction_date' => Carbon::now(),
        ],
        [
            'order_id' => 2,
            'payment_method' => 'debit',
            'transaction_date' => Carbon::now()->subDay(),
        ],
        [
            'order_id' => 3,
            'payment_method' => 'e-wallet',
            'transaction_date' => Carbon::now()->subDays(2),
        ],
        ]);
    }
}
