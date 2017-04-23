<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_collections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('inst_branch_sess_assoc_id')->unsigned();
			$table->foreign('inst_branch_sess_assoc_id','fk_fee_collections_inst_branch_sess_assoc_id')->references('id')->on('inst_branch_sess_assoc');
			$table->bigInteger('student_id')->unsigned();
			$table->foreign('student_id','fk_fee_collections_students_id')->references('id')->on('students');
			$table->bigInteger('class_sec_assoc_id')->unsigned();
			$table->foreign('class_sec_assoc_id','fk_fee_collections_class_sec_assoc_id')->references('id')->on('class_sec_assoc');
            $table->string('receipt_id');
            $table->text('remark');
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
        Schema::drop('fee_collections');
    }
}
