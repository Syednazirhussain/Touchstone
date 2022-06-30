<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {

            Schema::create('users', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();
                $table->string('email')->unique();
                $table->string('password')->nullable();
                $table->rememberToken();
                $table->timestamps();
                $table->string('name_first')->nullable();
                $table->string('name_last')->nullable();
                $table->string('ref')->nullable();
                $table->integer('customer_type_id')->default(3);
                $table->string('tax_id')->nullable();
                $table->tinyInteger('email_opt_out')->default(0);
                $table->integer('country_id')->nullable();
                $table->tinyInteger('is_admin')->default(0);
                $table->string('phone')->nullable()->comment('телефон в международном формате');
                $table->string('is_member_paid')->default('0');
                $table->string('ontraport_id')->default('0');
                $table->string('locale', 7)->nullable()->default('en-US');
                $table->string('website_alias')->nullable();
                $table->tinyInteger('is_subscribed_ontraport')->nullable()->default(1);
                $table->integer('country_residence')->nullable();
                $table->tinyInteger('upgrade_eligible')->default(1);
                $table->string('google_id')->nullable();
                $table->tinyInteger('is_password_changed')->default(1);
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
        if (Schema::hasTable('users')) {

            Schema::dropIfExists('users');
        }
    }
}
