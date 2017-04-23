<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_info', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('student_id')->unsigned();
			$table->foreign('student_id','fk_medical_info_students_id')->references('id')->on('students');
			$table->text('medical_history');
			$table->string('allergy_info');
			$table->string('frequent_illness');
			$table->string('regular_doc_name',100)->nullable()->default(NULL);
			$table->string('regular_doc_address')->nullable()->default(NULL);
			$table->string('regular_doc_mobile',15)->default(0);
			$table->string('regular_doc_phone',15)->default(0);
			$table->string('regular_doc_email')->nullable()->default(NULL);
			$table->string('regular_hosp_name')->nullable()->default(NULL);
			$table->string('regular_hosp_phone',15)->default(0);
			$table->string('regular_hosp_email')->nullable()->default(NULL);
			$table->string('regular_hosp_address')->nullable()->default(NULL);
			$table->smallInteger('height')->default(0);
			$table->smallInteger('weight')->default(0);
			$table->bigInteger('bloodgroup_id')->nullable()->default(NULL)->unsigned();
			$table->foreign('bloodgroup_id','fk_medical_info_collections_bloodgroup_id')->references('id')->on('collections');
			$table->string('left_eyesight',5)->default(0);
			$table->string('right_eyesight',5)->default(0);
			$table->string('identification_mark1')->nullable()->default(NULL);
			$table->string('identification_mark2')->nullable()->default(NULL);
			$table->string('doctor_remark');
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
		Schema::drop('medical_info');
    }
}
