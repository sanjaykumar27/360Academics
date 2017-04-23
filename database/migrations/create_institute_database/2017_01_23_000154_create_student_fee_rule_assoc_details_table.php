<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentFeeRuleAssocDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_fee_rule_assoc_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_fee_rule_assoc_id')->unsigned();
			$table->foreign('student_fee_rule_assoc_id','fk_student_fee_rule_assoc_details_student_fee_rule_assoc_id')->references('id')->on('student_fee_rule_assoc');
            $table->date('installment_date');
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
        Schema::drop('student_fee_rule_assoc_details');
    }
}
