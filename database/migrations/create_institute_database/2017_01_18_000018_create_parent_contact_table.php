<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_contacts', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('parent_id')->unsigned();
			$table->foreign('parent_id','fk_parent_contacts_parents_id')->references('id')->on('parents');
			$table->bigInteger('relation_id')->unsigned()->comment('214 = father; 215= mother; 216= guradian');
			$table->foreign('relation_id','fk_parent_contacts_collections_relation_id')->references('id')->on('collections');
			$table->date('dob');
			$table->string('current_address1')->nullable()->default(NULL);
			$table->string('current_address2')->nullable()->default(NULL);
			$table->bigInteger('current_city_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('current_city_id','fk_parent_contacts_cities_current_city_id')->references('id')->on('cities');
			$table->string('current_zipcode',6)->default(0);
			$table->string('permanent_address1')->nullable()->default(NULL);
			$table->string('permanent_address2')->nullable()->default(NULL);
			$table->bigInteger('permanent_city_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('permanent_city_id','fk_parent_contacts_cities_permanent_city_id')->references('id')->on('cities');
			$table->string('permanent_zipcode',6)->default(0);
			$table->string('mobile1',15)->default(0);
			$table->string('mobile2',15)->default(0);
			$table->string('phone1',15)->default(0);
			$table->string('officephone',15)->default(0);
			$table->string('officeaddress');
			$table->string('fax1',15)->default(0);
			$table->string('fax2',15)->default(0);
			$table->string('email1')->nullable()->default(NULL);
			$table->string('email2')->nullable()->default(NULL);
			$table->text('profile_picture');
			$table->integer('id_information');
			$table->string('id_informationdetails');
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
		Schema::drop('parent_contacts');
    }
}
