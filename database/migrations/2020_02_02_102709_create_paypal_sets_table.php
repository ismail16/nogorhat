<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaypalSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paypal_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('ClientId');
            $table->string('currency');
            $table->string('Secret');
            $table->text('Description');
            $table->tinyInteger('Status')->default(0);
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
        Schema::dropIfExists('paypal_sets');
    }
}
