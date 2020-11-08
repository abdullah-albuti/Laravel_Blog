<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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



    public function home()
    {
        $Flight =  DB::table('flights')->get();
        return  view('home',compact('Flight'));

    }
    public function about()
    {
        return view('about');
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
