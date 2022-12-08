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
        Schema::create('relation_shop_users', function (Blueprint $table) {
            $table->id();
            $table->string('account', 50);
            $table->string('password', 50);
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('phone', 50);
            $table->string('address', 250);
            $table->string('points', 250)->nullable();
            $table->string('collection', 250)->nullable();
            $table->string('class', 50)->nullable();
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
        Schema::dropIfExists('relation_shop_users');
    }
};