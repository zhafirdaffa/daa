<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('menu_id')->constrained()->cascadeOnDelete();
        $table->integer('quantity');
        $table->decimal('total_price', 10, 2);
        $table->timestamp('order_date');
        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
