<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id('ID_LOCATION');
            $table->string('LOCATION_NAME');
            $table->string('CITY');
            $table->string('PROVINCE');
            $table->decimal('LATITUDE', 10, 6);
            $table->decimal('LONGITUDE', 10, 6);
            $table->unsignedBigInteger('INSERT_USER');
            $table->date('INSERT_DATE');
            $table->unsignedBigInteger('UPDATE_USER');
            $table->date('UPDATE_DATE');
            // Add more columns if needed
        });
    }

    public function down()
    {
        Schema::dropIfExists('location');
    }
}
