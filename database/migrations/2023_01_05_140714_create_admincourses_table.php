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
        Schema::create('admincourses', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('subscription_id');
            $table->string('title');
            $table->string('slug', 255);
            $table->longText('description')->nullable();
            $table->longText('excerpt')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('course_category')->nullable();
            $table->string('subscription')->nullable();
            $table->string('level')->nullable();
            $table->string('scheduledate')->nullable();
            $table->string('scheduletime')->nullable();
            $table->string('coursetype')->nullable();
            $table->string('status')->nullable();
            $table->longText('embed_url')->nullable();
            $table->string('trainers')->nullable();
            $table->integer('price');
            //$table->foreign('subscription_id')->references('id')->on('adminsubscriptions')->onDelete('cascade');
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
        Schema::dropIfExists('admincourses');
    }
};
