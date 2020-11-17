<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Illuminate\Support\Facades\Auth;
use Log;
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


    public function new()
    { //'gender'

      //        $posts = DB::table('flights')->orderBy('id', 'DESC')->get();

         $Flight =  DB::table('flights')->get();

        return  view('layouts.news',compact('Flight'));

    }






    public function home()
    {
        $usergender = Auth::user()->gender;

        $posts= DB::select("SELECT * from users , flights where user_id = users.name and '$usergender' = gender  order by flights.id DESC");

        $Flight =  DB::table('flights')->get();
        return  view('home',compact('Flight','posts'));

    }
    public function about()
    {
        return view('about');
    }

    public function delete($id)
    {
        DB::table('flights')->where('id',$id)->delete();
        return  view('home');
    }


    public function updatePost(Request $request)
    {


        DB::table('flights')->where('id',$request->input('id') )->update(['title' =>  $request->input('title')]);
        DB::table('flights')->where('id',$request->input('id') )->update(['body' =>  $request->input('body')]);

        return view('home');
    }




    public function getID(Request $request)
    {

         $userid = Auth::id();
      DB::table('users')->where('id', $userid)->update(['gender' =>  $request->input('gender')]);
      DB::table('users')->where('id', $userid)->update(['national_id'=> $request->input('national_id')]);

    }

//2
    public function someMethod(Request $request)
    {
        //dd($request->all());
   DB::insert("insert into flights (id,title,body,commint,user_id) VALUES(?,?,?,?,?)", [
                             null,
           $request->input('title'),
          $request->input('body'),
       0,
       $request->user()->name,




   ]);
        return  view('home');
}
//test
    public function ajaxRequest()

    {
        return view('form');
    }

    public function ajaxRequestPost(Request $request)

    {
        DB::insert("insert into flights (id,title,body,commint,user_id) VALUES(?,?,?,?,?)", [
            $request->id,
            $request->title,
            $request->body,
            0,
            $request->user()->name,

    ]);
       return  'DONE';
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
