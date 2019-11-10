<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetbusinesscategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netbusinesscategories', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('slugTag');
            $table->text('categoryCoverPhoto');
            $table->text('categorySlugPhoto');
            $table->string('categoryTitle');
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
        Schema::dropIfExists('netbusinesscategories');
    }
}
