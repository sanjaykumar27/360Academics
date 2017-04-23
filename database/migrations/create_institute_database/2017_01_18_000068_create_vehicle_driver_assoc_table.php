<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleDriverAssocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_driver_assoc', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('vehicle_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('vehicle_id','fk_vehicle_driver_assoc_vehicles_id')->references('id')->on('vehicles');
			$table->bigInteger('driver_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('driver_id','fk_vehicle_driver_assoc_drivers_id')->references('id')->on('drivers');
			//$table->bigInteger('routeid');
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
         Schema::drop('vehicle_driver_assoc');
    }
}
