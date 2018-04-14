<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVariantsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('variants',
            function (Blueprint $table) {
                $table->foreign('pre_orders_id', 'fk_variants_pre_orders1')->references('id')->on('pre_orders')
                      ->onUpdate('NO ACTION')->onDelete('NO ACTION');
            });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('variants',
            function (Blueprint $table) {
                $table->dropForeign('fk_variants_pre_orders1');
            });
    }

}
