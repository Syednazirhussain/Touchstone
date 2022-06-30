<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('product')) {

            Schema::create('product', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->string('sku')->nullable();
                $table->text('description')->nullable();
                $table->decimal('price_retail')->nullable();
                $table->decimal('price_wholesale')->nullable();
                $table->decimal('price_retail_gbp')->nullable();
                $table->decimal('price_wholesale_gbp')->nullable();
                $table->decimal('price_discounted')->nullable();
                $table->decimal('price_discounted_gbp')->nullable();
                $table->decimal('cv')->nullable();
                $table->decimal('cv_gbp')->nullable();
                $table->tinyInteger('is_moderate')->default(0);
                $table->text('body')->nullable();
                $table->unsignedInteger('category_id')->nullable()->index('product_category_id_foreign');
                $table->timestamps();
                $table->softDeletes();
                $table->integer('product_id')->nullable()->comment('id который пришел с API');
                $table->text('supply')->nullable()->comment('Количество порций, время приема и т.п.');
                $table->string('url')->nullable()->index();
                $table->enum('type', ['product', 'member_subscription'])->default('product');
                $table->text('meta_title')->nullable();
                $table->text('meta_description')->nullable();
                $table->unsignedInteger('main_file_id')->nullable()->index();
                $table->string('order')->nullable()->default('');
                $table->text('title')->nullable();
                $table->double('price_retail_eur', 8, 2)->default(0.00);
                $table->double('price_retail_yen', 8, 2)->default(0.00);
                $table->double('price_wholesale_eur', 8, 2)->default(0.00);
                $table->double('price_wholesale_yen', 8, 2)->default(0.00);
                $table->double('price_discounted_eur', 8, 2)->default(0.00);
                $table->double('price_discounted_yen', 8, 2)->default(0.00);
                $table->double('cv_eur', 8, 2)->default(0.00);
                $table->double('cv_yen', 8, 2)->default(0.00);
                $table->tinyInteger('is_show_autoship')->nullable();
                $table->tinyInteger('is_popular')->nullable();
                $table->decimal('bundles_savings')->nullable();
                $table->decimal('bundles_savings_gbp')->nullable();
                $table->tinyInteger('is_contains_hemp')->nullable()->default(0);
                $table->tinyInteger('is_show_in_vbo_catalog')->nullable();
                $table->integer('best_seller_rank')->nullable()->default(999);
                $table->integer('opengraph_image_id')->nullable();
                $table->tinyInteger('only_available_vbo')->default(0);
                $table->integer('bottle_count')->default(1);
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
        if (Schema::hasTable('product')) {

            Schema::dropIfExists('product');
        }
    }
}
