<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfileTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profile',
            function (Blueprint $table) {
                $table->foreign('user_id', 'fk_profile_users1')->references('id')->on('users')->onUpdate('NO ACTION')
                      ->onDelete('NO ACTION');
            });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile',
            function (Blueprint $table) {
                $table->dropForeign('fk_profile_users1');
            });
    }

}
