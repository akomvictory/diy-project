<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmailSubscription;

class EmailSubcriptionController extends Controller
{
      public function index(Request $request){


    		 	$request->validate([

           'email' => 'required|max:56', 
  		
  		

  
			  		]);


    		 $post = new EmailSubscription;

          		$post->userEmail = $request->input('email');
          		$post->userName = 'Max Doe';
          		
           		$post->userIpAddress = $request->ip();

          		$post->save();

          		return redirect('/');
          	


}


		}