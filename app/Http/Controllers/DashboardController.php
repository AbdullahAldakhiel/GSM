<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
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
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id = 2);
        $lastdata = DB::table('send_gasoline_prices')->latest('created_at')->first();
        $currentGsaPrice = null;
        $currentGasReturn = null;
        $SendGasolinePrices = $user->SendGasolinePrices;
        $conGas = DB::table('confirms')->where('stationName', auth()->user()->name)->count();
        if(auth()->user()->type == 'GSA' &&
               $conGas > 0){

        
                        $currentGsaPrice = DB::table('confirms')->where('stationName', auth()->user()->name)->latest('created_at')->first();
                        $currentGasReturn = DB::table('send_gasoline_prices')->where('id', $currentGsaPrice->priceId)->latest('created_at')->first();
                    
          
        }else{
            $currentGasReturn = DB::table('send_gasoline_prices')->where('id', '1')->first();


        }
        
        $messages = DB::table('broadcast')->latest('created_at')->first();
        $dmMessages = DB::table('broadcast')->where('gsmName', auth()->user()->name)->latest('created_at')->first();


        // return view('dashboard', [
        //     'currentGasReturn' => $currentGasReturn
        // ])->with('SendGasolinePrices', $user->SendGasolinePrices)->with('lastdata',  $lastdata);


        $instructors = DB::table('users')->where('type', '=','GSA');
        $instructorOptions = array('' => 'Select GasStation') + $instructors->pluck('name', 'name')->toArray();
        

        array_push($instructorOptions,"All");


        return view('dashboard', compact('currentGasReturn', 'SendGasolinePrices' ,'lastdata', 'messages', 'instructorOptions' ,'dmMessages'));

    }
}
