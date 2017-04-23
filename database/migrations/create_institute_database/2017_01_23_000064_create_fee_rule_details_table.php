<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeRuleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_rule_details', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('fee_rule_id')->unsigned();
			$table->foreign('fee_rule_id','fk_fee_rule_details_fee_rules_id')->references('id')->on('fee_rules');
			$table->bigInteger('fee_component_id')->unsigned();
			$table->foreign('fee_component_id','fk_fee_rule_details_fee_components_id')->references('id')->on('fee_components');
			$table->bigInteger('fee_rule_mode_id')->unsigned();
			$table->foreign('fee_rule_mode_id','fk_fee_rule_details_collections_fee_rule_mode_id')->references('id')->on('collections');
			$table->bigInteger('fee_rule_type_id')->unsigned();
			$table->foreign('fee_rule_type_id','fk_fee_rule_details_collections_fee_rule_type_id')->references('id')->on('collections');
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
		Schema::drop('fee_rule_details');
    }
}
