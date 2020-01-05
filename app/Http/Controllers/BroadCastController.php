<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class BroadCastController extends Controller
{
    public function sendBC(Request $request){
        $this->validate($request, [
            'message' => 'required'
  
        ]);
          //create post
       

           $query =  DB::table('broadcast')->insert(
            ['message' => $request->input('message'),
            'gsmName' => $request->input('gasName')]
        );

    if ( !$query ) { 
      return redirect('/dashboard')->with('error', 'Broadcast has not been sent'); 

    }
    return redirect('/dashboard')->with('success', 'Broadcast has been sent'); 


}
}
