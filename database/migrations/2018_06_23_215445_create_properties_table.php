<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('property_type_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('price');
            $table->string('video')->nullable();
            $table->enum('sale_type',['Rent','Sale']);
            $table->integer('number_of_rooms');
            $table->integer('number_of_bathrooms');
            $table->enum('garage',['Yes','No'])->default('No');
            $table->string('map')->nullable();
            $table->string('street_view')->nullable();
            $table->string('dimension')->nullable();
            $table->boolean('negotiable')->nullable();
            $table->text('social_amenities')->nullable();
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('property_type_id')->references('id')->on('property_types');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
