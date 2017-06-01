<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWholesalePricesHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wholesale_prices_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wholesale_price_id');
            $table->double('price_old')->comment('giá tiền sản phẩm trước đó');
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
        Schema::dropIfExists('wholesale_prices_histories');
    }
}
