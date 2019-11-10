<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Netcoursepane;
use App\Netcoursepanel;
use App\Netblog;
use App\netguardrepo;
use App\Netcoursereiview;


class coursesViewController extends Controller
{
   
		 public function schemaOne(){



		 	$findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

 $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();



$datumOne = Netcoursepanel::all();


  $datumTwo = Netblog::select('postSlug')->distinct()->get();



  			
  				$datumThree = Netblog::where('postFlag', 'Featured')->get();

		 		return view('coursepanel.coursespanelhomestead', compact('datumOne','datumTwo', 'datumThree', 'findInLocation', 'searchKeyword'));

		 }


















		 	 public function schemaTwo(Request $request, $slug = NULL){

		 	 	$findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

 $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();




  $datumOne = Netcoursepane::where('courseSlug', $slug)->get();

# :::::::::::::::::

  $datumTwo = Netblog::select('postSlug')->distinct()->get();
  $datumThree = Netblog::where('postFlag', 'Featured')->get();

  #:::::::::::::::::::

  	

		 		return view('coursespane.coursecategory',  compact('datumOne','datumTwo', 'datumThree', 'findInLocation', 'searchKeyword'));

		 }


















		  	 public function schemaThree($id){

		  	 	$findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

 $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();




  $post = Netcoursepane::findOrFail($id);

   $userReviews = netcoursereiview::where('course_id', $post->id)->get();


		 		

		 		return view('coursespane.coursedetail', compact('post', 'userReviews'));
		 }
}
