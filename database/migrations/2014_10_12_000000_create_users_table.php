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
            $table->integer('location_id')->unsigned();
            $table->string('name');
             $table->enum('gender',['Male','Female']);
             $table->string('nationality');
             $table->string('email')->unique();
             $table->text('address')->nullable();
             $table->string('phone_number')->nullable();
             $table->integer('age')->nullable();
             $table->string('profile_pic')->nullable();
             $table->enum('user_type', ['Property Owner', 'Personnel','Admin']);
             $table->string('password');
             $table->boolean('status')->default(0);
             $table->softDeletes();
             $table->rememberToken();
             $table->timestamps();

             $table->foreign('location_id')
                          ->references('id')
                          ->on('locations');
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
