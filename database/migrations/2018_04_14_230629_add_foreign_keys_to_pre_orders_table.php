<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPreOrdersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pre_orders',
            function (Blueprint $table) {
                $table->foreign('category_id', 'fk_pre_orders_categories1')->references('id')->on('categories')
                      ->onUpdate('NO ACTION')->onDelete('NO ACTION');
                $table->foreign('purchase_from_id', 'fk_pre_orders_countries1')->references('id')->on('countries')
                      ->onUpdate('NO ACTION')->onDelete('NO ACTION');
                $table->foreign('deal_in_id', 'fk_pre_orders_countries2')->references('id')->on('countries')
                      ->onUpdate('NO ACTION')->onDelete('NO ACTION');
                $table->foreign('user_id', 'fk_pre_orders_users1')->references('id')->on('users')->onUpdate('NO ACTION')
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
        Schema::table('pre_orders',
            function (Blueprint $table) {
                $table->dropForeign('fk_pre_orders_categories1');
                $table->dropForeign('fk_pre_orders_countries1');
                $table->dropForeign('fk_pre_orders_countries2');
                $table->dropForeign('fk_pre_orders_users1');
            });
    }

}
