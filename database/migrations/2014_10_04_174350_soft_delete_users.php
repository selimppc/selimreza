<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SoftDeleteUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/* Role */
        Schema::create('role', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 64)->nullable();
            $table->string('slug',64)->nullable();
            $table->enum('status',array('active','inactive','cancel'))->nullable();
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        /* User Department */
        Schema::create('department', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 64)->unique();
            $table->text('description', 128)->nullable();
            $table->string('slug',64)->nullable();
            $table->enum('status',array('active','inactive','cancel'))->nullable();
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        /*user*/
        schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 64)->nullable();
            $table->string('email', 64)->unique();
            $table->string('password', 64)->nullable();
            $table->string('auth_key', 128)->nullable();
            $table->string('access_token', 256)->nullable();
            $table->string('csrf_token', 64)->nullable();
            $table->string('ip_address', 32)->nullable();
            $table->unsignedInteger('branch_id')->nullable();
            $table->dateTime('last_visit')->nullable();
            $table->dateTime('expire_date')->nullable();
            $table->string('remember_token',64)->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('department_id')->nullable();
            $table->enum('status',array('active','inactive','cancel'))->nullable();
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        Schema::table('users', function($table) {
            //if 'role' and department table  exists
            if(Schema::hasTable('role') && Schema::hasTable('department'))
            {
                $table->foreign('role_id')->references('id')->on('role');
                $table->foreign('department_id')->references('id')->on('department');
            }
        });
        /*role_user*/
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('remember_token',64)->nullable();
            $table->enum('status',array('active','inactive','cancel'))->nullable();
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->unique(['role_id', 'user_id']);
        });
        Schema::table('role_user', function($table) {
            $table->foreign('role_id')->references('id')->on('role');
            #$table->foreign('user_id')->references('id')->on('users');
        });
        /*permissions*/
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 64)->nullable();
            $table->string('route_url',64)->nullable();
            $table->text('description')->nullable();
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        /*permission_role*/
        Schema::create('permission_role', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('permission_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->enum('status',array('active','inactive','cancel'))->nullable();
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        Schema::table('permission_role', function($table) {
            $table->foreign('permission_id')->references('id')->on('permissions');
            $table->foreign('role_id')->references('id')->on('role');
        });
        /*user_profile*/
        Schema::create('user_profile', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('first_name',64)->nullable();
            $table->string('last_name',64)->nullable();
            $table->text('address')->nullable();
            $table->string('telephone_number', 32)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('slug',64)->nullable();
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        Schema::table('user_profile', function($table) {
            #$table->foreign('user_id')->references('id')->on('users');
        });
        /*user_activity*/
        Schema::create('user_activity', function(Blueprint $table) {
            $table->increments('id');
            $table->string('action_name',64)->nullable();
            $table->string('action_url',64)->nullable();
            $table->text('action_details',64)->nullable();
            $table->string('action_table',64)->nullable();
            $table->dateTime('date',64)->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        Schema::table('user_activity', function($table) {
            #$table->foreign('user_id')->references('id')->on('users');
        });
        /*user_image*/
        Schema::create('user_image', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 32)->nullable();
            $table->text('description')->nullable();
            $table->string('image', 256)->nullable();
            $table->string('thumbnail', 256)->nullable();
            $table->enum('status',array('active','inactive','cancel'))->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        Schema::table('user_image', function($table) {
            #$table->foreign('user_id')->references('id')->on('users');
        });
      /*user_reset_password*/
        Schema::create('user_reset_password', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('reset_password_token', 32)->nullable();
            $table->string('reset_password_expire', 32)->nullable();
            $table->string('reset_password_time', 32)->nullable();
            $table->unsignedInteger('status')->nullable();
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        Schema::table('user_reset_password', function($table) {
            #$table->foreign('user_id')->references('id')->on('users');
        });
        /*user-login history*/
        Schema::create('user_login_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->dateTime('login_time',64)->nullable();
            $table->dateTime('logout_time',64)->nullable();
            $table->string('ip_address', 32)->nullable();
            $table->dateTime('date',64)->nullable();
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        Schema::table('user_login_history', function($table) {
            #$table->foreign('user_id')->references('id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role');
        Schema::drop('users');
        Schema::drop('department');
        Schema::drop('role_user');
        Schema::drop('permissions');
        Schema::drop('permission_role');
        Schema::drop('user_activity');
        Schema::drop('user_profile');
        Schema::drop('user_image');
        Schema::drop('user_reset_password');
        Schema::drop('user_login_history');
	}

}
