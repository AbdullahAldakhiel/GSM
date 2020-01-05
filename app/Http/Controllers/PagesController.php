<?php

namespace App\Http\Controllers;
use DB;


use Illuminate\Http\Request;

class PagesController extends Controller{
     public function index(){ 
         // pass title to index
         $title = 'test';
         $lastdata = DB::table('send_gasoline_prices')->latest('created_at')->first();
         return view('pages.index')->with('lastdata',  $lastdata)->with('title', $title);
    }
    public function about(){ 
        return view('pages.about');
    }
    public function login(){ 
        return view('pages.login');
    }
}
// send an array
// $data = array(
//     'title' => 'Serv'
//      'web' => 'efsefs'
// );
// return view('pages.index')->with($title);