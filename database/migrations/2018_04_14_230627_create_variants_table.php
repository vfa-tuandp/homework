<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVariantsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variants',
            function (Blueprint $table) {
                $table->integer('id')->primary();
                $table->integer('pre_order_id')->index('fk_variants_pre_orders1_idx');
                $table->string('variant')->nullable();
                $table->string('sub_variant')->nullable();
                $table->float('price', 10, 0)->nullable();
                $table->float('pair_deal_price', 10, 0)->nullable();
                $table->integer('quantity')->nullable();
                $table->integer('in_stock')->nullable();
                $table->boolean('status')->nullable();
            });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('variants');
    }

}
