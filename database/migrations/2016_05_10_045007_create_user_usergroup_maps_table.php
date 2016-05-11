<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUsergroupMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_usergroup_maps', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index()->comment = "Foreign Key to Users";
            $table->integer('group_id')->unsigned()->index()->comment = "Foreign Key to User Group";
        });

        Schema::table('user_usergroup_maps',function($table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('group_id')->references('id')->on('usergroups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_usergroup_maps');
    }
}
