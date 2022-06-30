<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimilarProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('similar_products')) {

            Schema::create('similar_products', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('product_id')->index();
                $table->unsignedInteger('similar_product_id')->index();
                $table->timestamps();
                $table->unique(['product_id', 'similar_product_id']);
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
        if (Schema::hasTable('similar_products')) {

            Schema::dropIfExists('similar_products');
        }
    }
}
