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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('category', 50);
            $table->string('image', 250);
            $table->text('description');
            $table->decimal('price', 18, 4);
            $table->string('selection', 50);
            $table->integer('sort')->nullable();
            $table->string('sale', 50);
            $table->integer('quantity_sold')->nullable();
            $table->string('review', 250);
            $table->integer('stock')->nullable();
            $table->string('tag', 50);
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
        Schema::dropIfExists('products');
    }
};