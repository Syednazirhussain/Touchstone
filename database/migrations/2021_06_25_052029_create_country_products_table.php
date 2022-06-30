<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('country_products')) {

            Schema::create('country_products', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('country_id')->index('country_products_country_id_foreign');
                $table->unsignedInteger('product_id')->index('country_products_product_id_foreign');
                $table->unsignedInteger('max_buy_count')->default(20);
                $table->tinyInteger('is_active')->default(1);
                $table->timestamps();
                $table->tinyInteger('is_pack')->nullable();
                $table->tinyInteger('is_best_pack')->nullable();
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
        if (Schema::hasTable('country_products')) {

            Schema::dropIfExists('country_products');
        }
    }
}
