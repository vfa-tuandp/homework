<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDeliveryOptionsPreOrdersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_option_pre_order',
            function (Blueprint $table) {
                $table->foreign('delivery_option_id', 'fk_delivery_options_has_pre_orders_delivery_options1')
                      ->references('id')->on('delivery_options')->onUpdate('NO ACTION')->onDelete('NO ACTION');
                $table->foreign('pre_order_id', 'fk_delivery_options_has_pre_orders_pre_orders1')->references('id')
                      ->on('pre_orders')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delivery_option_pre_order',
            function (Blueprint $table) {
                $table->dropForeign('fk_delivery_options_has_pre_orders_delivery_options1');
                $table->dropForeign('fk_delivery_options_has_pre_orders_pre_orders1');
            });
    }

}
