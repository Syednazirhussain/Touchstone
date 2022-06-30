<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (Schema::hasTable('user')) {
            
            Schema::table('user', function (Blueprint $table) {

                $table->string('username')->unique();
                $table->string('password')->nullable();
                $table->boolean('is_logged_in');
            });

        } else {

            Schema::create('user', function (Blueprint $table) {
                
                $table->increments('id')->unsignedInteger('id');
                $table->string('username')->unique();
                $table->string('password')->nullable();
                $table->boolean('is_logged_in');
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('user')) {

            Schema::dropIfExists('user');
        }
    }
}
