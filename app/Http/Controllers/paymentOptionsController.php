<?php

namespace App\Http\Controllers;

use App\User;

use App\netguardrepo;

use Illuminate\Http\Request;

class paymentOptionsController extends Controller
{


	
    
    public function index($id){

    	$post = User::find($id);

       $user = User::where("id", $post->id)->get();


    	$postId = $post->id;

    	if($post->appActiveStageURL =='/account/'.$post->id.'/payment/options'  && $post->chargedAmount === '0.0'   && $post->registrationPurpose === 'Business' ){

    		    	} else{

    		    		return redirect($post->appActiveStageURL);
    		    	}

    	return view('paymentForm.options', ["postId" => $postId]);

    }

    	

















    	   public function freePayment($id){


        $datumOne = User::find($id);

         $user = User::where("id", $datumOne->id)->first();


            if($user){
        User::where("id",  $datumOne->id)->update(['chargedAmount' => '10', 'appActiveStageURL' => '/application/dashboard/publish']);

       }else{
       	return "<h1> Access Protocol Dennied";
       }
       
           return redirect('/application/dashboard/publish');

          

    }

}
