<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAoBankAccountsTables extends Migration
{

    public function up()
    {
        Schema::create('ao_bank_accounts_banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number', 5);
            $table->string('name');
            $table->string('alias', 40)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ao_bank_accounts_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bank_id')->unsigned();
            $table->foreign('bank_id')->references('id')->on('ao_bank_accounts_banks');
            $table->string('holder');
            $table->string('agency_number', 20);
            $table->string('operation_code', 5);
            $table->string('account_number', 20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('ao_bank_accounts_accounts');
        Schema::drop('ao_bank_accounts_banks');
    }

}