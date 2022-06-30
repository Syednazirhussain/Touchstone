<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('cart_summary')) {

            Schema::create('cart_summary', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->tinyInteger('type_points')->nullable();
                $table->integer('user_id');
                $table->tinyInteger('user_assigned_type')->nullable();
                $table->tinyInteger('status_cart');
                $table->integer('user_assigned_id')->nullable();
                $table->timestamps();
                $table->integer('user_assigned_customer_type_id')->nullable();
                $table->tinyInteger('is_new_customer')->nullable();
                $table->string('promocode')->nullable();
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
        if (Schema::hasTable('cart_summary')) {

            Schema::dropIfExists('cart_summary');
        }
    }
}
