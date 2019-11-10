<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetcoursepanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netcoursepanes', function (Blueprint $table) {
            $table->increments('id');


            $table->string('publisherName');
            $table->string('courseTitle');
            $table->text('courseSectionOne');
            $table->text('courseSectionTwo');
            $table->text('courseSectionThree');
            $table->text('courseSectionFour');
            $table->text('courseSectionFive');

            $table->string('courseSlug');
            $table->string('courseAccessibilty');
            $table->string('courseFlag');

            $table->mediumText('courseCoverPhoto');
            $table->mediumText('publisherPhoto');
            $table->mediumText('coursePhotoOne');
            $table->mediumText('coursePhotoTwo');
            $table->mediumText('coursePhotoThree');
            $table->mediumText('coursePhotoFour');
            $table->mediumText('coursePhotoFive');


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
        Schema::dropIfExists('netcoursepanes');
    }
}
