<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\confirm;
use DB;
class ConfirmationController extends Controller
{
            /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    

        $lastdata = DB::table('send_gasoline_prices')->latest('created_at')->first();
        $listupdated = confirm::orderBy('id','desc')->paginate(5);
        return view('updatedgas')->with('listupdated', $listupdated)->with('lastdata', $lastdata);
    }
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {    

        $lastdata = DB::table('send_gasoline_prices')->latest('created_at')->first();
        $listupdated = confirm::orderBy('id','desc')->paginate(5);
        return view('SendGasoline.updatedgas')->with('listupdated', $listupdated)->with('lastdata', $lastdata);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastdata = DB::table('send_gasoline_prices')->latest('created_at')->first()->id;

        $priceCheck = DB::table('confirms')->where('priceId', $lastdata)->where('stationName', auth()->user()->name);

        if ($priceCheck->count() == 0){
            $confirmPost = new confirm;
            $confirmPost->priceId = $lastdata;
            $confirmPost->stationName = auth()->user()->name;
            $confirmPost->isConfirm = "yes";
            $confirmPost->save();
            return redirect('/dashboard')->with('success', 'Gasoline Prices Updated');

            }
            return redirect('/dashboard')->with('success', 'Gasoline Prices already updated');

 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
