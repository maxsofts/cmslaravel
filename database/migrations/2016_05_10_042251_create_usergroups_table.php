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
<<<<<<< HEAD
            $table->string('title',100);
            $table->timestamps();
        });
=======
            $table->string('title', 100);
        });

        DB::table('usergroups')->insert(
            [
                'parent_id' => 0,
                'title' => "Public"
            ]
        );
        DB::table('usergroups')->insert(
            [
                'parent_id' => 1,
                'title' => "Register"
            ]
        );
        DB::table('usergroups')->insert(
            [
                'parent_id' => 1,
                'title' => "Admin"
            ]
        );
>>>>>>> origin/ducsatthu
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
