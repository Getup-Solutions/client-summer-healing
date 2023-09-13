<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersubscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('userid')->nullable();
            $table->string('title')->nullable();
            $table->integer('price')->nullable();
            $table->string('interval')->nullable();
            $table->string('start_date')->nullable();
            $table->string('next_date')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('card_type')->nullable();
            $table->string('card')->nullable();
            $table->string('currency')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('usersubscriptions');
    }
};
