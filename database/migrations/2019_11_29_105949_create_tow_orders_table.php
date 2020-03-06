a<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTowOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('towOrders', function (Blueprint $table) {
            $table->bigIncrements('orderID');
            $table->bigIncrements('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->string('carModel');
            $table->string('licensePlateNumber');
            $table->string('towFrom');
            $table->string('towFromAddress');
            $table->string('towTo');
            $table->string('towToAddress');
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
        Schema::dropIfExists('towOrders');
    }
}
