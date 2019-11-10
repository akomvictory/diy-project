<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Netguestreview;
use Illuminate\Support\Str;

use App\Netbusinesscategory;
use App\netguardrepo;

use DB;

class stellarPagesController extends Controller
{
    public function schemaTwo(Request $request, $searchTerm = 'Eatery', $location = 'Abuja'){

    $searchTerm = $request->input('searchTerm');

     $location = $request->input('location');

     return redirect('/search/'.$searchTerm.'/in/'.$location);



    	


    }


     public function schemaOne(Request $request, $businessName = NULL){

    $findBuisness = netguardrepo::where('businessName', $businessName)->get();

     $userReviews = Netguestreview::where('business_ref', $businessName)->get();


  $findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

 $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();


    if(count($findBuisness)==1){




    }else{
      return redirect('/search/business/'.$businessName.'/alts');
    }




return view('stellar.business-detail', compact('findBuisness', 'findInLocation', 'searchKeyword', 'userReviews'));

    	


    }






           public function schemaThree(Request $request, $searchterm = 'Restaurant', $location = 'Abuja'){

          

           $datumOne = netguardrepo::where('cityOfOperation', $location)
                                     ->Where('keywordOne', $searchterm)                        
                                     ->orWhere('keywordtwo', $searchterm)
                                     ->orWhere('keywordThree', $searchterm)
                                     ->orWhere('keywordFour', $searchterm)
                                     ->orWhere('keywordFive', $searchterm)
                                     ->orWhere('keywordSix', $searchterm)
                                     ->orWhere('keywordSeven', $searchterm)
                                     ->orWhere('keywordEight', $searchterm)->get();



                                   

           /*orWhere([

                ['stateOfOperation', $location],
                ['cityOfOperation', $location],
                ['keywordOne', $searchterm], 
                ['keywordtwo', $searchterm],
                ['keywordThree', $searchterm],     
                ['keywordFour', $searchterm],
                ['keywordFive', $searchterm],
                ['keywordSix', $searchterm],
                ['keywordEight', $searchterm],
               // ['keywordNine', $searchterm], 
                //['keywordTen', $searchterm],   
                          ])->get();

           */



                           $datumTwo = netguardrepo::where('cityOfOperation', 'like', '%'.$location.'%')
                                     ->orWhere('stateOfOperation', 'like', '%'.$location.'%')
                                     ->orWhere('keywordOne', 'like', '%'.$searchterm.'%')
                                     ->orWhere('keywordtwo', 'like', '%'.$searchterm.'%')
                                     ->orWhere('keywordThree', 'like', '%'.$searchterm.'%')
                                     ->orWhere('keywordFour', 'like', '%'.$searchterm.'%')
                                     ->orWhere('keywordFive', 'like', '%'.$searchterm.'%')
                                     ->orWhere('keywordSix', 'like', '%'.$searchterm.'%')
                                     ->orWhere('keywordSeven', 'like', '%'.$searchterm.'%')
                                     ->orWhere('keywordEight', 'like', '%'.$searchterm.'%')






                                     ->get();

                  $datumThree = netguardrepo::where('ratingFlag', 'ON')->get();

                  $datumFour = netguardrepo::orderBy('charge', 'asc')->get();

                   $datumFive =netguardrepo::where('businessCategoryOne', $location)->get();

                   $datumSix = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();


                 //$datumFive = netguardrepo::orderBy('charge', 'asc')->get();


             
             return view('stellar.keywordAndLocation', compact('datumOne', 'datumTwo', 'datumThree', 'datumFour'));
        


    }


      public function schemaFour(Request $request, $gubaHandle = NULL){


         $gubaHandle = $request->input('gubaHandle');

    return redirect('/'.$gubaHandle);
      


    }



# ::::::::::::::::::::::::

    #guba handle search

          public function schemaFive(Request $request, $gubaHandle = NULL){

            

        $findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

 $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();


         $queryFive = netguardrepo::where('gubaHandle', $gubaHandle)->get();

         if(count($queryFive)==1){




    }else{
      return redirect('/search/gubahandle/'.$gubaHandle.'/alt');
    }



         return view('stellar.business-detail-guba-handle', compact('queryFive', 'findInLocation', 'searchKeyword'));
        
      


    }



   /*   

   This method is obsolete

       public function schemaSix(Request $request, $gubaHandle = NULL){

         $querySix = netguardrepo::where('gubaHandle', 'like', '%'.$gubaHandle.'%')->get();



         return view('stellar.listingv2', compact('querySix'));
        
      


    } 


    */




          public function schemaSeven(Request $request, $location = NULL){

         $querySeven = Netbusinesscategory::all();

          $location = $request->input('location');


        $findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

 $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();


         return view('stellar.cityquery', compact('querySeven', 'searchKeyword', 'findInLocation'));
        
      


    }




          public function schemaEight(Request $request, $category = 'Fast Food'){

        $datumOne = netguardrepo::where('businessCategoryOne', $category)->get();
        
        $datumTwo = netguardrepo::where('businessCategoryOne', 'like', '%'.$category.'%')->get();

       $datumThree = netguardrepo::where('ratingFlag', 'ON')->get();

         $datumFour =  netguardrepo::all();
        

            return view('stellar.categoryQuery', compact('datumOne','datumTwo','datumThree','datumFour'));
      


    }


/*

This method is obsolete

             public function schemaNine(Request $request, $location='Abuja'){

                $queryTwo = netguardrepo::

                           orWhere([
                ['stateOfOperation', 'like', '%'.$location.'%'],
                ['cityOfOperation', 'like', '%'.$location.'%'],

                  ])->get();


            
                       $queryEight = netguardrepo::where('ratingFlag', 'ON');

                  $queryNine = netguardrepo::orderBy('charge', 'asc');

                        


            return redirect('stellar.listingv5');
      


    }

*/


       public function schemaTen(Request $request, $location = 'Abuja', $searchTerm = 'Restaurant', $streetParking = NULL, $POS = NULL, $wifiService = NULL, $suitableForEvents = NULL, $airConditioning = NULL, $cableTv = NULL, $sereneEnvironment = NULL){


         $location = $request->input('location');
         $searchterm = $request->input('searchTerm');

        $POS = $request->input('POS');
        $wifiService = $request->input('wifiService');
        $suitableForEvents = $request->input('suitableForEvents');
        $airConditioning = $request->input('airConditioning');
        $cableTv = $request->input('cableTv');
        $sereneEnvironment = $request->input('sereneEnvironment');
        $streetParking = $request->input('streetParking');

        return redirect('/search/'.$searchterm.'/in/'.$location.'/rendering/POS='.$POS.'/wifiService='.$wifiService.'/suitableForEvents='.$suitableForEvents.'/airConditioning='.$airConditioning.'/cableTv='.$cableTv.'/sereneEnvironment='.$sereneEnvironment.'/streetParking='.$streetParking);
      


    }


























      public function schemaEleven(Request $request, $location = 'Abuja', $searchterm = 'Restaurant', $streetParking = NULL, $POS = NULL, $wifiService = NULL, $suitableForEvents = NULL, $airConditioning = NULL, $cableTv = NULL, $sereneEnvironment = NULL){


         $location = $request->input('location');
         $searchterm = $request->input('searchterm');

        $POS = 'ON';
        $wifiService = 'ON';
        $suitableForEvents = 'ON';
        $airConditioning = 'ON';
        $cableTv = 'ON';
        $sereneEnvironment ='ON';
        $streetParking = 'ON';

       $queryOne = netguardrepo::

                           orWhere([

               
                ['cityOfOperation', 'like', '%'.$location.'%'],
                ['keywordOne', 'like', '%'.$searchterm.'%'], 
                ['POS', $POS],
                ['wifiService', 'like', '%'.$wifiService.'%'],     
                ['suitableForEvents', 'like', '%'.$suitableForEvents.'%'],
                ['airConditioning', 'like', '%'.$airConditioning.'%'],
                ['cableTv', 'like', '%'.$cableTv],
                ['sereneEnvironment', 'like', '%'.$sereneEnvironment.'%'],
                ['streetParking', 'like', '%'.$streetParking.'%'], 
                
                          ])->get();


         $queryTwo = netguardrepo::where('ratingFlag', 'ON')->get();

        $queryThree = netguardrepo::all();
      
        return view('stellar.advanceSearchQuery',compact('queryOne', 'queryTwo', 'queryThree'));


        

    }







 public function schemaTwelve(Request $request, $businessName = NULL){

    $datumOne = netguardrepo::where('businessName', 'like', '%'.$businessName.'%')->get();
  
     $datumTwo = netguardrepo::where('ratingFlag', 'ON')->get();
    
    $datumThree = netguardrepo::all();
   


return view('stellar.business-alts', compact('datumOne', 'datumTwo', 'datumThree'));

      


    }


     public function schemaThirdten(Request $request, $gubaHandle = NULL){

    $datumOne = netguardrepo::where('gubaHandle', 'like', '%'.$gubaHandle.'%')->get();
  
     $datumTwo = netguardrepo::where('ratingFlag', 'ON')->get();
    
    $datumThree = netguardrepo::all();
   


return view('stellar.gubahandle-alts', compact('datumOne', 'datumTwo', 'datumThree'));

      


    }





}

