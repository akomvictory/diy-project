<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\netguardcart;


class firstStoreInfoController extends Controller
{
   public function storeList(Request $request, $business = NULL){

   	$datumOne = netguardcart::where('businessName', $business)->get();


   	return view('dashboardstore.storelist', compact('datumOne'));
  
   }



   public function storeDetail($businessName, $id){

   	$datumOne = netguardcart::where([
                    ['businessName', '=', $businessName],
                    ['id', '=', $id]
                ])->get();

   	return view('dashboardstore.storeitemdetail', compact('datumOne'));
  
   }
}
