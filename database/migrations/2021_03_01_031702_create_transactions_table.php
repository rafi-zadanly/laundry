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
            $table->id();
            $table->integer('outlet_id');
            $table->string('invoice_code');
            $table->integer('member_id');
            $table->dateTime('datetime');
            $table->dateTime('time_limit');
            $table->dateTime('payment_date');
            $table->integer('surcharge');
            $table->integer('discount');
            $table->integer('tax');
            $table->string('status');
            $table->integer('is_paid');
            $table->integer('user_id');
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
        Schema::dropIfExists('transactions');
    }
}
