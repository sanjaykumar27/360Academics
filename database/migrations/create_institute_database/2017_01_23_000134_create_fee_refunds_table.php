<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeRefundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_refunds', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('fee_collection_detail_id')->unsigned();
			$table->foreign('fee_collection_detail_id','fk_fee_refunds_fee_collection_details_id')->references('id')->on('fee_collection_details');
			$table->bigInteger('fee_component_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('fee_component_id','fk_fee_refunds_fee_components_id')->references('id')->on('fee_components');
			$table->string('original_fee_receipt_id');
			$table->string('fee_refund_reciept_no');
			$table->string('remark');
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
		Schema::drop('fee_refunds');
    }
}
