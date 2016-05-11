<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsergroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usergroups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->integer('lft')->comment = "Nested set left.";
            $table->integer('rgt')->comment = "Nested set right.";
            $table->string('title',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usergroups');
    }
}
