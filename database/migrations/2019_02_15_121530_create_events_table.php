<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('link')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('address');
            $table->string('location')->nullable();
            $table->string('current_image')->nullable();
            $table->string('organizational')->nullable();
            $table->string('organizational_link')->nullable();
            $table->string('phone_contact')->nullable();
            $table->integer('status')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('ward_id')->unsigned();
            $table->integer('event_type_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ward_id')->references('id')->on('wards');
            $table->foreign('event_type_id')->references('id')->on('event_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
