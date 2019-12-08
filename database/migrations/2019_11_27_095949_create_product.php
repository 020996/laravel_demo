<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->string('product_slug');
            $table->integer('product_price');
            $table->string('product_image');
            $table->string('product_baohanh');
            $table->string('product_phukien');
            $table->string('product_tinhtrang');
            $table->string('product_khuyenmai');
            $table->tinyInteger('product_trangthai');
            $table->text('product_mieuta');
            $table->tinyInteger('product_spdb');
            $table->integer('product_cate')->unsigned();
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
        Schema::dropIfExists('product');
    }
}
