<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Netcoursereiview;


class NetCourseReviewsController extends Controller
{
   


   

public function addReview(Request $request){


        

  $request->validate([

             'course_id' => 'nullable', 
      
        'reviewerName' => 'required|max:24|min:3',           
      


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

          
            







              $post = new Netcoursereiview;

              $post->course_id = $request->input('course_id');
              $post->reviewerName = $request->input('reviewerName');
              $post->reviewerEmail = $request->input('reviewerEmail');
              $post->reviewerComment = $request->input('reviewerComment');
              
              
              $post->reviewerPhoto = 'hhf';//  $fileNameToStorepostreviewerPhoto;
              
              $post->save();

              return back();
            


            


        }

}
