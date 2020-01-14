<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('name')->nullable();
            $table->string('user_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('amount')->nullable();
            $table->text('receipt_url')->nullable();
            $table->string('pay_type')->nullable();
            $table->string('card_type')->nullable();
            $table->string('last4')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('payments');
    }
}
