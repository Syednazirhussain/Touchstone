<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyNowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('buy_now')) {

            Schema::create('buy_now', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('country_id')->nullable();
                $table->string('coupon_code')->nullable();
                $table->string('currency')->nullable();
                $table->string('ref')->nullable();
                $table->tinyInteger('is_auto_ship')->default(0);
                $table->tinyInteger('is_active')->default(0);
                $table->timestamps();
                $table->string('name');
                $table->string('slug');
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
        if (Schema::hasTable('buy_now')) {

            Schema::dropIfExists('buy_now');
        }
    }
}
