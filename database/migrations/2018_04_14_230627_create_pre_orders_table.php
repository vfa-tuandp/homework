<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreOrdersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_orders',
            function (Blueprint $table) {
                $table->integer('id')->primary();
                $table->string('title')->nullable();
                $table->string('brand')->nullable();
                $table->float('price', 10, 0)->nullable();
                $table->integer('purchase_from')->index('fk_pre_orders_countries1_idx');
                $table->integer('deal_in')->index('fk_pre_orders_countries2_idx');
                $table->integer('category_id')->index('fk_pre_orders_categories1_idx');
                $table->integer('user_id')->index('fk_pre_orders_users1_idx');
                $table->dateTime('close_at')->nullable();
                $table->dateTime('dispatch_date')->nullable();
                $table->text('description', 65535)->nullable();
                $table->string('slug', 500)->nullable();
                $table->string('main_image')->nullable();
                $table->integer('shows')->nullable();
                $table->boolean('is_pair_deal')->nullable();
                $table->boolean('status')->nullable();
                $table->string('meta_title')->nullable();
                $table->string('meta_description', 500)->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pre_orders');
    }

}
