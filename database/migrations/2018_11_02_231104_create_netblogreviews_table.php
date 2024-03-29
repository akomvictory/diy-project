<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetblogreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netblogreviews', function (Blueprint $table) {
            $table->increments('id');

                $table->string('blog_id');
            $table->string('reviewerName');
            $table->string('reviewerEmail');
            $table->string('reviewerComment');
         
            $table->text('reviewerPhoto');

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
        Schema::dropIfExists('netblogreviews');
    }
}
