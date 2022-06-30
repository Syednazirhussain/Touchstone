<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentInformationCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('payment_information_countries')) {

            Schema::create('payment_information_countries', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('country_id');
                $table->unsignedInteger('payment_information_id')->index('payment_information_countries_payment_information_id_foreign');
                $table->tinyInteger('can_hemp')->nullable()->default(0);
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
        if (Schema::hasTable('payment_information_countries')) {

            Schema::dropIfExists('payment_information_countries');
        }
    }
}
