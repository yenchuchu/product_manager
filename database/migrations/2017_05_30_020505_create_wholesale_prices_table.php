<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWholesalePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wholesale_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->double('prices')->comment('giá tiền sản phẩm');
            $table->double('order')->comment('Thứ tự số lần thay đổi giá');
            $table->text('description');
            $table->date('date_change');
            $table->rememberToken();
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
        Schema::dropIfExists('wholesale_prices');
    }
}
