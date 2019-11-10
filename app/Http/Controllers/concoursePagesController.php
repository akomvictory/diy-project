<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\netguardrepo;

use App\NetGuardLike;

use App\User;

class concoursePagesController extends Controller
{
          
        public function verifyAccount(){

             return view('email.verifyEmailFirst');
        }


    public function indexPage(){

    	$findFlagRatedBusiness = netguardrepo::where('ratingFlag', 'ON')->get();

    	//$businessInCRS = netguardrepo::where('stateOfOperation', 'lagos')->get();

        $findInLocation = netguardrepo::select('cityOfOperation')->distinct()->get();

    	$searchKeyword = netguardrepo::whereNotNull('keywordOne')
                                     ->orWhereNotNull('keywordtwo')
                                     ->orWhereNotNull('keywordThree')
                                     ->orWhereNotNull('keywordFour')
                                     ->orWhereNotNull('keywordFive')
                                     ->orWhereNotNull('keywordSix')
                                     ->orWhereNotNull('keywordSeven')
                                     ->orWhereNotNull('keywordEight')->distinct()->get();                       
                                     



    	return view('concourse.index', compact('findFlagRatedBusiness', 'findInLocation', 'searchKeyword'));
    }



      public function comingsoon(){

            $findFlagRatedBusiness = netguardrepo::where('ratingFlag', 'ON')->get();

        $findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

        $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();


        return view('concourse.comingsoon', compact('findFlagRatedBusiness', 'findInLocation', 'searchKeyword'));
    }




    public function servicesPage(){

        $findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

        $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();


    	return view('concourse.services', compact('findFlagRatedBusiness', 'findInLocation', 'searchKeyword'));

    }

      public function about(){

         $findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

        $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();


            return view('concourse.about', compact('findInLocation', 'searchKeyword'));


    }






 

}
