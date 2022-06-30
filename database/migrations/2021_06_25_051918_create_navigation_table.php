<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavigationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('navigation')) {

            Schema::create('navigation', function (Blueprint $table) {
                $table->integer('id')->primary();
                $table->integer('is_parent')->nullable()->default(1);
                $table->integer('parent_id')->default(0);
                $table->string('name')->nullable();
                $table->longText('link')->nullable();
                $table->string('slug')->nullable();
                $table->integer('sortOrder')->default(0);
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->useCurrent();
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
        if (Schema::hasTable('navigation')) {
            
            Schema::dropIfExists('navigation');
        }
    }
}
