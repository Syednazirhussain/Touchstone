<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('product_tab')) {

            Schema::create('product_tab', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('product_id')->index('product_tab_product_id_foreign');
                $table->string('title');
                $table->text('body');
                $table->unsignedTinyInteger('order')->nullable();
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
        if (Schema::hasTable('product_tab')) {

            Schema::dropIfExists('product_tab');
        }
    }
}
