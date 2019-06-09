<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('Reservation');
        Schema::create('Reservation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('roomId')->references('roomId')->on('rooms');
            $table->integer('eventId')->references('eventId')->on('events');
            $table->dateTime('start');
            $table->dateTime('end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
