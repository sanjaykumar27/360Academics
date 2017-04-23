<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAcademicHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_academic_history', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('student_id')->unsigned();
			$table->foreign('student_id','fk_student_academic_history_students_id')->references('id')->on('students');
			$table->bigInteger('class_sec_assoc_id')->unsigned();
			$table->foreign('class_sec_assoc_id','fk_student_academic_history_class_sec_assoc_id')->references('id')->on('class_sec_assoc');
			$table->tinyInteger('academic_status')->comment('0 => promoted, 1 => currently studying');
			$table->tinyInteger('student_type')->comment('0=> old ; 1=> new; 2=> left');
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
		Schema::drop('student_academic_history');
    }
}
