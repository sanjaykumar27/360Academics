<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('fname',50)->nullable()->default(NULL);
			$table->string('mname',50)->nullable()->default(NULL);
			$table->string('lname',50)->nullable()->default(NULL);
			$table->bigInteger('gender_id')->unsigned();
			$table->foreign('gender_id','fk_parents_collections_gender_id')->references('id')->on('collections');
			$table->bigInteger('religion_id')->unsigned();
			$table->foreign('religion_id','fk_parents_collections_religion_id')->references('id')->on('collections');
			$table->bigInteger('category_id')->unsigned();
			$table->foreign('category_id','fk_parents_collections_category_id')->references('id')->on('collections');
			$table->bigInteger('qualification_id')->unsigned();
			$table->foreign('qualification_id','fk_parents_collections_qualification_id')->references('id')->on('collections');
			$table->bigInteger('occupation_id')->unsigned();
			$table->foreign('occupation_id','fk_parents_collections_occupation_id')->references('id')->on('collections');
			$table->string('occupation_department');
			$table->string('occupation_description');
			$table->integer('income')->default(0);
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
 		Schema::drop('parents');
    }
}
