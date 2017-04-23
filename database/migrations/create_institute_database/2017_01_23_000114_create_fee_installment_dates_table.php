<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeInstallmentDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_installment_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->bigInteger('fee_collection_detail_id')->unsigned();
			$table->foreign('fee_collection_detail_id','fk_fee_installment_dates_fee_collection_details_id')->references('id')->on('fee_collection_details');
            $table->date('fee_installment');
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
        Schema::drop('fee_installment_dates');
    }
}
