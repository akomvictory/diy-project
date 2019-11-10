<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\NetBlogReview;

class NetBlogReviewController extends Controller
{
    




public function addReview(Request $request){


        

  $request->validate([

             'blog_id' => 'nullable', 
      
        'reviewerName' => 'required|max:24',           
      


        'reviewerEmail' => 'email|nullable',  

        'reviewerComment' => 'required|min:10|max:190', 
        
  
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

          
            







              $post = new NetBlogReview;

              $post->blog_id = $request->input('blog_id');
              $post->reviewerName = $request->input('reviewerName');
              $post->reviewerEmail = $request->input('reviewerEmail');
              $post->reviewerComment = $request->input('reviewerComment');
              
              
              $post->reviewerPhoto =  $fileNameToStorepostreviewerPhoto;
              
              $post->save();

              return back();
            


            


        }

}
