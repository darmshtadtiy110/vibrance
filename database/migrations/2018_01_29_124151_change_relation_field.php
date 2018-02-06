<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeRelationField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('users', function(Blueprint $table) {
            $table->integer('relation')->unsigned()->nullable();
            $table->foreign('relation')->references('id')->on('relations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_relation_foreign');
            $table->dropColumn('relation');
        });
    }
}
