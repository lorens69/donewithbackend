<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RequestForm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name')->nullable();
            $table->integer('contact')->nullable();
            $table->string('email_address')->nullable();
            $table->string('current_address')->nullable();
            $table->string('car_model')->nullable();
            $table->integer('yom')->nullable();
            $table->string('service_name')->nullable();
            $table->date('date_time')->nullable();
            $table->string('special_requests')->nullable();
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
        Schema::dropIfExists('RequestForm');
    }
}
