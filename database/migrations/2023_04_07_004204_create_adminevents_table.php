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
        Schema::create('adminevents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('venue');
            $table->date('startdate');
            $table->date('enddate');
            $table->time('starttime');
            $table->time('endtime');
            $table->string('buttonlink')->nullable();
            $table->string('buttontext')->nullable();
            $table->string('type')->nullable();
            $table->string('usertype')->nullable();
            $table->integer('userid')->nullable();
            $table->integer('useremail')->nullable();
            $table->integer('username')->nullable();
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
        Schema::dropIfExists('adminevents');
    }
};
