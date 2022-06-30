<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('order_history')) {

            Schema::create('order_history', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('user_id')->nullable()->index('order_history_user_id_foreign');
                $table->unsignedInteger('product_id')->nullable()->index('order_history_product_id_foreign');
                $table->decimal('price');
                $table->decimal('price_gbp')->nullable();
                $table->smallInteger('count');
                $table->unsignedInteger('address_id')->index();
                $table->unsignedInteger('card_id')->index();
                $table->timestamps();
                $table->tinyInteger('is_autoship')->default(0);
                $table->string('status')->nullable();
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
        if (Schema::hasTable('order_history')) {

            Schema::dropIfExists('order_history');
        }
    }
}
