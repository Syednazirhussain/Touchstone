<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('cart')) {

            Schema::create('cart', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->string('subject');
                $table->unsignedInteger('key_id');
                $table->integer('qnt');
                $table->double('price', 8, 2);
                $table->unsignedInteger('user_id');
                $table->timestamps();
                $table->tinyInteger('auto_ship');
                $table->string('next_process_date')->nullable();
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
        if (Schema::hasTable('cart')) {

            Schema::dropIfExists('cart');
        }
    }
}
