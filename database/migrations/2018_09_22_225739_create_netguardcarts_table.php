<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetguardcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netguardcarts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NetGuard');
            $table->string('businessName');
            $table->string('itemTitle');
            $table->string('itemPrice');
            $table->text('itemImage');
            $table->text('itemDescription');
        
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
        Schema::dropIfExists('netguardcarts');
    }
}
