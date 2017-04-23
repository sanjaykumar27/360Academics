<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('student_tc', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('inst_branch_sess_assoc_id')->unsigned();
			$table->foreign('inst_branch_sess_assoc_id','fk_student_tc_inst_branch_sess_assoc_id')->references('id')->on('inst_branch_sess_assoc');
			$table->bigInteger('student_id')->unsigned();
			$table->foreign('student_id','fk_student_tc_students_id')->references('id')->on('students');
			$table->date('dateofissue');
			$table->integer('amount');
			$table->string('reciept_no');
			$table->tinyInteger('tcissued');
			$table->tinyInteger('duplicate')->nullable()->default(NULL);
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
        Schema::drop('student_tc');
    }
}
