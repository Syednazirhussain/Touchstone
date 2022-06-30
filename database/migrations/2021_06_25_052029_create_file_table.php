<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('file')) {

            Schema::create('file', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->string('origin_name')->nullable();
                $table->string('link_name')->nullable();
                $table->string('folder')->nullable();
                $table->string('title')->nullable();
                $table->text('alt')->nullable();
                $table->string('subject')->nullable();
                $table->unsignedInteger('subject_id')->nullable();
                $table->unsignedInteger('user_id')->nullable()->index('user_id');
                $table->timestamps();
                $table->string('type')->default('image')->comment('Тип файла (image, icon)');
                $table->integer('order')->nullable()->default(1);
                $table->tinyInteger('is_video')->nullable();
                $table->text('video_script')->nullable();
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
        if (Schema::hasTable('file')) {

            Schema::dropIfExists('file');
        }
    }
}
