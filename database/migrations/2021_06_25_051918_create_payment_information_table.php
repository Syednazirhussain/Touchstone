<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('payment_information')) {

            Schema::create('payment_information', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->text('name');
                $table->string('code')->nullable();
                $table->tinyInteger('show_for_hemp')->default(0);
                $table->string('icon')->nullable();
                $table->integer('order')->nullable();
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
        if (Schema::hasTable('payment_information')) {

            Schema::dropIfExists('payment_information');
        }
    }
}
