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
        Schema::create('adminsubscriptions', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('subscription_id')->constrained('admincourses');
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->longText('description')->nullable();
            $table->integer('price')->default(0);
            $table->string('interval');
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
        Schema::dropIfExists('adminsubscriptions');
    }
};
