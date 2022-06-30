<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('product_category')) {

            Schema::create('product_category', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->text('name');
                $table->unsignedSmallInteger('order')->nullable();
                $table->text('comment')->nullable();
                $table->string('url')->nullable()->index();
                $table->text('meta_title');
                $table->text('meta_description');
                $table->tinyInteger('is_show_on_menu')->default(0);
                $table->tinyInteger('is_show_mobile_menu')->default(0);
                $table->integer('opengraph_image_id')->nullable();
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
        if (Schema::hasTable('product_category')) {

            Schema::dropIfExists('product_category');
        }
    }
}
