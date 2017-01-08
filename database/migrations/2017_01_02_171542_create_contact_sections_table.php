<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_sections', function (Blueprint $table) {
            $table->increments('id');

            $table->string('formated_address');
            $table->string('wrapped_address');
            $table->string('street_number');
            $table->string('route');
            $table->string('locality');
            $table->string('country');
            $table->string('postal_code');
            $table->float('lat');
            $table->float('long');

            $table->string('phone_number');
            $table->string('email');
            $table->string('facebook_label')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_label')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_label')->nullable();
            $table->string('instagram_url')->nullable();

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
        Schema::dropIfExists('contact_sections');
    }
}
