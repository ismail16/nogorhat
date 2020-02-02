<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwoCheckoutSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('two_checkout_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('SellerId');
            $table->string('PublishableKey');
            $table->string('PrivateKey');
            $table->text('description');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('SandboxStatus')->default(0);
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
        Schema::dropIfExists('two_checkout_sets');
    }
}
