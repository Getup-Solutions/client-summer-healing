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
        Schema::create('bookedevents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('price');
            $table->foreignId('user_id')->constrained('users');
            $table->string('venue')->nullable();
            $table->date('startdate')->nullable();
            $table->date('enddate')->nullable();
            $table->string('starttime')->nullable();
            $table->string('endtime')->nullable();
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
        Schema::dropIfExists('bookedevents');
    }
};
