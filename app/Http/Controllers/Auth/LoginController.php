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
public  function username()
{
    $login =  request()->input("login");
    $fieldtype = filter_var($login,FILTER_VALIDATE_EMAIL)? 'email':'name';
    request()->merge([$fieldtype => $login]);
    return $fieldtype ;
}


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public  function  redirectToProvider(){

        return Socialite::driver('facebook')->redirect();
    }

    public function  handleProviderCallback(){

        $user =  Socialite::driver('facebook')->stateless()->user();
        $users       =   User::where(['email' => $user->getEmail()])->first();

        if($users){
            Auth::login($users);
            return redirect()->route('home');
        }else {
            $users = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->token,
                'national_id' => 0,
                'gender' => 0,
            ]);


            if (!$users) {
                return redirect()->back();
            }
            Auth::login($users);
            return redirect()->route('After');
        }

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
