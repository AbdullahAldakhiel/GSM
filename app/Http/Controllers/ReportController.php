<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




            $instructors = DB::table('users')->where('type', '=','GSA');
            $instructorOptions = array('' => 'Select GasStation') + $instructors->pluck('name', 'name')->toArray();

        return view('report')->with('instructorOptions', $instructorOptions);
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {


        $rep = Report::orderBy('id','desc')->paginate(5);

        return view('getreports')->with('rep', $rep);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gasName' => 'required',
            'geustEmail' => ['required', 'string', 'email', 'max:255'],
            'comment' => 'required'
  
        ]);
          //create post
          $addReport = new Report;
          $addReport->gasstationName = $request->input('gasName');
          $addReport->geustEmail = $request->input('geustEmail');
          $addReport->comment = $request->input('comment');
          $addReport->fine = 'NULL';
          $addReport->object = 'NULL';
          $addReport->clear = 'NULL';

          $addReport->save();
          return redirect('/report')->with('success', 'Report has been sent');   
         }

         public function getFines(){
            



            $fine = Report::orderBy('id','desc')->where('gasstationName', auth()->user()->name)->where('fine', 'Yes')->paginate(5);

            return view('fine')->with('fine', $fine);
        

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

    public function issueFine(Request $request){
    
    
            $query = DB::table('reports')
                            ->where('id', $request->input('issue') )
                            ->update([
                                'fine' => 'Yes', 
                                ]);

        if ( !$query ) { 
          return redirect('/getreports')->with('error', 'Report has not been issued'); 

        }
        return redirect('/getreports')->with('success', 'Report has not been issued'); 


    }
    public function objectFine(Request $request)
    {
    
    
            $query = DB::table('reports')
                            ->where('id', $request->input('issue') )
                            ->update([
                                'object' => 'Yes', 
                                ]);

        if ( !$query ) { 
          return redirect('/fine')->with('error', 'Fine has not been objected'); 

        }
        return redirect('/fine')->with('success', 'Fine has  been objectedd'); 


    }
    
    public function clearFine(Request $request)
    {
    
    
            $query = DB::table('reports')
                            ->where('id', $request->input('clear') )
                            ->update([
                                'clear' => 'Yes', 
                                ]);

        if ( !$query ) { 
          return redirect('/getreports')->with('error', 'Fine has not been cleared'); 

        }
        return redirect('/getreports')->with('success', 'Fine has  been cleared'); 


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
