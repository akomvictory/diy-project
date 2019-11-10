<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Netcoursepane;


class coursePaneController extends Controller
{
  


   public function __construct()
    {
        $this->middleware('auth');
    }






	     public function coursePaneForm(){


        if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }


      return view('coursespane.coursepane');

   }


      public function takeAll(){

        if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }



              $allPost = Netcoursepane::orderBy('created_at', 'desc')->get();

          return view('coursespane.coursepanelist', compact('allPost'));

        }


        public function Delete($id){

             if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }

        $post = Netcoursepane::find($id);

           $post->delete();

           return back();
  }



    public function publishCourse(Request $request){

    		 	$request->validate([

           'publisherName' => 'nullable', 
  		
  			'postTitle' => 'required',           
  			'postSectionOne' => 'nullable',
  			'postSectionTwo' => 'nullable', 
  			'postSectionThree' => 'nullable',
  			'postSectionFour' => 'nullable', 
  			'postSectionFive' => 'nullable',
  			'postSlug' => 'required', 
  			'postAccessibilty' => 'nullable',
  			'postFlag' => 'nullable', 


  			'postCoverPhoto' => 'required|image',  

  			'publisherPhoto' => 'nullable|image', 
  			'postPhotoOne' => 'nullable|image',    
  			'postPhotoTwo' => 'nullable|image', 
  			'postPhotoThree' => 'nullable|image',    
  			'postPhotoFour' => 'nullable|image',
  			'postPhotoFive' => 'nullable|image',

  
			  		]);

				

          if($request->hasFile('postCoverPhoto')){

            $fileNameWithExtpostCoverPhoto = $request->file('postCoverPhoto')->getClientOriginalName();

            $fileNamepostCoverPhoto = pathinfo($fileNameWithExtpostCoverPhoto, PATHINFO_FILENAME);

            $extensionpostCoverPhoto = $request->file('postCoverPhoto')->getClientOriginalExtension();

            $fileNameToStorepostCoverPhoto = $fileNamepostCoverPhoto.'_'.time().''.Str::random(5).'.'.$extensionpostCoverPhoto;

            $pathpostCoverPhoto = $request->file('postCoverPhoto')->storeAs('public/upload/blog/photos', $fileNameToStorepostCoverPhoto); 

          }else{

              $fileNameToStorepostCoverPhoto = 'public/upload/blog/photos/postCoverPhoto.jpg';

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





  					if($request->hasFile('postPhotoOne')){

  					$fileNameWithExtpostPhotoOne = $request->file('postPhotoOne')->getClientOriginalName();

  					$fileNamepostPhotoOne = pathinfo($fileNameWithExtpostPhotoOne, PATHINFO_FILENAME);

  					$extensionpostPhotoOne = $request->file('postPhotoOne')->getClientOriginalExtension();

  					$fileNameToStorepostPhotoOne = $fileNamepostPhotoOne.'_'.time().''.Str::random(5).'.'.$extensionpostPhotoOne;

  					$pathpostPhotoOne = $request->file('postPhotoOne')->storeAs('public/upload/blog/photos', $fileNameToStorepostPhotoOne); 

  				}else{

  						$fileNameToStorepostPhotoOne = 'public/upload/blog/photos/postPhotoOne.jpg';

  				}



  					if($request->hasFile('postPhotoTwo')){

  					$fileNameWithExtpostPhotoTwo = $request->file('postPhotoTwo')->getClientOriginalName();

  					$fileNamepostPhotoTwo = pathinfo($fileNameWithExtpostPhotoTwo, PATHINFO_FILENAME);

  					$extensionpostPhotoTwo = $request->file('postPhotoTwo')->getClientOriginalExtension();

  					$fileNameToStorepostPhotoTwo = $fileNamepostPhotoTwo.'_'.time().''.Str::random(5).'.'.$extensionpostPhotoTwo;

  					$pathpostPhotoTwo = $request->file('postPhotoTwo')->storeAs('public/upload/blog/photos', $fileNameToStorepostPhotoTwo); 

  				}else{

  						$fileNameToStorepostPhotoTwo = 'public/upload/blog/photos/postPhotoTwo.jpg';

  				}


  				  




  				if($request->hasFile('postPhotoThree')){

  					$fileNameWithExtpostPhotoThree = $request->file('postPhotoThree')->getClientOriginalName();

  					$fileNamepostPhotoThree = pathinfo($fileNameWithExtpostPhotoThree, PATHINFO_FILENAME);

  					$extensionpostPhotoThree = $request->file('postPhotoThree')->getClientOriginalExtension();

  					$fileNameToStorepostPhotoThree = $fileNamepostPhotoThree.'_'.time().''.Str::random(5).'.'.$extensionpostPhotoThree;

  					$pathpostPhotoThree  = $request->file('postPhotoThree')->storeAs('public/upload/blog/photos', $fileNameToStorepostPhotoThree); 

  				}else{

  						$fileNameToStorepostPhotoThree  = 'public/upload/blog/photos/postPhotoThree.jpg';

  				}


          if($request->hasFile('postPhotoFour')){

            $fileNameWithExtpostPhotoFour = $request->file('postPhotoFour')->getClientOriginalName();

            $fileNamepostPhotoFour = pathinfo($fileNameWithExtpostPhotoFour, PATHINFO_FILENAME);

            $extensionpostPhotoFour = $request->file('postPhotoFour')->getClientOriginalExtension();

            $fileNameToStorepostPhotoFour = $fileNamepostPhotoFour.'_'.time().''.Str::random(5).'.'.$extensionpostPhotoFour;

            $pathpostPhotoFour  = $request->file('postPhotoFour')->storeAs('public/upload/blog/photos', $fileNameToStorepostPhotoFour); 

          }else{

              $fileNameToStorepostPhotoFour  = 'public/upload/blog/photos/postPhotoFour.jpg';

          }



  				if($request->hasFile('postPhotoFive')){

  					$fileNameWithExtpostPhotoFive = $request->file('postPhotoFive')->getClientOriginalName();

  					$fileNamepostPhotoFive = pathinfo($fileNameWithExtpostPhotoFive, PATHINFO_FILENAME);

  					$extensionpostPhotoFive = $request->file('postPhotoFive')->getClientOriginalExtension();

  					$fileNameToStorepostPhotoFive = $fileNamepostPhotoFive.'_'.time().''.Str::random(5).'.'.$extensionpostPhotoFive;

  					$pathpostPhotoFive  = $request->file('postPhotoFive')->storeAs('public/upload/blog/photos', $fileNameToStorepostPhotoFive); 

  				}else{

  						$fileNameToStorepostPhotoFive  = 'public/upload/blog/photos/postPhotoFive.jpg';

  				
          }

          		$post = new Netcoursepane;

          		$post->publisherName = $request->input('publisherName');
          		$post->courseTitle = $request->input('postTitle');
          		
          		$post->courseSectionOne = $request->input('postSectionOne');
          		$post->courseSectionTwo = $request->input('postSectionTwo');

          		$post->courseSectionThree = $request->input('postSectionThree');
          		$post->courseSectionFour = $request->input('postSectionFour');
          		$post->courseSectionFive = $request->input('postSectionFive');
          	
          		$post->courseSlug = $request->input('postSlug');
          		$post->courseAccessibilty = $request->input('postAccessibilty');
          		$post->courseFlag = $request->input('postFlag');


          		$post->courseCoverPhoto = $fileNameToStorepostCoverPhoto;
          		$post->publisherPhoto = $fileNameToStorepublisherPhoto;
          		
          		$post->coursePhotoOne =  $fileNameToStorepostPhotoOne;
          		$post->coursePhotoTwo =  $fileNameToStorepostPhotoTwo;
          		$post->coursePhotoThree =  $fileNameToStorepostPhotoThree;
          		$post->coursePhotoFour =  $fileNameToStorepostPhotoFour;
          		$post->coursePhotoFive =  $fileNameToStorepostPhotoFive;

          		$post->save();

          		return redirect('/resources/coursepanel/publish');
          	


          	


        }














           public function refurbishbCoursepaneForm($id){

              if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }




    $update = Netcoursepane::find($id);

      return view('coursespane.coursepanerefurbish', compact('update'));


}





      	 public function refurbishCoursePane(Request $request, $id){

          $request->validate([

           'publisherName' => 'nullable', 
      
        'postTitle' => 'nullable',           
        'postSectionOne' => 'nullable',
        'postSectionTwo' => 'nullable', 
        'postSectionThree' => 'nullable',
        'postSectionFour' => 'nullable', 
        'postSectionFive' => 'nullable',
        'postSlug' => 'nullable', 
        'postAccessibilty' => 'nullable',
        'postFlag' => 'nullable', 


        'postCoverPhoto' => 'nullable|image',  

        'publisherPhoto' => 'nullable|image', 
        'postPhotoOne' => 'nullable|image',    
        'postPhotoTwo' => 'nullable|image', 
        'postPhotoThree' => 'nullable|image',    
        'postPhotoFour' => 'nullable|image',
        'postPhotoFive' => 'nullable|image',

  
            ]);

        

          if($request->hasFile('postCoverPhoto')){

            $fileNameWithExtpostCoverPhoto = $request->file('postCoverPhoto')->getClientOriginalName();

            $fileNamepostCoverPhoto = pathinfo($fileNameWithExtpostCoverPhoto, PATHINFO_FILENAME);

            $extensionpostCoverPhoto = $request->file('postCoverPhoto')->getClientOriginalExtension();

            $fileNameToStorepostCoverPhoto = $fileNamepostCoverPhoto.'_'.time().''.Str::random(5).'.'.$extensionpostCoverPhoto;

            $pathpostCoverPhoto = $request->file('postCoverPhoto')->storeAs('public/upload/blog/photos', $fileNameToStorepostCoverPhoto); 

          }else{

              $fileNameToStorepostCoverPhoto = 'public/upload/blog/photos/postCoverPhoto.jpg';

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





            if($request->hasFile('postPhotoOne')){

            $fileNameWithExtpostPhotoOne = $request->file('postPhotoOne')->getClientOriginalName();

            $fileNamepostPhotoOne = pathinfo($fileNameWithExtpostPhotoOne, PATHINFO_FILENAME);

            $extensionpostPhotoOne = $request->file('postPhotoOne')->getClientOriginalExtension();

            $fileNameToStorepostPhotoOne = $fileNamepostPhotoOne.'_'.time().''.Str::random(5).'.'.$extensionpostPhotoOne;

            $pathpostPhotoOne = $request->file('postPhotoOne')->storeAs('public/upload/blog/photos', $fileNameToStorepostPhotoOne); 

          }else{

              $fileNameToStorepostPhotoOne = 'public/upload/blog/photos/postPhotoOne.jpg';

          }



            if($request->hasFile('postPhotoTwo')){

            $fileNameWithExtpostPhotoTwo = $request->file('postPhotoTwo')->getClientOriginalName();

            $fileNamepostPhotoTwo = pathinfo($fileNameWithExtpostPhotoTwo, PATHINFO_FILENAME);

            $extensionpostPhotoTwo = $request->file('postPhotoTwo')->getClientOriginalExtension();

            $fileNameToStorepostPhotoTwo = $fileNamepostPhotoTwo.'_'.time().''.Str::random(5).'.'.$extensionpostPhotoTwo;

            $pathpostPhotoTwo = $request->file('postPhotoTwo')->storeAs('public/upload/blog/photos', $fileNameToStorepostPhotoTwo); 

          }else{

              $fileNameToStorepostPhotoTwo = 'public/upload/blog/photos/postPhotoTwo.jpg';

          }


          if($request->hasFile('postPhotoThree')){

            $fileNameWithExtpostPhotoThree = $request->file('postPhotoThree')->getClientOriginalName();

            $fileNamepostPhotoThree  = pathinfo($fileNameWithExtpostPhotoThree, PATHINFO_FILENAME);

            $extensionpostPhotoThree  = $request->file('postPhotoThree')->getClientOriginalExtension();

            $fileNameToStorepostPhotoThree  = $fileNamepostPhotoThree.'_'.time().''.Str::random(5).'.'.$extensionpostPhotoThree;

            $pathpostPhotoThree  = $request->file('postPhotoThree ')->storeAs('public/upload/blog/photos', $fileNameToStorepostPhotoThree); 

          }else{

              $fileNameToStorepostPhotoThree  = 'public/upload/blog/photos/postPhotoThree.jpg';

          }




          if($request->hasFile('postPhotoFour')){

            $fileNameWithExtpostPhotoFour = $request->file('postPhotoFour')->getClientOriginalName();

            $fileNamepostPhotoFour = pathinfo($fileNameWithExtpostPhotoFour, PATHINFO_FILENAME);

            $extensionpostPhotoFour = $request->file('postPhotoFour')->getClientOriginalExtension();

            $fileNameToStorepostPhotoFour = $fileNamepostPhotoThree.'_'.time().''.Str::random(5).'.'.$extensionpostPhotoFour;

            $pathpostPhotoThree  = $request->file('postPhotoFour')->storeAs('public/upload/blog/photos', $fileNameToStorepostPhotoFour); 

          }else{

              $fileNameToStorepostPhotoFour  = 'public/upload/blog/photos/postPhotoFour.jpg';

          }



          if($request->hasFile('postPhotoFive')){

            $fileNameWithExtpostPhotoFive = $request->file('postPhotoFive')->getClientOriginalName();

            $fileNamepostPhotoFive = pathinfo($fileNameWithExtpostPhotoFive, PATHINFO_FILENAME);

            $extensionpostPhotoFive = $request->file('postPhotoFive')->getClientOriginalExtension();

            $fileNameToStorepostPhotoFive = $fileNamepostPhotoFive.'_'.time().''.Str::random(5).'.'.$extensionpostPhotoFive;

            $pathpostPhotoFive  = $request->file('postPhotoFive')->storeAs('public/upload/blog/photos', $fileNameToStorepostPhotoFive); 

          }else{

              $fileNameToStorepostPhotoFive  = 'public/upload/blog/photos/postPhotoFive.jpg';

          
          }

              $updateCourse = Netcoursepane::find($id);

              $updateCourse->publisherName = $request->input('publisherName');
              $updateCourse->courseTitle = $request->input('postTitle');
              
              $updateCourse->courseSectionOne = $request->input('postSectionOne');
              $updateCourse->courseSectionTwo = $request->input('postSectionTwo');

              $updateCourse->courseSectionThree = $request->input('postSectionThree');
              $updateCourse->courseSectionFour = $request->input('postSectionFour');
              $updateCourse->courseSectionFive = $request->input('postSectionFive');
            
              $updateCourse->courseSlug = $request->input('postSlug');
              $updateCourse->courseAccessibilty = $request->input('postAccessibilty');
              $updateCourse->courseFlag = $request->input('postFlag');


              $updateCourse->courseCoverPhoto = $fileNameToStorepostCoverPhoto;
              $updateCourse->publisherPhoto = $fileNameToStorepublisherPhoto;
              
              $updateCourse->coursePhotoOne =  $fileNameToStorepostPhotoOne;
              $updateCourse->coursePhotoTwo =  $fileNameToStorepostPhotoTwo;
              $updateCourse->coursePhotoThree =  $fileNameToStorepostPhotoThree;
              $updateCourse->coursePhotoFour =  $fileNameToStorepostPhotoFour;
              $updateCourse->coursePhotoFive =  $fileNameToStorepostPhotoFive;

              $updateCourse->save();

              return redirect('/resources/coursepanel/publish');
            








   }


}
