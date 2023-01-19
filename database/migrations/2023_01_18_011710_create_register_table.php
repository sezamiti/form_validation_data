<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->id();
            $table->string('nameOrganization')->nullable();
            $table->string('legalAdress')->nullable();
            $table->string('postcode')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->string('bankName')->nullable();
            $table->string('bin')->nullable();
            $table->string('bik')->nullable();
            $table->string('iik')->nullable();
            $table->string('responsPerson')->nullable();
            $table->string('responsnumber')->nullable();
            $table->string('responsemail')->nullable();
            $table->string('name')->nullable();
            $table->string('domain')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('register');
    }
}
