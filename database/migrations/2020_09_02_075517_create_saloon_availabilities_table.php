<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaloonAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saloon_availabilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('saloon_id');
            $table->UnsignedInteger('business_service_id');
            $table->date('date');
            $table->time('to_time');
            $table->time('from_time');
            $table->integer('price');
            $table->string('saloon_name');
            $table->string('service_name');
            $table->timestamps();

            $table->foreign('saloon_id')->references('id')->on('saloons');
            $table->foreign('business_service_id')->references('id')->on('business_services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saloon_availabilities');
    }
}
