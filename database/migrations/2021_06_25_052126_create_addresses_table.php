<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('addresses')) {

            Schema::create('addresses', function (Blueprint $table) {
                $table->increments('id');
                $table->string('ship_name')->nullable();
                $table->string('ship_address1')->nullable();
                $table->string('ship_address2')->nullable();
                $table->string('ship_city')->nullable();
                $table->string('postal_code')->nullable();
                $table->string('ship_state')->nullable();
                $table->unsignedInteger('ship_country')->nullable()->index('addresses_ship_country_foreign');
                $table->string('phone')->nullable();
                $table->unsignedInteger('user_id')->nullable()->index('addresses_user_id_foreign');
                $table->timestamps();
                $table->smallInteger('type')->default(1);
                $table->smallInteger('is_default')->default(0);
                $table->integer('ccId')->nullable();
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
        if (Schema::hasTable('addresses')) {

            Schema::dropIfExists('addresses');
        }
    }
}
