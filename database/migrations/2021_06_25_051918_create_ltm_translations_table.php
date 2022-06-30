<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLtmTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ltm_translations')) {

            Schema::create('ltm_translations', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->integer('status')->default(0);
                $table->string('locale');
                $table->string('group');
                $table->string('key');
                $table->text('value')->nullable();
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
        if (Schema::hasTable('ltm_translations')) {

            Schema::dropIfExists('ltm_translations');
        }
    }
}
