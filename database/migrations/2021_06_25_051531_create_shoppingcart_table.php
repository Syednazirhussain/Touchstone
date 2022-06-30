<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingcartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('shoppingcart')) {

            Schema::create('shoppingcart', function (Blueprint $table) {
                $table->string('identifier');
                $table->string('instance');
                $table->longText('content');
                $table->timestamps();
                $table->primary(['identifier', 'instance']);
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
        if (Schema::hasTable('shoppingcart')) {

            Schema::dropIfExists('shoppingcart');
        }
    }
}
