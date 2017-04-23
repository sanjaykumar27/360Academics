<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeOtherChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_other_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('inst_branch_sess_assoc_id')->unsigned();
			$table->foreign('inst_branch_sess_assoc_id','fk_fee_other_charges_inst_branch_sess_assoc_id')->references('id')->on('inst_branch_sess_assoc');
            $table->string('name',20);
            $table->string('description')->nullable()->default(NULL);
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
        Schema::drop('fee_other_charges');
    }
}
