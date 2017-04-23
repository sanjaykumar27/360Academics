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
			$table->bigInteger('institute_id')->unsigned();
			$table->foreign('institute_id','fk_users_institutes_id')->references('id')->on('institutes');
			$table->bigInteger('institute_branch_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('institute_branch_id','fk_users_institute_branches_id')->references('id')->on('institute_branches');
			$table->string('username');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('fname',100);
			$table->string('lname',100);
			$table->string('image',100);
			$table->string('country_code',6);
			$table->string('phone',15);
			$table->string('address1');
			$table->string('address2');
			$table->string('zipcode',6);
			$table->bigInteger('city_id')->unsigned();
			$table->foreign('city_id','fk_users_cities_id')->references('id')->on('cities');
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
