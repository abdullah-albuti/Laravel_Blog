<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function After()
    {
        return view('UpDateUser');
    }



    public function home()
    {
        $Flight =  DB::table('flights')->get();
        return  view('home',compact('Flight'));

    }
    public function about()
    {
        return view('about');
    }


    public function getID(Request $request)
    {

         $userid = Auth::id();
      DB::table('users')->where('id', $userid)->update(['gender' =>  $request->input('gender')]);
      DB::table('users')->where('id', $userid)->update(['national_id'=> $request->input('national_id')]);
        return  view('home');
    }

//2
    public function someMethod(Request $request)
    {
        //dd($request->all());
   DB::insert("insert into flights (id,ELSE1) VALUES(?,?)", [
                             null,
           $request->input('text')


   ]);
        return  view('home');
}


//    public function show(){
//
////        $Flight = \app\Models\Flight::all();
//        $Flight =  DB::table('flights')->get();
//        return  view('layouts.new',compact('Flight'));
//    }
//    public function show(){
//
//        $page = DB::table('flights')->get();
//        return view('layouts.new',compact('page'));
//    }
}
