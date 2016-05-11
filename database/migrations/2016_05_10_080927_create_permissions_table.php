<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->integer('lft')->comment = "Nested set left.";
            $table->integer('rgt')->comment = "Nested set right.";
            $table->integer('level')->comment = "the cached level in nested tree.";
            $table->string('name',50)->unique()->comment = "Name module unique.";
            $table->string('title')->comment = "Title for permission.";
            $table->text('rules')->comment = "Json encode access control.";
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
        Schema::drop('permissions');
    }
}
