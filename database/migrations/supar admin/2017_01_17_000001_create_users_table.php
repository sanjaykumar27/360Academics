<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('users', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('fname',100);
			$table->string('lname',100);
			$table->string('country_code',6);
			$table->string('phone',15);
			$table->string('address1');
			$table->string('address2');
			$table->string('zipcode',6);
			$table->bigInteger('city_id')->unsigned();
			$table->foreign('city_id','fk_users_cities_id')->references('id')->on('cities');
			$table->string('profile_picture',100);
			$table->string('email_token',100);
			$table->string('mobile_otp',6);
			$table->rememberToken();
			$table->string('created_by',60);
			$table->string('updated_by',60);
			$table->timestamps();
			$table->dateTime('last_login_date_time')->nullable();
			$table->enum('entity_status', ['Active', 'Inactive','Deleted'])->default('Active');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
