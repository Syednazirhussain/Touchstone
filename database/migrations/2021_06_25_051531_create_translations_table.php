<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('translations')) {

            Schema::create('translations', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->string('locale')->default('en');
                $table->string('group');
                $table->string('name');
                $table->string('grouped_key');
                $table->text('value')->nullable();
                $table->index(['locale', 'group']);
                $table->unique(['locale', 'group', 'name']);
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
        if (Schema::hasTable('translations')) {

            Schema::dropIfExists('translations');
        }
    }
}
