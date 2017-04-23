<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('itle',20);
           //$table->tinyInteger('type');
            //$table->tinyInteger('fueltype');
            $table->string('model_number',30);
            $table->string('make_year',4);
            $table->string('plate_number',15);
            $table->string('chasis_number',20);
            $table->string('engine_number',20);
            $table->string('registration_number',20);
            $table->date('rc_valid_from');
            $table->date('rc_valid_to');
            $table->date('road_tax_paid_upto');
            $table->string('insurance_policy_number',20);
            $table->date('insurance_valid_from');
            $table->date('insurance_valid_to');
            $table->date('pcr_valid_upto');
            $table->tinyInteger('seat_capacity');
            $table->string('image',100);
            $table->string('created_by',60);
			$table->string('updated_by',60);
			$table->timestamps();
			$table->dateTime('last_login_date_time')->nullable();
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
        Schema::drop('vehicles');
    }
}
