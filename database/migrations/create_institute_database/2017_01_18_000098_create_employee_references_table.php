<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_references', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employee_id')->unsigned();
			$table->foreign('employee_id','fkemployee_references_employees_id')->references('id')->on('employees');
            $table->integer('email')->default(0);
            $table->string('address1')->nullable()->default(NULL);
            $table->string('address2')->nullable()->default(NULL);
            $table->bigInteger('city_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('city_id','fk_employee_references_cities_id')->references('id')->on('cities');
            $table->integer('mobile')->default(0);
            $table->integer('home_phone')->default(0);
            $table->integer('office_phone')->default(0);
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
        Schema::drop('employee_references');
    }
}
