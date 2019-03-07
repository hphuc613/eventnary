<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('bank')->nullable();
            $table->string('branch_bank')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_account_owner')->nullable();
            $table->string('email');
            $table->string('password');
            $table->integer('role_id')->unsigned();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
