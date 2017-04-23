<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherFeePenaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_fee_penalties', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('inst_branch_sess_assoc_id')->unsigned();
			$table->foreign('inst_branch_sess_assoc_id','fk_other_fee_penalties_inst_branch_sess_assoc_id')->references('id')->on('inst_branch_sess_assoc');
			$table->bigInteger('student_id')->unsigned();
			$table->foreign('student_id','fk_other_fee_penalties_students_id')->references('id')->on('students');
			$table->bigInteger('fee_collection_id')->unsigned();
			$table->foreign('fee_collection_id','fk_other_fee_penalties_fee_collections_id')->references('id')->on('fee_collections');
			$table->integer('amount');
			$table->tinyInteger('status')->comment('0=> Due; 1=> Paid');
			$table->dateTime('paid_on');
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
		Schema::drop('other_fee_penalties');
    }
}
