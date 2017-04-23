<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname',20);
            $table->string('mname',20);
            $table->string('lname',20);
            $table->string('father_name',50);
            $table->date('dob');
            $table->bigInteger('qualification_id')->unsigned();
			$table->foreign('qualification_id','fk_drivers_collections_qualification_id')->references('id')->on('collections');
            $table->string('address',50);
            $table->bigInteger('city_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('city_id','fk_drivers_cities_id')->references('id')->on('cities');
            $table->string('mobile',20);
            $table->string('license_number',20);
            $table->date('license_valid_from');
            $table->date('license_valid_to');
            $table->string('image');
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
        Schema::drop('drivers');
    }
}
