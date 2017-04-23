<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_branches', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('institute_id')->unsigned();
			$table->foreign('institute_id','fk_institute_branches_institutes_id')->references('id')->on('institutes');
			$table->string('abbrevation',45);
			$table->string('name');
			$table->string('address1');
			$table->string('address2')->nullable()->default(NULL);
			$table->string('zipcode',6);
			$table->bigInteger('city_id')->unsigned();
			$table->foreign('city_id','fk_institute_branches_cities_id')->references('id')->on('cities');
			$table->string('phone1',15);
			$table->string('phone2',15)->nullable()->default(NULL);
			$table->string('contact_person_name',50)->nullable()->default(NULL);
			$table->string('contact_person_phone',15)->nullable()->default(NULL);
			$table->string('contact_person_designation',50)->nullable()->default(NULL);
			$table->integer('fax1');
			$table->string('fax2',15)->nullable()->default(NULL);
			$table->string('email1');
			$table->string('email2')->nullable()->default(NULL);
			$table->string('weburl');
			$table->string('description')->nullable()->default(NULL);
			$table->string('accredition_id',50);
			$table->tinyInteger('is_main_branch')->default(0);
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
		Schema::drop('institute_branches');
    }
}
