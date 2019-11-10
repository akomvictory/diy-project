<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Str;
use App\Netcoursepanel;

class coursePanelController extends Controller
{



   public function __construct()
    {
        $this->middleware('auth');
    }

    

	   public function coursePanelForm(){

        if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }


      return view('coursepanel.coursepanel');

   }



   			  public function takeAll(){


                if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }




              $allPost = Netcoursepanel::orderBy('created_at', 'desc')->get();

          return view('coursepanel.coursepanellist', compact('allPost'));

        }





        public function Delete($id){



             if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }

        $post = Netcoursepanel::find($id);

           $post->delete();

           return back();

  }



    public function publishCoursePanel(Request $request){

    		 	$request->validate([

           'publisherName' => 'nullable', 
  		
  			'postTitle' => 'required',           
  			'postSectionOne' => 'nullable',
  		
  			'postSlug' => 'required', 
  			'postAccessibilty' => 'nullable',
  			'postFlag' => 'nullable', 


  			'postCoverPhoto' => 'required|image',  

  			'publisherPhoto' => 'nullable|image', 
  			
  
			  		]);

				

          if($request->hasFile('postCoverPhoto')){

            $fileNameWithExtpostCoverPhoto = $request->file('postCoverPhoto')->getClientOriginalName();

            $fileNamepostCoverPhoto = pathinfo($fileNameWithExtpostCoverPhoto, PATHINFO_FILENAME);

            $extensionpostCoverPhoto = $request->file('postCoverPhoto')->getClientOriginalExtension();

            $fileNameToStorepostCoverPhoto = $fileNamepostCoverPhoto.'_'.time().''.Str::random(5).'.'.$extensionpostCoverPhoto;

            $pathpostCoverPhoto = $request->file('postCoverPhoto')->storeAs('public/upload/blog/photos', $fileNameToStorepostCoverPhoto); 

          }else{

              $fileNameToStorepostCoverPhoto = 'public/upload/blog/photos/noImage.jpg';

          }

  				
            if($request->hasFile('publisherPhoto')){

            $fileNameWithExtpublisherPhoto = $request->file('publisherPhoto')->getClientOriginalName();

            $fileNamepublisherPhoto = pathinfo($fileNameWithExtpublisherPhoto, PATHINFO_FILENAME);

            $extensionpublisherPhoto = $request->file('publisherPhoto')->getClientOriginalExtension();

            $fileNameToStorepublisherPhoto = $fileNamepublisherPhoto.'_'.time().''.Str::random(5).'.'.$extensionpublisherPhoto;

            $pathpublisherPhoto = $request->file('publisherPhoto')->storeAs('public/upload/blog/photos', $fileNameToStorepublisherPhoto); 

          }else{

              $fileNameToStorepublisherPhoto = 'public/upload/blog/photos/slugPhoto.png';

          }





  					

          		$post = new Netcoursepanel;

          		$post->publisherName = $request->input('publisherName');
          		$post->courseTitle = $request->input('postTitle');
          		
          		$post->courseSectionOne = $request->input('postSectionOne');
          	
          	
          		$post->courseSlug = $request->input('postSlug');
          		$post->courseAccessibilty = $request->input('postAccessibilty');
          		$post->courseFlag = $request->input('postFlag');


          		$post->courseCoverPhoto = $fileNameToStorepostCoverPhoto;
          		$post->publisherPhoto = $fileNameToStorepublisherPhoto;
          		
          		

          		$post->save();

          		return redirect('/resources/coursepanel/publish');
          	


          	


        }














           public function refurbishbCoursePanelForm($id){


              if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return back();

        }

            

    $update = Netcoursepanel::find($id);

      return view('coursepanel.coursepanelrefurbish', compact('update'));


}





      	 public function refurbishCoursePanel(Request $request, $id){

          $request->validate([

           'publisherName' => 'nullable', 
      
        'postTitle' => 'nullable',           
        'postSectionOne' => 'nullable',
     
        'postSlug' => 'nullable', 
        'postAccessibilty' => 'nullable',
        'postFlag' => 'nullable', 


        'postCoverPhoto' => 'nullable|image',  

        'publisherPhoto' => 'nullable|image', 
       

  
            ]);

        

          if($request->hasFile('postCoverPhoto')){

            $fileNameWithExtpostCoverPhoto = $request->file('postCoverPhoto')->getClientOriginalName();

            $fileNamepostCoverPhoto = pathinfo($fileNameWithExtpostCoverPhoto, PATHINFO_FILENAME);

            $extensionpostCoverPhoto = $request->file('postCoverPhoto')->getClientOriginalExtension();

            $fileNameToStorepostCoverPhoto = $fileNamepostCoverPhoto.'_'.time().''.Str::random(5).'.'.$extensionpostCoverPhoto;

            $pathpostCoverPhoto = $request->file('postCoverPhoto')->storeAs('public/upload/blog/photos', $fileNameToStorepostCoverPhoto); 

          }else{

              $fileNameToStorepostCoverPhoto = 'public/upload/blog/photos/noImage.jpg';

          }

          
            if($request->hasFile('publisherPhoto')){

            $fileNameWithExtpublisherPhoto = $request->file('publisherPhoto')->getClientOriginalName();

            $fileNamepublisherPhoto = pathinfo($fileNameWithExtpublisherPhoto, PATHINFO_FILENAME);

            $extensionpublisherPhoto = $request->file('publisherPhoto')->getClientOriginalExtension();

            $fileNameToStorepublisherPhoto = $fileNamepublisherPhoto.'_'.time().''.Str::random(5).'.'.$extensionpublisherPhoto;

            $pathpublisherPhoto = $request->file('publisherPhoto')->storeAs('public/upload/blog/photos', $fileNameToStorepublisherPhoto); 

          }else{

              $fileNameToStorepublisherPhoto = 'public/upload/blog/photos/cartoonImage.png';

          }





            
              $updateCourse = Netcoursepanel::find($id);

              $updateCourse->publisherName = $request->input('publisherName');
              $updateCourse->courseTitle = $request->input('postTitle');
              
              $updateCourse->courseSectionOne = $request->input('postSectionOne');
            
            
              $updateCourse->courseSlug = $request->input('postSlug');
              $updateCourse->courseAccessibilty = $request->input('postAccessibilty');
              $updateCourse->courseFlag = $request->input('postFlag');


              $updateCourse->courseCoverPhoto = $fileNameToStorepostCoverPhoto;
              $updateCourse->publisherPhoto = $fileNameToStorepublisherPhoto;
              
            

              $updateCourse->save();

              return redirect('/resources/coursepanel/publish');
            










}



}
