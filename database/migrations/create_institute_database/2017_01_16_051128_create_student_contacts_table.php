<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_contacts', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('student_id')->unsigned();
			$table->foreign('student_id','fk_student_contacts_students_id')->references('id')->on('students');
			$table->string('current_address1')->nullable()->default(NULL);
			$table->string('current_address2')->nullable()->default(NULL);
			$table->bigInteger('current_city_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('current_city_id','fk_student_contacts_cities_current_city_id')->references('id')->on('cities');
			$table->string('current_zipcode',6)->default(0);
			$table->string('permanent_address1')->nullable()->default(NULL);
			$table->string('permanent_address2')->nullable()->default(NULL);
			$table->bigInteger('permanent_city_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('permanent_city_id','fk_student_contacts_cities_permanent_city_id')->references('id')->on('cities');
			$table->string('permanent_zipcode',6)->default(0);
			$table->string('mobile',15)->default(0);
			$table->string('phone1',15)->default(0);
			$table->string('phone2',15)->default(0);
			$table->string('fax1',15)->default(0);
			$table->string('fax2',15)->default(0);
			$table->string('email')->nullable()->default(NULL);
			$table->string('emeregency_contact_name');
			$table->string('emeregency_phoneno');
			$table->string('emeregency_contact_address');
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
		Schema::drop('student_contacts');
    }
}
