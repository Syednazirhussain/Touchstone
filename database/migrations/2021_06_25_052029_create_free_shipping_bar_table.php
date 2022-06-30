<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeShippingBarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('free_shipping_bar')) {

            Schema::create('free_shipping_bar', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('country_id');
                $table->decimal('price')->nullable()->default(0.00);
                $table->timestamps();
                $table->text('text')->nullable();
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
        if (Schema::hasTable('free_shipping_bar')) {

            Schema::dropIfExists('free_shipping_bar');
        }
    }
}
