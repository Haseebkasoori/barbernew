<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlotBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slot_booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('availability_id');
            $table->UnsignedBigInteger('saloon_id');
            $table->UnsignedInteger('user_id');
            $table->Integer('payment')->default('0');
            $table->timestamps();
            
            $table->foreign('availability_id')->references('id')->on('saloon_availabilities');
            $table->foreign('saloon_id')->references('id')->on('saloons');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slot_booking');
    }
}
