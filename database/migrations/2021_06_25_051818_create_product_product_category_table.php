<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductProductCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('product_product_category')) {

            Schema::create('product_product_category', function (Blueprint $table) {
                $table->unsignedInteger('product_id')->nullable();
                $table->unsignedInteger('category_id')->nullable();
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
        if (Schema::hasTable('product_product_category')) {

            Schema::dropIfExists('product_product_category');
        }
    }
}
