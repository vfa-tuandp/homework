<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeliveryOptionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_options',
            function (Blueprint $table) {
                $table->integer('id')->primary();
                $table->string('name')->nullable();
                $table->string('detail')->nullable();
            });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('delivery_options');
    }

}
