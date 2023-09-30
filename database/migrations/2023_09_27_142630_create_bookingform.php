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
        Schema::create('bookingform', function (Blueprint $table) {
            $table->id('client_id');
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('phoneNumber');
            $table->date('date');
            $table->time('appointmentTime');
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
        Schema::dropIfExists('bookingform');
    }
};
