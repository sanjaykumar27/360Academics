<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleFuelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_fuels', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('vehicle_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('vehicle_id','fk_vehicle_fuels_vehicles_id')->references('id')->on('vehicles');
			$table->dateTime('date_filled');
			$table->integer('liters');
			$table->decimal('amount', 4, 2);
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
        Schema::drop('vehicle_fuels');
    }
}
