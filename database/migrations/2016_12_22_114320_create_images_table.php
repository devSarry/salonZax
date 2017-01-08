<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
        /*
     *  image               : Saved image name
        upload_dir          : Image upload path
        original_image_name : Real name of uploaded image
        size                : Size of the uploaded image
        extension           : Extension of the uploaded image
        mime_type           : Mime type of the uploaded image
    */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');

            $table->string('image');
            $table->string('upload_dir');
            $table->string('original_image_name');
            $table->integer('size');
            $table->string('extension');
            $table->string('mime_type');
            
            $table->integer('imageable_id');
            $table->string('imageable_type');
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
        Schema::dropIfExists('images');
    }
}
