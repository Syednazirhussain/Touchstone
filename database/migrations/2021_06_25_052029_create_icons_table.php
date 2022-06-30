<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('icons')) {

            Schema::create('icons', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('product_id');
                $table->text('text');
                $table->timestamps();
                $table->integer('order')->nullable()->default(1);
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
        if (Schema::hasTable('icons')) {

            Schema::dropIfExists('icons');
        }
    }
}
