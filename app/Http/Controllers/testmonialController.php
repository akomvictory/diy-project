<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Netusertestimonial;
use Illuminate\Support\Str;


class testmonialController extends Controller
{
   #::::::::::::::::::::TESTIMONIALS PAGE
 public function testimonialForm(){


      return view('testimonial.testimonialpublish');

   }


   public function userReviews(){


      return view('testimonial.testifiersreview');

   }


         public function refurbishTestimonialForm($id){

    $update = Netusertestimonial::find($id);

      return view('testimonial.coursepanelrefurbish', compact('update'));


}





		  public function takeAll(){

              $allPost = Netusertestimonial::orderBy('created_at', 'desc')->get();

          return view('testimonial.testimoniallist', compact('allPost'));

        }






            public function publishTestimonial(Request $request){

          $request->validate([

           'testimonialTitle' => 'required|max:67', 
      
        'testifierName' => 'required|max:34', 
        'testifierPhoto' => 'nullable|image',   
         'testifierSlugPhoto' => 'nullable|image',
         'testifierOccupation' => 'nullable|87',        
        'testifierReview' => 'required|max:300',

        'Approval' => 'nullable',      

       
  
  
            ]);

        

          if($request->hasFile('testifierPhoto')){

            $fileNameWithExttestifierPhoto = $request->file('testifierPhoto')->getClientOriginalName();

            $fileNametestifierPhoto = pathinfo($fileNameWithExttestifierPhoto, PATHINFO_FILENAME);

            $extensiontestifierPhoto = $request->file('testifierPhoto')->getClientOriginalExtension();

            $fileNameToStoretestifierPhoto= $fileNametestifierPhoto.'_'.time().''.Str::random(5).'.'.$extensiontestifierPhoto;

            $pathtestifierPhoto = $request->file('testifierPhoto')->storeAs('public/upload/testimonial/photos', $fileNameToStoretestifierPhoto); 

          }else{

              $fileNameToStoretestifierPhoto = 'public/upload/testimonial/photos/noImage.jpg';

          }

          
                      if($request->hasFile('testifierSlugPhoto')){

            $fileNameWithExttestifierSlugPhoto = $request->file('testifierSlugPhoto')->getClientOriginalName();

            $fileNametestifierSlugPhoto = pathinfo($fileNameWithExttestifierSlugPhoto, PATHINFO_FILENAME);

            $extensiontestifierSlugPhoto = $request->file('testifierSlugPhoto')->getClientOriginalExtension();

            $fileNameToStoretestifierSlugPhoto = $fileNametestifierSlugPhoto.'_'.time().''.Str::random(5).'.'.$extensiontestifierSlugPhoto;

            $pathtestifierSlugPhoto = $request->file('testifierSlugPhoto')->storeAs('public/upload/testimonial/photos', $fileNameToStoretestifierSlugPhoto); 

          }else{

              $fileNameToStoretestifierSlugPhoto = 'public/upload/testimonial/photos/noImage.jpg';

          }




            

              $post = new Netusertestimonial;

              $post->testimonialTitle = 'hh';
              //$request->input('testimonialTitle');
              $post->testifierName = 'hh';
              //$request->input('testifierName');
              
              $post->testifierPhoto = 'hh';
            //  $fileNameToStoretestifierPhoto;
              $post->testifierSlugPhoto = 'hh';

               //$fileNameToStoretestifierSlugPhoto;

              $post->testifierOccupation = 'hh';

               //$request->input('testifierOccupation');
              $post->testifierReview = 'hh';
             // $request->input('testifierReview');


              $post->Approval = 'NO';
              
              
              

              $post->save();

              return redirect('/resources/testimonial/reviews');
            


            


        }

/*

            public function refurbishTestimonial(Request $request, $id){

          $request->validate([

           'testimonialTitle' => 'required|max:67', 
      
        'testifierName' => 'required|max:34', 
        'testifierPhoto' => 'nullable|image',   
         'testifierSlugPhoto' => 'nullable|image',
         'testifierOccupation' => 'nullable|87',        
        'testifierReview' => 'required|max:300',

        'Approval' => 'nullable',      

       
  
  
            ]);

        

          if($request->hasFile('testifierPhoto')){

            $fileNameWithExttestifierPhoto = $request->file('testifierPhoto')->getClientOriginalName();

            $fileNametestifierPhoto = pathinfo($fileNameWithExttestifierPhoto, PATHINFO_FILENAME);

            $extensiontestifierPhoto = $request->file('testifierPhoto')->getClientOriginalExtension();

            $fileNameToStoretestifierPhoto= $fileNametestifierPhoto.'_'.time().''.Str::random(5).'.'.$extensiontestifierPhoto;

            $pathtestifierPhoto = $request->file('testifierPhoto')->storeAs('public/upload/testimonial/photos', $fileNameToStoretestifierPhoto); 

          }else{

              $fileNameToStoretestifierPhoto = 'public/upload/testimonial/photos/noImage.jpg';

          }

          
                      if($request->hasFile('testifierSlugPhoto')){

            $fileNameWithExttestifierSlugPhoto = $request->file('testifierSlugPhoto')->getClientOriginalName();

            $fileNametestifierSlugPhoto = pathinfo($fileNameWithExttestifierSlugPhoto, PATHINFO_FILENAME);

            $extensiontestifierSlugPhoto = $request->file('testifierSlugPhoto')->getClientOriginalExtension();

            $fileNameToStoretestifierSlugPhoto = $fileNametestifierSlugPhoto.'_'.time().''.Str::random(5).'.'.$extensiontestifierSlugPhoto;

            $pathtestifierSlugPhoto = $request->file('testifierSlugPhoto')->storeAs('public/upload/testimonial/photos', $fileNameToStoretestifierSlugPhoto); 

          }else{

              $fileNameToStoretestifierSlugPhoto = 'public/upload/testimonial/photos/noImage.jpg';

          }




            

              $post = Netusertestimonial::find($id);
;

              $post->testimonialTitle = $request->input('testimonialTitle');
              $post->testifierName = $request->input('testifierName');
              
              $post->testifierPhoto = $fileNameToStoretestifierPhoto
              $post->testifierSlugPhoto = $fileNameToStoretestifierSlugPhoto

              $post->testifierOccupation = $request->input('testifierOccupation');
              $post->testifierReview = $request->input('testifierReview');


              $post->Approval = 'NO';
              
              
              

              $post->save();

              return redirect('/resources/testimonial/reviews');
            


            


        }
*/


#::::::::::::::::::::::::::::::::TESTIMONIAL
}
