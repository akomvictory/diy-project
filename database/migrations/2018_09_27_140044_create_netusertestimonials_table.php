<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetusertestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netusertestimonials', function (Blueprint $table) {
            $table->increments('id');
              $table->string('testimonialTitle');
            $table->string('testifierName');
            $table->text('testifierPhoto');
            $table->text('testifierSlugPhoto');
            $table->string('testifierOccupation');
            $table->string('testifierReview');
            $table->string('Approval');


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
        Schema::dropIfExists('netusertestimonials');
    }
}
