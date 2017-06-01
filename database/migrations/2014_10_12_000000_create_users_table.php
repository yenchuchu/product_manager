<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wholesale_id');
            $table->integer('bill_id');
            $table->integer('rank_id');
            $table->integer('post_id');
            $table->string('user_name');
            $table->string('full_name');
            $table->text('address');
            $table->string('email')->unique();
            $table->integer('phone')->unique();
            $table->string('password');
            $table->text('avatar');
            $table->text('description');
            $table->date('birthday');
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
        Schema::dropIfExists('users');
    }
}
