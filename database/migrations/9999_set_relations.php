<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('user_types')->onUpdate('cascade');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries')->onUpdate('cascade');
        });
        Schema::table('carts', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade');
        });
        Schema::table('offer_products', function (Blueprint $table) {
            $table->foreign('offer_id')->references('id')->on('offers')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade');
        });
        Schema::table('rules', function (Blueprint $table) {
            $table->foreign('offer_id')->references('id')->on('offers')->onUpdate('cascade');
        });
        Schema::table('rule_products', function (Blueprint $table) {
            $table->foreign('rule_id')->references('id')->on('rules')->onUpdate('cascade');
            //$table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
