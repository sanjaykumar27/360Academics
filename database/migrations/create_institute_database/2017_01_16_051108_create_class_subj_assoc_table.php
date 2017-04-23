<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassSubjAssocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_subj_assoc', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->bigInteger('inst_branch_sess_assoc_id')->unsigned();
			$table->foreign('inst_branch_sess_assoc_id','fk_class_subj_assoc_inst_branch_sess_assoc_id')->references('id')->on('inst_branch_sess_assoc');
            $table->bigInteger('class_id')->unsigned();
			$table->foreign('class_id','fk_class_subj_assoc_classes_id')->references('id')->on('classes');
			$table->bigInteger('subject_id')->unsigned();
			$table->foreign('subject_id','fk_class_subj_assoc_subjects_id')->references('id')->on('subjects');
            $table->enum('isoptional',['0','1']);
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
        Schema::drop('class_subj_assoc');
    }
}
