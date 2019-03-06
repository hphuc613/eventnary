<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('price');
            $table->integer('quality');
            $table->dateTime('start_selling');
            $table->dateTime('end_selling');
            $table->integer('min_selling')->nullable();
            $table->integer('max_selling')->nullable();
            $table->string('description')->nullable();
            $table->integer('status')->nullable();
            $table->string('seat')->nullable();
            $table->integer('ticket_type_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ticket_type_id')->references('id')->on('ticket_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
