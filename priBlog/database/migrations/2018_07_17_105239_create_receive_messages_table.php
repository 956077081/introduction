<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiveMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_message', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name','50')->default('')->comment('姓名');
            $table->string("email",'50')->default('')->comment('Email');
            $table->string('phone','30')->default('')->comment('电话');
            $table->text('message',"250")->comment("消息");
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
        Schema::dropIfExists('receive_message');
    }
}
