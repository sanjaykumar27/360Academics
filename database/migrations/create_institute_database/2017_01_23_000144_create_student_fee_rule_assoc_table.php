<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentFeeRuleAssocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_fee_rule_assoc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id')->unsigned();
			$table->foreign('student_id','fk_student_fee_rule_assoc_students_id')->references('id')->on('students');
			$table->bigInteger('fee_rule_id')->unsigned();
			$table->foreign('fee_rule_id','fk_student_fee_rule_assoc_fee_rules_id')->references('id')->on('fee_rules');
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
        Schema::drop('student_fee_rule_assoc');
    }
}
