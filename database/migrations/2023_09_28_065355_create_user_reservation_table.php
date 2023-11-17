<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->nullable();
            $table->string('contact')->nullable();
            $table->string('current_address')->nullable();
            $table->string('model')->nullable();
            $table->string('yom')->nullable();
            $table->string('service_name')->nullable();
            $table->string('status')->nullable();
            $table->date('date')->nullable();
            $table->string('special_instructions')->nullable();
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
        Schema::dropIfExists('user_reservation');
    }
}
