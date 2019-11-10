<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\netguardrepo;
use App\User;

class DashboardProfilePageController extends Controller
{


   public function __construct()
    {
        $this->middleware('auth');
    }

    
public function dashboardProfile(){


	
  




      $user_id =  auth()->user()->id;

      $user_id = User::find($user_id);

           $user =  auth()->user()->name;


 $datumOne = netguardrepo::where('NetGuard', $user)->get();



  $datumTwo = netguardrepo::where([

    ['NetGuard',$user_id->name]

 
      
      ])->get();



    if(count($datumTwo)==1){

      
        }elseif(count($datumTwo)==0) {
        
        	return redirect('/application/dashboard/publish');

        } else{

          return redirect('/');
        }



    return view('dashboard.dashboardProfile', compact('datumOne', 'datumTwo'));
}


}