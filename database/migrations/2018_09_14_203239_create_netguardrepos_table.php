<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetguardreposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netguardrepos', function (Blueprint $table) {
                    $table->increments('id');
            $table->string('NetGuard');
            $table->string('businessName');
            $table->text('businessCategoryOne');
            $table->string('businessAddress');
            $table->text('BusinessInfo');

            $table->string('stateOfOperation');
            $table->string('cityOfOperation');

            $table->string('businessWebUrl');
            $table->string('businessPhoneNumber');
            $table->string('businessEmailUrl');

            $table->string('gubaHandle');

            $table->string('keywordOne');
            $table->string('keywordtwo');
            $table->string('keywordThree');
            $table->string('keywordFour');
            $table->string('keywordFive');
            $table->string('keywordSix');
            $table->string('keywordSeven');
            $table->string('keywordEight');

            $table->string('streetParking');
            $table->string('wifiService');
            $table->string('airConditioning');
            $table->string('cableTv');
            $table->string('sereneEnvironment');
            $table->string('POS');
            $table->string('suitableForEvents');

            $table->string('facebookUrl');
            $table->string('twitterUrl');
            $table->string('instagramUrl');

            $table->string('monOperationTime');
            $table->string('tueOperationTime');
            $table->string('wedOperationTime');
            $table->string('thursOperationTime');
            $table->string('friOperationTime');
            $table->string('satOperationTime');
            $table->string('sunOperationTime');
            


            $table->text('coverPhoto');
            $table->text('PhotoOne');
            $table->text('Phototwo');
            $table->text('PhotoThree');
            $table->text('PhotoFour');
            $table->text('PhotoFive');
            $table->text('PhotoSix');
            $table->text('PhotoSeven');
            $table->text('PhotoEight');
            $table->text('PhotoNine');

            $table->string('charge');
            $table->text('chargeToken');
            $table->string('packageOption');
            $table->string('packageGrade');

            $table->string('ratingFlag');

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
        Schema::dropIfExists('netguardrepos');
    }
}
