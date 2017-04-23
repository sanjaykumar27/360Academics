<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstBranchSessAssocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inst_branch_sess_assoc', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('institute_id')->unsigned();
			$table->foreign('institute_id','fk_inst_branch_sess_assoc_institutes_id')->references('id')->on('institutes');
			$table->bigInteger('institute_branch_id')->unsigned();
			$table->foreign('institute_branch_id','fk_inst_branch_sess_assoc_institute_branches_id')->references('id')->on('institute_branches');
			$table->bigInteger('academic_session_id')->unsigned();
			$table->foreign('academic_session_id','fk_inst_branch_sess_assoc_academic_sessions_id')->references('id')->on('academic_sessions');
			$table->string('remarks');
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
		Schema::drop('inst_branch_sess_assoc');
    }
}
