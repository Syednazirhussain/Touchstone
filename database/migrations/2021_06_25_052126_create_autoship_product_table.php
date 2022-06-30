<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoshipProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('autoship_product')) {

            Schema::create('autoship_product', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('autoship_id')->nullable();
                $table->unsignedInteger('product_id')->nullable();
                $table->unsignedInteger('count')->nullable();
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
        if (Schema::hasTable('autoship_product')) {

            Schema::dropIfExists('autoship_product');
        }
    }
}
