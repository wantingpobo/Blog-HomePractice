<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('order_number');
            $table->bigInteger('products_id');
            $table->integer('quantity');
            $table->string('delivery_place', 250);
            $table->string('Shipping_company', 250);
            $table->string('payment', 50);
            $table->timestamp('order_date');
            $table->decimal('discount', 18, 4);
            $table->bigInteger('relation_shop_users_id');
            $table->decimal('total', 18, 4);
            $table->string('order_state', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};