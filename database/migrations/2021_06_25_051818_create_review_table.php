<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('review')) {

            Schema::create('review', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->unsignedInteger('product_id')->nullable()->index('review_product_id_foreign');
                $table->smallInteger('vote');
                $table->text('review');
                $table->string('first_name')->nullable();
                $table->string('user_email')->nullable();
                $table->unsignedInteger('user_id')->nullable()->index('review_user_id_foreign');
                $table->tinyInteger('is_moderate')->default(0);
                $table->timestamps();
                $table->string('second_name')->nullable();
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
        if (Schema::hasTable('review')) {

            Schema::dropIfExists('review');
        }
    }
}
