<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\This;
use Socialite;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public  function  redirectToProvider(){

        return Socialite::driver('facebook')->redirect();
    }

    public function  handleProviderCallback(){

        $user =  Socialite::driver('facebook')->stateless()->user();

        $result = User::create([

            'name' => $user->name,
            'email' => $user->email ,
            'password' => $user->token,
            'national_id' =>  $user->id,
            'gender' => $user->expiresIn,

        ]);


        if (!$result)
        {
            return redirect()->back();
        }
        return 'GOOOD'; //Or redirect to dashboard


//
//        $data = [""=>$user->name,""=>$user->email,""=>$user->token];
//        $userDB = User::where('email',$user->email);
//         if (!is_null($userDB)){
//             Auth::login($userDB,true);
//
//         }else{
//            Auth::login($this->create($data));
//
//         }


    }

}
