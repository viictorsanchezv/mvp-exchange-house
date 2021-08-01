<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('statu_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('client_receiver_id');
            
            $table->id();
            $table->timestamps();

            $table->double('money_sent');
            $table->double('shipping_rate');
            $table->date('date_end');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('statu_id')->references('id')->on('status');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('client_receiver_id')->references('id')->on('clients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
