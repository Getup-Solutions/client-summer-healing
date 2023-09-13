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
        Schema::create('adminpages', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->longText('description')->nullable();
            $table->string('section1_heading')->nullable();
            $table->longText('section1')->nullable();
            $table->string('section2_heading')->nullable();
            $table->longText('section2')->nullable();
            $table->string('section3_heading')->nullable();
            $table->longText('section3')->nullable();
            $table->string('section4_heading')->nullable();
            $table->longText('section4')->nullable();
            $table->string('section5_heading')->nullable();
            $table->longText('section5')->nullable();
            $table->string('section6_heading')->nullable();
            $table->longText('section6')->nullable();
            $table->string('google_store_url')->nullable();
            $table->string('apple_store_url')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keyword')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->softDeletes();
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
        Schema::table('adminpages', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
