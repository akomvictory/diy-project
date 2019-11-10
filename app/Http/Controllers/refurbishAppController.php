<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\netguardrepo;
use Illuminate\Support\Str;

class refurbishAppController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }




 
  public function refurbishForm($id){

     $user =  auth()->user()->name;



#[

     
  $datumOne = netguardrepo::where('NetGuard', $user)->get();



      if(count($datumOne)==1){

            }else{

              return redirect('/application/dashboard/publish');
            }




   	$refurbish = netguardrepo::find($id);

      


      if($refurbish){

      }else{
          return redirect('/application/dashboard/publish');
      }




      

   		return view('dashboard.refurbishApp', compact('refurbish'));

   }

   public function refurbishApp(Request $request, $id){


   	$request->validate([

  			'businessName' => 'required|max:90|min:6', //make it unique later
  			'businessCategoryOne' => 'required|string|max:85|min:4',
  			'businessAddress' => 'required|max:95|min:8',
  			
  			'BusinessInfo' => 'required|max:600|min:43',
  			'stateOfOperation' => 'required|string|min:3',
  			'cityOfOperation' => 'required|max:86|min:3',
  			
  			'businessWebUrl' => 'url|nullable|max:80',
  			'businessPhoneNumber' => 'nullable|max:14|min:11',
  			'businessEmailUrl' => 'nullable|email|max:87',

  			'gubaHandle' => 'nullable|max:30|min:4', /// make it unique later

  			'keywordOne' => 'nullable|max:45|min:3',
  			'keywordtwo' => 'nullable|max:45|min:3',
  			'keywordThree' => 'nullable|max:45|min:3',
  			'keywordFour' => 'nullable|max:45|min:3',
  			'keywordFive' => 'nullable|max:45|min:3',
  			'keywordSix' => 'nullable|max:45|min:3',
  			'keywordSeven' => 'nullable|max:45|min:3',
  			'keywordEight' => 'nullable|max:45|min:3',
  			
  			'streetParking' => 'nullable|string',
  			'wifiService' => 'nullable|string',
  			'airConditioning' => 'nullable|string',
  			'cableTv' => 'nullable|string',
  			'sereneEnvironment' => 'nullable|string',
  			'POS' => 'nullable|string',
  			'suitableForEvents' => 'nullable|string',

  			'facebookUrl' => 'nullable|max:45',
  			'twitterUrl' => 'nullable|max:45',
  			'instagramUrl' => 'nullable|max:45',

  			'monOperationTime' => 'nullable|max:25',
  			'tueOperationTime' => 'nullable|max:25',
  			'wedOperationTime' => 'nullable|max:25',
  			'thursOperationTime' => 'nullable|max:25',
  			'friOperationTime' => 'nullable|max:25',
  			'satOperationTime' => 'nullable|max:25',
  			'sunOperationTime' => 'nullable|max:25',

  			
  			'coverPhoto' => 'nullable|image', /// check for max size later 10000
  			
  			'PhotoOne' => 'nullable|image', /// check for max size later
  			'PhotoTwo' => 'nullable|image', /// check for max size later
  			'PhotoThree' => 'nullable|image', /// check for max size later
  			'PhotoFour' => 'nullable|image', /// check for max size later
  			'PhotoFive' => 'nullable|image', /// check for max size later
  			'PhotoSix' => 'nullable|image', /// check for max size later
  			'PhotoSeven' => 'nullable|image', /// check for max size later
  			'PhotoEight' => 'nullable|image', /// check for max size later
  			'PhotoNine' => 'nullable|image', /// check for max size later



  		]);




  				if($request->hasFile('coverPhoto')){

  					$fileNameWithExtcoverPhoto = $request->file('coverPhoto')->getClientOriginalName();

  					$fileNamecoverPhoto = pathinfo($fileNameWithExtcoverPhoto, PATHINFO_FILENAME);

  					$extensioncoverPhoto = $request->file('coverPhoto')->getClientOriginalExtension();

  					$fileNameToStorecoverPhoto = $fileNamecoverPhoto.'_'.time().''.Str::random(10).'.'.$extensioncoverPhoto;

  					$pathcoverPhoto = $request->file('coverPhoto')->storeAs('public/upload/dashboard/photos', $fileNameToStorecoverPhoto); 

  				}else{

  					$fileNameToStorecoverPhoto = 'noImage.jpg';
  				}



                 if($request->hasFile('PhotoOne')){

  					$fileNameWithExtPhotoOne = $request->file('PhotoOne')->getClientOriginalName();

  					$fileNamePhotoOne = pathinfo($fileNameWithExtPhotoOne, PATHINFO_FILENAME);

  					$extensionPhotoOne = $request->file('PhotoOne')->getClientOriginalExtension();

  					$fileNameToStorPhotoOne = $fileNamePhotoOne.'_'.time().''.Str::random(10).'.'.$extensionPhotoOne;

  					$pathPhotoOne = $request->file('PhotoOne')->storeAs('public/upload/dashboard/photos', $fileNameToStorPhotoOne); 

  				}else{

  					$fileNameToStorPhotoOne = 'noImage.jpg';
  				}



  				  if($request->hasFile('PhotoTwo')){

  					$fileNameWithExtPhotoTwo = $request->file('PhotoTwo')->getClientOriginalName();

  					$fileNamePhotoTwo = pathinfo($fileNameWithExtPhotoTwo, PATHINFO_FILENAME);

  					$extensionPhotoTwo = $request->file('PhotoTwo')->getClientOriginalExtension();

  					$fileNameToStorePhotoTwo = $fileNamePhotoTwo.'_'.time().''.Str::random(10).'.'.$extensionPhotoTwo;

  					$pathPhotoTwo = $request->file('PhotoTwo')->storeAs('public/upload/dashboard/photos', $fileNameToStorePhotoTwo); 

  				}else{

  					$fileNameToStorePhotoTwo = 'noImage.jpg';
  				}

  				  if($request->hasFile('PhotoThree')){

  					$fileNameWithExtPhotoThree = $request->file('PhotoThree')->getClientOriginalName();

  					$fileNamePhotoThree = pathinfo($fileNameWithExtPhotoThree, PATHINFO_FILENAME);

  					$extensionPhotoThree = $request->file('PhotoThree')->getClientOriginalExtension();

  					$fileNameToStorePhotoThree = $fileNamePhotoThree.'_'.time().''.Str::random(10).'.'.$extensionPhotoThree;

  					$pathPhotoThree = $request->file('PhotoThree')->storeAs('public/upload/dashboard/photos', $fileNameToStorePhotoThree); 

  				}else{

  					$fileNameToStorePhotoThree = 'noImage.jpg';
  				}

  				 if($request->hasFile('PhotoFour')){

  					$fileNameWithExtPhotoFour = $request->file('PhotoFour')->getClientOriginalName();

  					$fileNamePhotoFour = pathinfo($fileNameWithExtPhotoFour, PATHINFO_FILENAME);

  					$extensionPhotoFour = $request->file('PhotoFour')->getClientOriginalExtension();

  					$fileNameToStorePhotoFour = $fileNamePhotoFour.'_'.time().''.Str::random(10).'.'.$extensionPhotoFour;

  					$pathPhotoFour = $request->file('PhotoFour')->storeAs('public/upload/dashboard/photos', $fileNameToStorePhotoFour); 

  				}else{

  					$fileNameToStorePhotoFour = 'noImage.jpg';
  				}



  				  	 if($request->hasFile('PhotoFive')){

  					$fileNameWithExtPhotoFive = $request->file('PhotoFive')->getClientOriginalName();

  					$fileNamePhotoFive = pathinfo($fileNameWithExtPhotoFive, PATHINFO_FILENAME);

  					$extensionPhotoFive = $request->file('PhotoFive')->getClientOriginalExtension();

  					$fileNameToStorePhotoFive = $fileNamePhotoFive.'_'.time().''.Str::random(10).'.'.$extensionPhotoFive;

  					$pathPhotoFive = $request->file('PhotoFive')->storeAs('public/upload/dashboard/photos', $fileNameToStorePhotoFive); 

  				}else{

  					$fileNameToStorePhotoFive = 'noImage.jpg';
  				}


  				  	if($request->hasFile('PhotoSix')){

  					$fileNameWithExtPhotoSix = $request->file('PhotoSix')->getClientOriginalName();

  					$fileNamePhotoSix = pathinfo($fileNameWithExtPhotoSix, PATHINFO_FILENAME);

  					$extensionPhotoSix = $request->file('PhotoSix')->getClientOriginalExtension();

  					$fileNameToStorePhotoSix = $fileNamePhotoSix.'_'.time().''.Str::random(10).'.'.$extensionPhotoSix;

  					$pathPhotoSix = $request->file('PhotoSix')->storeAs('public/upload/dashboard/photos', $fileNameToStorePhotoSix); 

  				}else{

  					$fileNameToStorePhotoSix = 'noImage.jpg';
  				}


  				  	if($request->hasFile('PhotoSeven')){

  					$fileNameWithExtPhotoSeven = $request->file('PhotoSeven')->getClientOriginalName();

  					$fileNamePhotoSeven = pathinfo($fileNameWithExtPhotoSeven, PATHINFO_FILENAME);

  					$extensionPhotoSeven = $request->file('PhotoSeven')->getClientOriginalExtension();

  					$fileNameToStorePhotoSeven = $fileNamePhotoSeven.'_'.time().''.Str::random(10).'.'.$extensionPhotoSeven;

  					$pathPhotoSeven = $request->file('PhotoSeven')->storeAs('public/upload/dashboard/photos', $fileNameToStorePhotoSeven); 

  				}else{

  					$fileNameToStorePhotoSeven = 'noImage.jpg';
  				}


  				  	if($request->hasFile('PhotoEight')){

  					$fileNameWithExtPhotoEight = $request->file('PhotoEight')->getClientOriginalName();

  					$fileNamePhotoEight = pathinfo($fileNameWithExtPhotoEight, PATHINFO_FILENAME);

  					$extensionPhotoEight = $request->file('PhotoEight')->getClientOriginalExtension();

  					$fileNameToStorePhotoEight = $fileNamePhotoEight.'_'.time().''.Str::random(10).'.'.$extensionPhotoEight;

  					$pathPhotoEight = $request->file('PhotoEight')->storeAs('public/upload/dashboard/photos', $fileNameToStorePhotoEight); 

  				}else{

  					$fileNameToStorePhotoEight = 'noImage.jpg';
  				}


  				  	if($request->hasFile('PhotoNine')){

  					$fileNameWithExtPhotoNine = $request->file('PhotoNine')->getClientOriginalName();

  					$fileNamePhotoNine = pathinfo($fileNameWithExtPhotoNine, PATHINFO_FILENAME);

  					$extensioPhotonNine = $request->file('PhotoNine')->getClientOriginalExtension();

  					$fileNameToStorePhotoNine = $fileNamePhotoNine.'_'.time().''.Str::random(10).'.'.$extensionPhotoNine;

  					$pathPhotoNine = $request->file('PhotoNine')->storeAs('public/upload/dashboard/photos', $fileNameToStorePhotoNine); 

  				}else{

  					$fileNameToStorePhotoNine = 'noImage.jpg';
  				}


  				$publish = netguardrepo::find($id);

  				$publish->NetGuard =  auth()->user()->name;

  				$publish->businessName = $request->input('businessName');
  				$publish->businessCategoryOne = $request->input('businessCategoryOne');
  				$publish->businessAddress = $request->input('businessAddress');
  				$publish->BusinessInfo = $request->input('BusinessInfo');


  		        



  			

  				$publish->stateOfOperation = $request->input('stateOfOperation');
  				$publish->cityOfOperation = $request->input('cityOfOperation');

  		

  				$publish->businessWebUrl = $request->input('businessWebUrl');
  				$publish->businessPhoneNumber = $request->input('businessPhoneNumber');

  				$publish->businessEmailUrl = $request->input('businessEmailUrl');


  				

  			



  			

  				$publish->gubaHandle = $request->input('gubaHandle');

  				$publish->keywordOne = $request->input('keywordOne');
  				$publish->keywordtwo = $request->input('keywordtwo');
  				$publish->keywordThree = $request->input('keywordThree');
  				$publish->keywordFour = $request->input('keywordFour');
  				$publish->keywordFive = $request->input('keywordFive');
  				$publish->keywordSix = $request->input('keywordSix');
  				$publish->keywordSeven = $request->input('keywordSeven');
  				$publish->keywordEight = $request->input('keywordEight');

  				

  				$publish->streetParking = $request->input('streetParking');
  				$publish->wifiService = $request->input('wifiService');
  				$publish->airConditioning = $request->input('airConditioning');
  				$publish->cableTv = $request->input('cableTv');
  				$publish->sereneEnvironment = $request->input('sereneEnvironment');
  				$publish->POS = $request->input('POS');
  				$publish->suitableForEvents = $request->input('suitableForEvents');
  		
  		  	


  		  		$publish->facebookUrl = $request->input('facebookUrl');
  				$publish->twitterUrl = $request->input('twitterUrl');
  				$publish->instagramUrl = $request->input('instagramUrl');


  			

  				$publish->monOperationTime = $request->input('monOperationTime');
  				$publish->tueOperationTime = $request->input('tueOperationTime');
  				$publish->wedOperationTime = $request->input('wedOperationTime');
  				$publish->thursOperationTime = $request->input('thursOperationTime');
  				$publish->friOperationTime = $request->input('friOperationTime');
  				$publish->satOperationTime = $request->input('satOperationTime');
  				$publish->sunOperationTime = $request->input('sunOperationTime');
  			


  			
  				$publish->coverPhoto = $fileNameToStorecoverPhoto;

  				$publish->PhotoOne = $fileNameToStorPhotoOne;
  				$publish->Phototwo = $fileNameToStorePhotoTwo;
  				$publish->PhotoThree = $fileNameToStorePhotoThree;
  				$publish->PhotoFour = $fileNameToStorePhotoFour;
  				$publish->PhotoFive = $fileNameToStorePhotoFive;
  				$publish->PhotoSix = $fileNameToStorePhotoSix;
  				$publish->PhotoSeven = $fileNameToStorePhotoSeven;
  				$publish->PhotoEight = $fileNameToStorePhotoEight;
  				$publish->PhotoNine = $fileNameToStorePhotoNine;

  				



  				$publish->charge = '89';
  				$publish->chargeToken = '09d';
  		  		$publish->packageOption = 'Starter';
  				$publish->packageGrade	 = '1';
  				$publish->ratingFlag = 'OFF';
  		


  					$publish->save();

  		return redirect('/application/dashboard/profile');




   }
}
