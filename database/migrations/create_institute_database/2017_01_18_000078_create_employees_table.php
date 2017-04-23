<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->bigInteger('user_id')->unsigned();
			$table->foreign('user_id','fk_employees_users_id')->references('id')->on('users');
            $table->string('code',25);
			$table->date('dob')->nullable()->nullable()->default(NULL)->default(NULL);
            //$table->smallInteger('employeetype')->default(0);
			$table->bigInteger('department_id')->unsigned();
			$table->foreign('department_id','fk_employees_collections_department_id')->references('id')->on('collections');
            $table->bigInteger('gender_id')->unsigned();
			$table->foreign('gender_id','fk_employees_collections_gender_id')->references('id')->on('collections');
			$table->bigInteger('religion_id')->unsigned();
			$table->foreign('religion_id','fk_employees_collections_religion_id')->references('id')->on('collections');
			$table->bigInteger('category_id')->unsigned();
			$table->foreign('category_id','fk_employees_collections_category_id')->references('id')->on('collections');
            $table->string('currentaddress1');
            $table->string('currentaddress2')->nullable()->default(NULL);
            //$table->bigInteger('currentsuburbid')->default(0);
            $table->bigInteger('current_city_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('current_city_id','fk_employees_cities_current_city_id')->references('id')->on('cities');
            $table->string('current_zipcode',6)->default(0);
            $table->string('permanent_address1')->nullable()->default(NULL);
			$table->string('permanent_address2')->nullable()->default(NULL);
			$table->bigInteger('permanent_city_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('permanent_city_id','fk_employees_cities_permanent_city_id')->references('id')->on('cities');
			$table->string('permanent_zipcode',6)->default(0);
            $table->string('mobile1',15)->default(0);
            $table->string('mobile2',15)->default(0);
            $table->string('phone1',15)->default(0);
            $table->string('phone2',15)->default(0);
            $table->string('fax1',15)->default(0);
            $table->string('fax2',15)->default(0);
            $table->string('email1');
            $table->string('email2')->nullable()->default(NULL);
            $table->string('passport_num',15);
            $table->date('date_of_joining');
            $table->binary('remarks');
            $table->string('admission_ref');
            $table->string('created_by',60);
            $table->string('updated_by',60);
            $table->timestamps();
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
        Schema::drop('employees');
    }
}
