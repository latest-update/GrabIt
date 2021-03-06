<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id')->index();
            $table->uuid('fridge_id')->index();
            $table->dateTime('time');
            $table->integer('purchased_price');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('fridge_id')->references('id')->on('fridges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operations');
    }
}
