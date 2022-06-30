<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoLoginHashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('auto_login_hashes')) {

            Schema::create('auto_login_hashes', function (Blueprint $table) {
                $table->increments('id');
                $table->string('hash')->unique();
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
        if (Schema::hasTable('auto_login_hashes')) {

            Schema::dropIfExists('auto_login_hashes');
        }
    }
}
