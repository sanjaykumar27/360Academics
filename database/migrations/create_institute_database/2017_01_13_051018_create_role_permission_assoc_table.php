<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePermissionAssocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permission_assoc', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('role_id')->unsigned();
			$table->foreign('role_id','fk_roles_permission_assoc_roles_id')->references('id')->on('roles');
			$table->bigInteger('permission_id')->unsigned();
			$table->foreign('permission_id','fk_roles_permission_assoc_permissions_id')->references('id')->on('permissions');
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
		Schema::drop('roles_permission_assoc');
    }
}
