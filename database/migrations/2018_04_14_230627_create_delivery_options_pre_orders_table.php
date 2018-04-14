<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeliveryOptionsPreOrdersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_options_pre_orders',
            function (Blueprint $table) {
                $table->integer('id')->primary();
                $table->integer('delivery_options_id')
                      ->index('fk_delivery_options_has_pre_orders_delivery_options1_idx');
                $table->integer('pre_orders_id')->index('fk_delivery_options_has_pre_orders_pre_orders1_idx');
                $table->float('cost', 10, 0)->nullable();
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
        Schema::drop('delivery_options_pre_orders');
    }

}
