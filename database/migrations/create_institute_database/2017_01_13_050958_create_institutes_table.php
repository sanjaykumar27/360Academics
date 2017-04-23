<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('identity_code');
			$table->string('domain_name');
			$table->string('web_url');
			$table->string('logo')->nullable()->default(NULL);
			$table->string('email1');
			$table->string('email2');
			$table->string('contact_person_name');
			$table->string('contact_person_number');
			$table->string('contact_person_designation');
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
		Schema::drop('institutes');
    }
}
