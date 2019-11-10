<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\netguardrepo;
use App\netguardcart;
use App\User;


class firstStorePublishController extends Controller
{
   

   public function __construct()
    {
        $this->middleware('auth');
    }









	public function publish(){

     $user =  auth()->user()->name;



#[

     
  $datumOne = netguardrepo::where('NetGuard', $user)->get();



      if(count($datumOne)==1){

            }else{

              return redirect('/application/dashboard/publish');
            }


             $datumTwo = netguardcart::where('NetGuard', $user)->get();



      if(count($datumTwo)>=12){

        return redirect('/application/store/list');

            }else{

              
            }





		return view('dashboardstore.firststorepublish', compact('datumOne'));
	}

















		  public function takeAll(){

          $user =  auth()->user()->name;

           $datumOne = netguardrepo::where('NetGuard', $user)->get();



      if(count($datumOne)==1){

            }else{

              return redirect('/application/dashboard/publish');
            }


















           $allPost = netguardcart::where('NetGuard', $user)->get();


            $findBusiness = netguardrepo::where('NetGuard', $user)->get();




          return view('dashboardstore.firststorelist', compact('allPost', 'findBusiness', 'datumOne'));

        }


        public function Delete($id){

        $post = netguardcart::find($id);

           $post->delete();

           return back();

  }



	      public function refurbishbStoreForm($id){

            $user =  auth()->user()->name;

            

           $datumOne = netguardrepo::where('NetGuard', $user)->get();



      if(count($datumOne)==1){

            }else{

              return redirect('/application/dashboard/publish');
            }














     
  $datumTwo = netguardcart::where('id', $id)->get();



      if(count($datumTwo)==1){

       
            }else{

               return redirect('/application/store/list');

            }


    $updateStore = netguardcart::find($id);

      return view('dashboardstore.firststorerefurbish', compact('updateStore', 'datumTwo', 'datumOne'));


}


		public function createStore(Request $request){

   $user =  auth()->user()->name;



#[

     
  $datumOne = netguardrepo::where('NetGuard', $user)->get();



      if(count($datumOne)==1){

            }else{

              return redirect('/application/dashboard/publish');
            }














     
  $datumTwo = netguardcart::where('NetGuard', $user)->get();



      if(count($datumTwo)>=12){

        return redirect('/application/store/list');

            }else{

              
            }


       $datumOne = netguardrepo::where('NetGuard', $user)->get();



      if(count($datumOne)==1){

            }else{

              return redirect('/application/dashboard/publish');
            }




		$request->validate([
        'businessName' => 'required|max:80|min:3',
  			'itemTitle' => 'required|max:80|min:3', 
  			'itemPrice' => 'required|max:12|min:2',
  			'itemImage' => 'required|image',              //implement max sise latter
  			'itemDescription' => 'required|max:400|min:10',


  			
  			
  			

			  		]);


		 	if($request->hasFile('itemImage')){

  					$fileNameWithExtItemImage = $request->file('itemImage')->getClientOriginalName();

  					$fileNameItemImage = pathinfo($fileNameWithExtItemImage, PATHINFO_FILENAME);

  					$extensionItemImage = $request->file('itemImage')->getClientOriginalExtension();

  					$fileNameToStoreItemImage = $fileNameItemImage.'_'.time().''.Str::random(5).'.'.$extensionItemImage;

  					$pathItemImage = $request->file('itemImage')->storeAs('public/upload/store/photos', $fileNameToStoreItemImage); 

  				}else{

  						$fileNameToStoreItemImage = 'public/upload/store/photos/noImage.jpg';

  				}


			  		$store = new netguardcart;

			  		$store->NetGuard = $user;
			  		$store->businessName = $request->input('businessName');

			  		$store->itemTitle = $request->input('itemTitle');
			  		$store->itemPrice = $request->input('itemPrice');
			  		$store->itemImage = $fileNameToStoreItemImage;
			  		$store->itemDescription = $request->input('itemDescription');

			  	

			  		
			  		$store->save();

			  		return redirect('/application/store/publish');



	}



















































	public function refurbishStore(Request $request, $id){

		$request->validate([

  			'itemTitle' => 'nullable|max:80|min:3', 
  			'itemPrice' => 'nullable|max:12|min:2',
  			'itemImage' => 'nullable|image',              //implement max sise latter
  			'itemDescription' => 'nullable|max:400|min:10',


  			
  			
  			

			  		]);


		 	if($request->hasFile('itemImage')){

  					$fileNameWithExtItemImage = $request->file('itemImage')->getClientOriginalName();

  					$fileNameItemImage = pathinfo($fileNameWithExtItemImage, PATHINFO_FILENAME);

  					$extensionItemImage = $request->file('itemImage')->getClientOriginalExtension();

  					$fileNameToStoreItemImage = $fileNameItemImage.'_'.time().''.Str::random(5).'.'.$extensionItemImage;

  					$pathItemImage = $request->file('itemImage')->storeAs('public/upload/store/photos', $fileNameToStoreItemImage); 

  				}else{

  						$fileNameToStoreItemImage = 'public/upload/store/photos/noImage.jpg';

  				}


			  		$store = netguardcart::find($id);

           

			  		$store->NetGuard = auth()->user()->name;
			  		$store->businessName = $store->businessName;

			  		$store->itemTitle = $request->input('itemTitle');
			  		$store->itemPrice = $request->input('itemPrice');
			  		$store->itemImage = $fileNameToStoreItemImage;
			  		$store->itemDescription = $request->input('itemDescription');

			  	

			  		
			  		$store->save();

			  		return redirect('/application/store/publish');





	}

















}
