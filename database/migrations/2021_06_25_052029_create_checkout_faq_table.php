<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('checkout_faq')) {

            Schema::create('checkout_faq', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->text('question');
                $table->text('answer');
                $table->integer('order');
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
        if (Schema::hasTable('checkout_faq')) {

            Schema::dropIfExists('checkout_faq');
        }
    }
}
