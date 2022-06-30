<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('settings')) {

            Schema::create('settings', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->text('terms')->nullable();
                $table->timestamps();
                $table->string('phone_us')->nullable();
                $table->string('phone_uk')->nullable();
                $table->string('phone_eu')->nullable();
                $table->string('email')->nullable();
                $table->text('hours')->nullable();
                $table->text('checkout_html_text')->nullable();
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
        if (Schema::hasTable('settings')) {

            Schema::dropIfExists('settings');
        }
    }
}
