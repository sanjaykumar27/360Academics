<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeChequesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_cheques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fee_collection_id')->unsigned();
			$table->foreign('fee_collection_id','fk_fee_cheques_fee_collections_id')->references('id')->on('fee_collections');
            $table->string('cheque_number',6);
            $table->string('bank_name',100);
            $table->date('cheque_deposit_date')->nullable()->default(NULL);
            $table->date('cheque_clearance_date')->nullable()->default(NULL);
            $table->string('remark');
            $table->tinyInteger('cheque_status')->comment('1=>In process; 2=> ChequeBounced');
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
        Schema::drop('fee_cheques');
    }
}
