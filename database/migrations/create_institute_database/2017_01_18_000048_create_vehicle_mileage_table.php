<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleMileageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_mileages', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('vehicle_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('vehicle_id','fk_vehicle_mileages_vehicles_id')->references('id')->on('vehicles');
			$table->dateTime('travel_date');
			$table->integer('start_meter');
			$table->integer('end_meter');
			$table->string('Remarks');
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
		Schema::drop('vehicle_mileages');
    }
}
