<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetguestreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netguestreviews', function (Blueprint $table) {
            $table->increments('id');

            
            $table->string('business_ref');
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
        Schema::dropIfExists('netguestreviews');
    }
}
