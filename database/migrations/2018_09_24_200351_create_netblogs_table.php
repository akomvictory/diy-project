<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetblogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netblogs', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('publisherName');
            $table->string('postTitle');
            $table->text('postSectionOne');
            $table->text('postSectionTwo');
            $table->text('postSectionThree');
            $table->text('postSectionFour');
            $table->text('postSectionFive');

            $table->string('postSlug');
            $table->string('postAccessibilty');
            $table->string('postFlag');

            $table->text('postCoverPhoto');
            $table->text('publisherPhoto');
            $table->text('postPhotoOne');
            $table->text('postPhotoTwo');
            $table->text('postPhotoThree');
            $table->text('postPhotoFour');
            $table->text('postPhotoFive');
            

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
        Schema::dropIfExists('netblogs');
    }
}
