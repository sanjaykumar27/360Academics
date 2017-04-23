<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_structures', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('inst_branch_sess_assoc_id')->unsigned();
			$table->foreign('inst_branch_sess_assoc_id','fk_fee_structures_inst_branch_sess_assoc_id')->references('id')->on('inst_branch_sess_assoc');
			$table->bigInteger('class_id')->unsigned();
			$table->foreign('class_id','fk_fee_structures_classes_id')->references('id')->on('classes');
			$table->bigInteger('fee_component_id')->unsigned();
			$table->foreign('fee_component_id','fk_fee_structures_fee_components_id')->references('id')->on('fee_components');
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
		Schema::drop('fee_structures');
    }
}
