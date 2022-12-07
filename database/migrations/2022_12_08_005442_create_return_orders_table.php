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
        Schema::create('return_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('return_order_number', 50);
            $table->string('refund_to', 50);
            $table->string('reason', 50);
            $table->bigInteger('orders_order_number');
            $table->decimal('refund_amount', 18, 4);
            $table->datetime('return_request_date');
            $table->datetime('refund_agree_date');
            $table->string('return_request_state', 50);
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
        Schema::dropIfExists('return_orders');
    }
};
