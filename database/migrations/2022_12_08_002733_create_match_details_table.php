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
        Schema::create('match_details', function (Blueprint $table) {
            $table->id();
            $table->text('introduction');
            $table->string('hobby', 250);
            $table->string('focus', 250);
            $table->string('preference', 250);
            $table->string('constellation', 50);
            $table->string('state', 250);
            $table->string('Type', 50);
            $table->string('friend_list', 250);
            $table->bigInteger('relation_shop_users_id')->unsigned();
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
        Schema::dropIfExists('match_details');
    }
};