<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Netblog;

class blogPostController extends Controller
{










public function __construct()
    {
        $this->middleware('auth');
    }





   
  public function postForm(){

    if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }

  	return view('blogmanagement.blogpublish');

  }


      public function takeAll(){


        if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }




        if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }

              $allPost = Netblog::orderBy('created_at', 'desc')->get();

          return view('blogmanagement.listblogpost', compact('allPost'));

        }


        public function Delete($id){

        $post = Netblog::find($id);

           $post->delete();

           return redirect('/resources/blog/list');

  }




    public function publishPost(Request $request){






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

            $pathpostPhotoThree = $request->file('postPhotoThree')->storeAs('public/upload/blog/photos', $fileNameToStorepostPhotoThree); 

          }else{

              $fileNameToStorepostPhotoThree = 'public/upload/blog/photos/postPhotoThree.jpg';

          }




  				if($request->hasFile('postPhotoFour')){

  					$fileNameWithExtpostPhotoFour = $request->file('postPhotoFour')->getClientOriginalName();

  					$fileNamepostPhotoFour = pathinfo($fileNameWithExtpostPhotoFour, PATHINFO_FILENAME);

  					$extensionpostPhotoFour = $request->file('postPhotoFour')->getClientOriginalExtension();

  					$fileNameToStorepostPhotoFour = $fileNamepostPhotoFour.'_'.time().''.Str::random(5).'.'.$extensionpostPhotoFour;

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

          		$post = new Netblog;

          		$post->publisherName = $request->input('publisherName');
          		$post->postTitle = $request->input('postTitle');
          		
          		$post->postSectionOne = $request->input('postSectionOne');
          		$post->postSectionTwo = $request->input('postSectionTwo');

          		$post->postSectionThree = $request->input('postSectionThree');
          		$post->postSectionFour = $request->input('postSectionFour');
          		$post->postSectionFive = $request->input('postSectionFive');
          	
          		$post->postSlug = $request->input('postSlug');
          		$post->postAccessibilty = $request->input('postAccessibilty');
          		$post->postFlag = $request->input('postFlag');


          		$post->postCoverPhoto = $fileNameToStorepostCoverPhoto;
          		$post->publisherPhoto = $fileNameToStorepublisherPhoto;
          		
          		$post->postPhotoOne =  $fileNameToStorepostPhotoOne;
          		$post->postPhotoTwo =  $fileNameToStorepostPhotoTwo;
          		$post->postPhotoThree = $fileNameToStorepostPhotoThree;
          		$post->postPhotoFour =  $fileNameToStorepostPhotoFour;
          		$post->postPhotoFive =  $fileNameToStorepostPhotoFive;

          		$post->save();

          		return back();
          	


          	


        }











        public function refurbishblogform($id){


if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }


          

    $refurbishblogpost = Netblog::find($id);

      return view('blogmanagement.blogrefurbish', compact('refurbishblogpost'));

   }




































    public function refurbishblogpost(Request $request, $id){

     

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

              $post = Netblog::find($id);

              $post->publisherName = $request->input('publisherName');
              $post->postTitle = $request->input('postTitle');
              
              $post->postSectionOne = $request->input('postSectionOne');
              $post->postSectionTwo = $request->input('postSectionTwo');

              $post->postSectionThree = $request->input('postSectionThree');
              $post->postSectionFour = $request->input('postSectionFour');
              $post->postSectionFive = $request->input('postSectionFive');
            
              $post->postSlug = $request->input('postSlug');
              $post->postAccessibilty = $request->input('postAccessibilty');
              $post->postFlag = $request->input('postFlag');


              $post->postCoverPhoto = $fileNameToStorepostCoverPhoto;
              $post->publisherPhoto = $fileNameToStorepublisherPhoto;
              
              $post->postPhotoOne =  $fileNameToStorepostPhotoOne;
              $post->postPhotoTwo =  $fileNameToStorepostPhotoTwo;
              $post->postPhotoThree = $fileNameToStorepostPhotoThree;
              $post->postPhotoFour =  $fileNameToStorepostPhotoFour;
              $post->postPhotoFive =  $fileNameToStorepostPhotoFive;

              $post->save();

              return back();
            


            


        }


}
