<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SendGasolinePrices;


class SendGasolineController extends Controller
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
    public function index(){
        // $postsGasoline = SendGasolinePrices::orderBy('id','desc')->get();
        $postsGasoline = SendGasolinePrices::orderBy('id','desc')->paginate(5);
        return view('SendGasoline.index')->with('postsGasoline', $postsGasoline);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('SendGasoline.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      $this->validate($request, [
          'premiumOctane' => 'required',
          'normalOctane' => 'required',
          'diesel' => 'required'

      ]);
        //create post
        $postsGasoline = new SendGasolinePrices;
        $postsGasoline->premiumOctane = $request->input('premiumOctane');
        $postsGasoline->normalOctane = $request->input('normalOctane');
        $postsGasoline->diesel = $request->input('diesel');
        $postsGasoline->user_id = auth()->user()->id;
        $postsGasoline->save();
        return redirect('/SendGasoline')->with('success', 'Gasoline Prices Updated');
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
