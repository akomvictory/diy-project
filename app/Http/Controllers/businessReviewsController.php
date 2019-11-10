<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\netguardrepo;
use App\User;
use App\Netguestreview;

class businessReviewsController extends Controller
{
   


public function addReview(Request $request){

  

        

  $request->validate([

             'business_ref' => 'nullable', 
      
        'reviewerName' => 'required|max:24',           
      


        'reviewerEmail' => 'nullable',  

        'reviewerComment' => 'required|max:190|min:10',
        
  
            ]);

        

          if($request->hasFile('reviewerPhoto')){

            $fileNameWithExtpostreviewerPhoto = $request->file('reviewerPhoto')->getClientOriginalName();

            $fileNamepostreviewerPhoto = pathinfo($fileNameWithExtpostreviewerPhoto, PATHINFO_FILENAME);

            $extensionpostreviewerPhoto = $request->file('reviewerPhoto')->getClientOriginalExtension();

            $fileNameToStorepostreviewerPhoto = $fileNamepostreviewerPhoto.'_'.time().''.Str::random(5).'.'.$extensionpostreviewerPhoto;

            $pathpostreviewerPhoto = $request->file('reviewerPhoto')->storeAs('public/upload/reviews/photos', $fileNameToStorepostreviewerPhoto); 

          }else{

              $fileNameToStorepostreviewerPhoto = 'public/upload/reviews/photos/noImage.jpg';

          }

          
            







              $post = new Netguestreview;

              $post->business_ref = $request->input('business_ref');
              $post->reviewerName = $request->input('reviewerName');
              $post->reviewerEmail = $request->input('reviewerEmail');
              $post->reviewerComment = $request->input('reviewerComment');
              
              
              $post->reviewerPhoto =  $fileNameToStorepostreviewerPhoto;
              
              $post->save();

              return back();
            


            


        }

}
