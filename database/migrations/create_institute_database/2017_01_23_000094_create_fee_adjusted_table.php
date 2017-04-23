<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeAdjustedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_adjusted', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fee_collection_id')->unsigned();
			$table->foreign('fee_collection_id','fk_fee_adjusted_fee_collections_id')->references('id')->on('fee_collections');
            $table->string('total_original_fees');
            $table->string('total_adjusted_fees');
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
        Schema::drop('fee_adjusted');
    }
}
