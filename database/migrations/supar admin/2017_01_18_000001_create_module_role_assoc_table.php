<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleRoleAssocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_role_assoc', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('module_id')->unsigned();
			$table->foreign('module_id','fk_module_role_assoc_modules_id')->references('id')->on('modules');
			$table->bigInteger('role_id')->unsigned();
			$table->foreign('role_id','fk_module_role_assoc_roles_id')->references('id')->on('roles');
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
		Schema::drop('module_role_assoc');
    }
}
