<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAoBankAccountsTables extends Migration
{

    public function up()
    {
        Schema::create('ao_ba_banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number', 5);
            $table->string('name');
            $table->string('alias')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ao_ba_bank_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bank_id')->unsigned();
            $table->foreign('bank_id')->references('id')->on('ao_ba_banks');
            $table->string('holder');
            $table->string('agency_number');
            $table->string('operation_code');
            $table->string('account_number');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('ao_ba_bank_accounts');
        Schema::drop('ao_ba_banks');
    }

}