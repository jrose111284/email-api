<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

//    $request->session()->flush();
//
//
//      return $request->session()->all();

//
//        session(['jamie'=>'master']);
//
//        echo  session('jamie');

//          return view('home');

//      return  $request->session()->forget('jamie');

//        $request->session()->flush('jamie');

//        $request->session()->flash('message','post has been created');

//        return $request->session()->get('message');
     }
}
