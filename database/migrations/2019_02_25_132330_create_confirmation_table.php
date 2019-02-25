<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfirmationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender_bank');
            $table->string('bank_account_name');
            $table->string('receiver_bank');
            $table->integer('amount');
            $table->date('payment_date');
            $table->integer('status');
            $table->integer('order_id')->unsigned();
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confirmation');
    }
}
