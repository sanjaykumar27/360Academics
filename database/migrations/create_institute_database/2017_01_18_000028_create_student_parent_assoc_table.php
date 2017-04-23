<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentParentAssocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_parent_assoc', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('student_id')->unsigned();
			$table->foreign('student_id','fk_student_parent_assoc_students_id')->references('id')->on('students');
			$table->bigInteger('parent_id')->unsigned();
			$table->foreign('parent_id','fk_student_parent_assoc_parents_id')->references('id')->on('parents');
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
		Schema::drop('student_parent_assoc');
    }
}
