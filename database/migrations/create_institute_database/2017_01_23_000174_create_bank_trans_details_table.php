<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTransDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_trans_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icid',20);
            $table->string('scholar_no',20);
            $table->string('mobile',12);
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('branch',25);
            $table->string('class',15);
            $table->string('section',2);
            $table->date('payment_due_date');
            $table->string('installment_number',5);
            $table->integer('serial_no');
            $table->string('tuition_fee',20);
            $table->integer('conveyance');
            $table->string('fine',20);
            $table->string('tranid',20);
            $table->string('merchant_opted_mode');
            $table->date('tran_date');
            $table->string('tran_amount',25);
            $table->string('processing_fee',25);
            $table->string('servicetax',25);
            $table->string('payer_opted_mode')->comment('CASH => 305 ; CHQ => 304;  NETBANKING => 314');
            $table->text('recon_date');
            $table->string('settlement_date');
            $table->string('ref_no',20);
            $table->string('dyanamicurl');
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
        Schema::drop('bank_trans_details');
    }
}
