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
        Schema::create('admintrainers', function (Blueprint $table) {
            $table->id();
            $table->string('trainer_name', 255);
            $table->string('slug', 255)->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longText('bio')->nullable();
            $table->longText('image')->nullable();
            $table->longText('status')->nullable();
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
        Schema::dropIfExists('admintrainers');
    }
};
