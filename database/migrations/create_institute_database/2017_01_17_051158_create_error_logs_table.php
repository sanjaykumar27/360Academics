<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('error_logs', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('request_url');
			$table->string('error_code',100);
			$table->text('error_message');
			$table->string('error_resolution');
			$table->string('additional_info');
			$table->string('user_info');
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
		Schema::drop('error_logs');
    }
}
