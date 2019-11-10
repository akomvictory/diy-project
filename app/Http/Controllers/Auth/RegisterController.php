<?php



namespace App\Http\Controllers\Auth;

use App\User;
use Session;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail; 
use App\Mail\verifyEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.



Author Victory uncomment the middleware below later

very important


  // public function __construct()
    //{
      //  $this->middleware('guest');
    //}

    
    */

    use RegistersUsers;



    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   // public function __construct()
    //{
      //  $this->middleware('guest');
    //}

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        Session::flash('status', 'Registered but verify your email account');

        $user =  User::create([
            'id' => NULL,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'registrationPurpose' => 'Regular',
            'chargedAmount' => '0.0',
            'verifyToken' => time().''.Str::random($data['email']).''.Str::random(40),
            'appActiveStageURL' => 'account/'.$data['email'].'/signup/welcome',
             #'verifyToken' => time().''.Str::random($data['email']).''.Str::random(40),
        
        ]);

        $thisUser = User::findOrFail($user->id);   
       // $this->sendEmail($thisUser);
       
        $to = $thisUser['email'];
                    $subject = 'verification code from NetGuba.com';
                    $body = "<a href='https://netguba.com/account/".$thisUser['verifyToken']."/".$thisUser['id']."/".$thisUser['email']."/signup/welcome'> Click this link </a>";
                    $header = 'From: NetGuba.com';
                mail($to, $subject, $body, $header);
                 
     //  return redirect('/');
    }

/*
    public function sendEmail($thisUser){

        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
    }


*/
    

    public function sendEmailDone($verifyToken, $id, $email){

        $data = User::find($id);



                if($data && $verifyToken==$data->verifyToken && $email==$data->email){

                


         $user = User::where("verifyToken", $data->verifyToken)->first();


                if($user){
        
               User::where(["verifyToken" => $data->verifyToken, "id" => $data->id])->update(['status' => '1']);

           }

// Sign in the user user if a result is found
               auth()->login($user);


               } else{
                return view('signup.accessdeclined');
               }

        

            if($data->appActiveStageURL==='account/'.$data->email.'/signup/welcome'){
                
            } else{
                return redirect($data->appActiveStageURL);
            }




        return view('signup.welcome',

            ["verifyToken" => $verifyToken,
            "id" => $id  ]);


    }


    public function schemaOne($id){


        $regularUser = User::find($id);

            if($regularUser){
           User::where("id",  $regularUser->id)->update(['appActiveStageURL' => '/', 'verifyToken' => NULL]);

       }

           return redirect('/');

    }


        public function schemaTwo($id){


        $post = User::find($id);

            if($post){
           User::where("id",  $post->id)->update(['registrationPurpose' => 'Business', 'appActiveStageURL' => '/account/'.$post->id.'/payment/options', 'verifyToken' => NULL]);

       }

           return redirect('/account/'.$post->id.'/payment/options');

    }

}














/*


it work perfectly at 8pm fri 7 sept to so adding mail function will be next to test if working or nor

start from they if anything goes wrong



JUST REPLACE WITH THE COMMENTED CODES BELOW IF SOMETHING GOES WRONG


NORMAIL STATE HERE::::::::::::::::::




namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /* c

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    /* c
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*c


        


    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /*c
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /*
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
