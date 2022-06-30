<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyNowProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('buy_now_products')) {

            Schema::create('buy_now_products', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('buy_now_id')->index('buy_now_products_buy_now_id_foreign');
                $table->unsignedInteger('product_id')->index('buy_now_products_product_id_foreign');
                $table->unsignedInteger('quantity')->default(0);
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
        if (Schema::hasTable('buy_now_products')) {

            Schema::dropIfExists('buy_now_products');
        }
    }
}
