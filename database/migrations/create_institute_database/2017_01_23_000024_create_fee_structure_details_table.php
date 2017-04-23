<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeStructureDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_structure_details', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('fee_structure_id')->unsigned();
			$table->foreign('fee_structure_id','fk_fee_structure_details_fee_structures_id')->references('id')->on('fee_structures');
			$table->integer('amount');
			$table->date('due_date');
			$table->bigInteger('frequency_id')->unsigned();
			$table->foreign('frequency_id','fk_fee_structure_details_collections_frequency_id')->references('id')->on('collections');
			$table->tinyInteger('is_refundable')->default(0);
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
		Schema::drop('fee_structure_details');
    }
}
