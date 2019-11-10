<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NetGuardLike extends Model
{
    
		public function user(){

			return $this->belongsTo('App\User');
		}


		public function NetGuard(){

			return $this->belongsTo('App\netguardrepo');
		}


}
