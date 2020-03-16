<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStripeSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stripe_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('SecretKey');
            $table->string('PublishableKey');
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
        Schema::dropIfExists('stripe_sets');
    }
}
