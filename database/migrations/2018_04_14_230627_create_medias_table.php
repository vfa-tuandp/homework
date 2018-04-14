<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias',
            function (Blueprint $table) {
                $table->integer('id')->primary();
                $table->string('name')->nullable();
                $table->boolean('type')->nullable();
                $table->string('mediable_type')->nullable();
                $table->integer('mediable_id')->nullable();
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
        Schema::drop('medias');
    }

}
