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
        Schema::create('admincourse_adminsubscription', function (Blueprint $table) {
 
            // $table->integer('admincourse_id')->unsigned();

            // $table->integer('adminsubscription_id')->unsigned();

            // $table->foreign('admincourse_id')->references('id')->on('admincourses')->onDelete('cascade');

            // $table->foreign('adminsubscription_id')->references('id')->on('adminsubscriptions')->onDelete('cascade');


            $table->foreignId('admincourse_id')->constrained()->onDelete('cascade');
            $table->foreignId('adminsubscription_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admincourse_adminsubscription');
    }
};
