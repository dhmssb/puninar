<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporationsTable extends Migration
{
    public function up()
    {
        Schema::create('corporations', function (Blueprint $table) {
            $table->id('ID_CORPORATION');
            $table->string('CORPORATION_NAME');
            $table->unsignedBigInteger('INSERT_USER');
            $table->date('INSERT_DATE');
            $table->unsignedBigInteger('UPDATE_USER');
            $table->date('UPDATE_DATE');
            // Add more columns if needed
        });
    }

    public function down()
    {
        Schema::dropIfExists('corporation');
    }
}
