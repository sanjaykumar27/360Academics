<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('student_id')->unsigned();
			$table->foreign('student_id','fk_student_details_students_id')->references('id')->on('students');
			$table->date('dob')->nullable()->default(NULL);
			$table->bigInteger('gender_id')->unsigned();
			$table->foreign('gender_id','fk_student_details_collections_gender_id')->references('id')->on('collections');
			$table->bigInteger('religion_id')->unsigned();
			$table->foreign('religion_id','fk_student_details_collections_religion_id')->references('id')->on('collections');
			$table->bigInteger('category_id')->unsigned();
			$table->foreign('category_id','fk_student_details_collections_category_id')->references('id')->on('collections');
			$table->string('percentgrade')->nullable()->default(NULL);
			$table->bigInteger('previous_class_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('previous_class_id','fk_student_details_classes_id')->references('id')->on('classes');
			$table->smallInteger('previous_result')->nullable()->default(NULL);
			$table->string('previous_school')->nullable()->default(NULL);
			$table->string('passport_num',15)->nullable()->default(NULL);
			$table->date('date_of_joining')->nullable()->default(NULL);
			$table->string('house_name')->nullable()->default(NULL);
			$table->string('image');
			$table->tinyInteger('conveyance_required');
			$table->string('admission_referenced_by',100)->nullable()->default(NULL);
			$table->text('other_additional_information')->nullable()->default(NULL);
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
		Schema::drop('student_details');
    }
}
