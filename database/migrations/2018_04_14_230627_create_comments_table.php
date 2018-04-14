<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments',
            function (Blueprint $table) {
                $table->integer('id')->primary();
                $table->integer('parent_id')->nullable();
                $table->text('body', 65535)->nullable();
                $table->string('commentable_type')->nullable();
                $table->integer('commentable_id')->nullable();
                $table->timestamps();
                $table->integer('user_id')->index('fk_comments_users_idx');
            });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }

}
