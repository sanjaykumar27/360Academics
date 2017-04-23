<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_salaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employee_id')->unsigned();
			$table->foreign('employee_id','fk_employee_salaries_employees_id')->references('id')->on('employees');
            $table->integer('grade')->default(0);
            $table->integer('basic_salary')->default(0);
            $table->integer('ta')->default(0);
            $table->integer('da')->default(0);
            $table->integer('hra')->default(0);
            $table->integer('deduction')->default(0);
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
        Schema::drop('employee_salaries');
    }
}
