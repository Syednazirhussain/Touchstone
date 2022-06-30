<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopBarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('top_bar')) {

            Schema::create('top_bar', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->text('bar_text');
                $table->text('button_text');
                $table->string('button_link');
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
        if (Schema::hasTable('top_bar')) {

            Schema::dropIfExists('top_bar');
        }
    }
}
