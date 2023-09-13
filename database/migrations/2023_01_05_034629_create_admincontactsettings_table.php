<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admincontactsettings', function (Blueprint $table) {
            $table->id();
            $table->string('contact_number')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->timestamps();
        });

        DB::table('admincontactsettings')->insert(
            array(
                'contact_number' => '',
                'contact_email' => '',
                'contact_address' => '',
                'facebook_url' => '',
                'twitter_url' => '',
                'instagram_url' => '',
                'linkedin_url' => '',
                'youtube_url' => '',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admincontactsettings');
    }
};
