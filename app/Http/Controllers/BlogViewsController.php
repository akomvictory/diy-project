<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Netblog;
use App\netguardrepo;
use App\NetBlogReview;



class BlogViewsController extends Controller
{
    

		 public function schemaOne(){

		 	$findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

 $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();




  $datumOne = Netblog::where([

    ['postAccessibilty', 'Homestead']

 
      
      ])->get();



# :::::::::::::::::

  $datumTwo = Netblog::select('postSlug')->distinct()->get();
  $datumThree = Netblog::where('postFlag', 'Featured')->get();

  #:::::::::::::::::::

  			

  				$datumThree = Netblog::where('postFlag', 'Featured')->get();

		 		return view('blogmanagement.bloghomestead', compact('datumOne','datumTwo', 'datumThree', 'findInLocation', 'searchKeyword'));

		 }













		 	 public function schemaTwo(Request $request, $slug = NULL){

		 	 	$findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

 $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();



# :::::::::::::::::
  $datumOne = Netblog::where('postSlug', $slug)->distinct()->get();

  $datumTwo = Netblog::select('postSlug')->distinct()->get();
  $datumThree = Netblog::where('postFlag', 'Featured')->get();

  #:::::::::::::::::::

		 		return view('blogmanagement.blogcategory',  compact('datumOne','datumTwo', 'datumThree', 'findInLocation', 'searchKeyword'));

		 }
















		  	 public function schemaThree($id){

		  	 	$findInLocation = netguardrepo::select('cityOfOperation', 'stateOfOperation')->distinct()->get();

 $searchKeyword = netguardrepo::select('keywordOne', 'keywordtwo', 'keywordThree', 'keywordFour', 'keywordFive'
    , 'keywordSix', 'keywordSeven', 'keywordEight')->distinct()->get();




  $post = Netblog::findOrFail($id);

   $userReviews = NetBlogReview::where('blog_id', $post->id)->get();

		 		return view('blogmanagement.blogdetail', compact('post', 'userReviews'));

		 }

  


}
