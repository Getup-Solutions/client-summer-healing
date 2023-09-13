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
        Schema::create('adminpaymentsettings', function (Blueprint $table) {
            $table->id();
            $table->string('stripe_test_publishable_key')->nullable();
            $table->string('stripe_test_secret_key')->nullable();
            $table->string('stripe_live_publishable_key')->nullable();
            $table->string('stripe_live_secret_key')->nullable();
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('adminpaymentsettings')->insert(
            array(
                'stripe_test_publishable_key' => 'Enter test publishable key here.',
                'stripe_test_secret_key' => 'Enter test secret key here.',
                'stripe_live_publishable_key' => 'Enter live publishable key here.',
                'stripe_live_secret_key' => 'Enter live secret key here.',
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
        Schema::dropIfExists('adminpaymentsettings');
    }
};
