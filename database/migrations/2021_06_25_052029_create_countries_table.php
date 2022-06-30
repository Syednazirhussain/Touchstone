<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('countries')) {

            Schema::create('countries', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->text('name');
                $table->timestamps();
                $table->string('iso3');
                $table->char('currency', 3)->default('usd');
                $table->tinyInteger('is_active')->default(1);
                $table->decimal('min_checkout_price')->default(1.00);
                $table->decimal('max_checkout_price')->default(10000.00);
                $table->integer('max_checkout_unit_count')->default(1000);
                $table->tinyInteger('show_subscribing_ontraport')->nullable()->default(0);
                $table->tinyInteger('has_shipping')->default(1);
                $table->tinyInteger('has_residence')->default(1);
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
        if (Schema::hasTable('countries')) {
            
            Schema::dropIfExists('countries');
        }
    }
}
