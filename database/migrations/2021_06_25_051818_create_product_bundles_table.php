<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductBundlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('product_bundles')) {

            Schema::create('product_bundles', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('product_id')->nullable()->index('product_bundles_product_id_foreign');
                $table->unsignedInteger('bundle_product_id')->nullable()->index('product_bundles_bundle_product_id_foreign');
                $table->unsignedInteger('order')->nullable();
                $table->unsignedInteger('count_product')->default(1);
                $table->text('title')->nullable();
                $table->text('price_text')->nullable();
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
        if (Schema::hasTable('product_bundles')) {

            Schema::dropIfExists('product_bundles');
        }
    }
}
