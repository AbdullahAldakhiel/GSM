@extends('layouts.app')

@section('content')
<br>
<br>
<section class="step2 cid-rGZ1ABrVVX" id="step2-u">

    
<section class="services5 cid-rGZ1v1dNHR" id="services5-s">

        <!--Container-->
        <div class="container">
            <div class="row">
                <!--Titles-->
                <div class="title pb-5 col-12">
                    <h2 class="align-left mbr-fonts-style m-0 display-1">
                        Fines
                    </h2>
                    
                </div>
                @if(count($fine) >= 1)
                @foreach($fine as $re)
    
    <div class="container">
        <div class="row">
            <div class="card px-3 col-12">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="top-line pb-3">
                            <h4 class="card-title mbr-fonts-style display-5">
                                GasStations name: {{$re->gasstationName}}
                            </h4>
                            @if($re->object != 'Yes')
                            {!! Form::open(['action' => 'ReportController@objectFine', 'method' => 'POST']) !!}
                                    {{ Form::hidden('issue', $re->id) }}
                            
                                <input  id="issue" name="issue" type="text"  value="{{$re->id}}" hidden>
                            
                            
                          {{Form::submit('Object fine', ['class' => 'btn btn-primary'])}} 
                          
                            {!! Form::close() !!}
                        @elseif($re->clear == 'Yes')
                        <div class=" btn-primary" style="background-color:gray"> Fine cleared</div>

                        @else
                        <div class=" btn-primary" style="background-color:gray"> Fine under proccess</div>
                        @endif
                    </div>

                        <div class="bottom-line">
                            <p class="mbr-text mbr-fonts-style m-0 b-descr display-7" style="font-size: 20px">
                              Comment:   {{$re->comment}}
                            </p>
                        </div>
                        {!! Form::open(['action' => 'ReportController@issueFine', 'method' => 'POST']) !!}
   
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
    {{$fine->links()}}
    @else
    <p>No Reports</p>
    
    @endif
    </section>
    
    
    
@endsection
