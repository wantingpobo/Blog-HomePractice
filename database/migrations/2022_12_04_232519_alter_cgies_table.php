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
        Schema::table('cgies', function (Blueprint $table) {
            $table->renameColum('subject', 'title');
            $table->integer('sort')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cgies', function (Blueprint $table) {
            $table->renameColum('title', 'subject');
            $table->integer('sort')->nullable(false)->defult(0)->change();
        });
    }
};