<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPackAdvantagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('product_pack_advantages')) {

            Schema::create('product_pack_advantages', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('product_id')->index('product_pack_advantages_product_id_foreign');
                $table->text('text');
                $table->tinyInteger('type')->nullable();
                $table->integer('order')->nullable();
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
        if (Schema::hasTable('product_pack_advantages')) {

            Schema::dropIfExists('product_pack_advantages');
        }
    }
}
