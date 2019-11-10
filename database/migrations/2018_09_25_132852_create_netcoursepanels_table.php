<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetcoursepanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netcoursepanels', function (Blueprint $table) {
            $table->increments('id');




            $table->string('publisherName');
            $table->string('courseTitle');
            $table->text('courseSectionOne');
         

            $table->string('courseSlug');
            $table->string('courseAccessibilty');
            $table->string('courseFlag');

            $table->mediumText('courseCoverPhoto');
            $table->mediumText('publisherPhoto');
         

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
        Schema::dropIfExists('netcoursepanels');
    }
}
