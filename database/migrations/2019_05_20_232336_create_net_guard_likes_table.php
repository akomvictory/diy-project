<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetGuardLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('net_guard_likes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NetGuard');
            $table->string('businessName');
            $table->string('likerUsername');
            $table->boolean('like');

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
        Schema::dropIfExists('net_guard_likes');
    }
}
