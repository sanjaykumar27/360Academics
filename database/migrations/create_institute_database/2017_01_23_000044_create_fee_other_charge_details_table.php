<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeOtherChargeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_other_charge_details', function (Blueprint $table) {
            $table->bigIncrements('id');
			 $table->bigInteger('fee_other_charge_id')->unsigned();
			$table->foreign('fee_other_charge_id','fk_fee_other_charge_details_fee_other_charges_id')->references('id')->on('fee_other_charges');
			$table->bigInteger('charge_mode_id')->unsigned();
			$table->foreign('charge_mode_id','fk_fee_other_charge_details_collections_charge_mode_id')->references('id')->on('collections');
			$table->bigInteger('other_fee_type_id')->unsigned();
			$table->foreign('other_fee_type_id','fk_fee_other_charge_details_collections_other_fee_type_id')->references('id')->on('collections');
			$table->bigInteger('frequency_id')->unsigned();
			$table->foreign('frequency_id','fk_fee_other_charge_details_collections_frequency_id')->references('id')->on('collections');
            $table->integer('is_periodic')->default(0);
            $table->integer('amount')->default(0);
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
        Schema::drop('fee_other_charge_details');
    }
}
