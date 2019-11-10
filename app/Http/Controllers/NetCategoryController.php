<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Netbusinesscategory;
use App\netguardrepo;
use App\User;

class NetCategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

 public function AppForm(){

    

        if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }





    	return view('netcategory.netcategory');

    }


      public function Delete($id){

     


   

        if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }




        $post = Netbusinesscategory::find($id);

           $post->delete();

           	return redirect('/application/netcategory/list');
  }






   public function All(){

   

        if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }









              $allPost = Netbusinesscategory::orderBy('created_at', 'desc')->get();

          return view('netcategory.netcategorylist', compact('allPost'));

        }


















    public function publishApp(Request $request){


        if(auth()->user()->email !='NetGubaAdmin@gmail.com'){

          return redirect('/');

        }


        

	$request->validate([

             'slugTag' => 'required', 
  		
  			'categoryTitle' => 'required',           
  		


  			'categoryCoverPhoto' => 'required|image',  

  			'categorySlugPhoto' => 'nullable|image', 
  			
  
			  		]);

				

          if($request->hasFile('categoryCoverPhoto')){

            $fileNameWithExtpostcategoryCoverPhoto = $request->file('categoryCoverPhoto')->getClientOriginalName();

            $fileNamepostcategoryCoverPhoto = pathinfo($fileNameWithExtpostcategoryCoverPhoto, PATHINFO_FILENAME);

            $extensionpostcategoryCoverPhoto = $request->file('categoryCoverPhoto')->getClientOriginalExtension();

            $fileNameToStorepostcategoryCoverPhoto = $fileNamepostcategoryCoverPhoto.'_'.time().''.Str::random(5).'.'.$extensionpostcategoryCoverPhoto;

            $pathpostcategoryCoverPhoto = $request->file('categoryCoverPhoto')->storeAs('public/upload/netcategory/photos', $fileNameToStorepostcategoryCoverPhoto); 

          }else{

              $fileNameToStorepostcategoryCoverPhoto = 'public/upload/netcategory/photos/postCoverPhoto.jpg';

          }

  				
             if($request->hasFile('categorySlugPhoto')){

            $fileNameWithExtpostcategorySlugPhoto = $request->file('categorySlugPhoto')->getClientOriginalName();

            $fileNamepostcategorySlugPhoto = pathinfo($fileNameWithExtpostcategorySlugPhoto, PATHINFO_FILENAME);

            $extensionpostcategorySlugPhoto = $request->file('categorySlugPhoto')->getClientOriginalExtension();

            $fileNameToStorepostcategorySlugPhoto = $fileNamepostcategorySlugPhoto.'_'.time().''.Str::random(5).'.'.$extensionpostcategorySlugPhoto;

            $pathpostcategorySlugPhoto = $request->file('categorySlugPhoto')->storeAs('public/upload/netcategory/photos', $fileNameToStorepostcategorySlugPhoto); 

          }else{

              $fileNameToStorepostcategorySlugPhoto = 'public/upload/netcategory/photos/slugPhoto.jpg';

          }







          		$post = new Netbusinesscategory;

          		$post->slugTag = $request->input('slugTag');
          		$post->categoryTitle = $request->input('categoryTitle');
          		
          		
          		$post->categoryCoverPhoto =  $fileNameToStorepostcategoryCoverPhoto;
          		$post->categorySlugPhoto =  $fileNameToStorepostcategorySlugPhoto;
          		
          		$post->save();

          		return redirect('/application/netcategory/publish');
          	


          	


        }

}
