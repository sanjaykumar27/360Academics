<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeCollectionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_collection_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fee_collection_id')->unsigned();
			$table->foreign('fee_collection_id','fk_fee_collection_details_fee_collections_id')->references('id')->on('fee_collections');
			$table->bigInteger('collection_type_id')->nullable()->default(NULL)->comment('316=> normal inst fees; 1=> late fees; 2=> cheque bounce; 3=> conveyance fees;')->unsigned();
			$table->foreign('collection_type_id','fk_fee_collection_details_collections_collection_type_id')->references('id')->on('collections');
			$table->bigInteger('fee_mode_id')->nullable()->default(NULL)->comment('316=> normal inst fees; 1=> late fees; 2=> cheque bounce; 3=> conveyance fees;')->unsigned();
			$table->foreign('fee_mode_id','fk_fee_collection_details_collections_fee_mode_id')->references('id')->on('collections');
			$table->float('fee_installment_amount');
            $table->tinyInteger('fee_status')->comment('0=> In Process ; 1=> Paid ; 2=> ChequeBounced ');
            $table->tinyInteger('refundstatus')->default(0);
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
        Schema::drop('fee_collection_details');
    }
}
