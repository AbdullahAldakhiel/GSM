@extends('layouts.app')
@section('content')
<a href="{{ URL::previous() }}"> <button type="button"  class="btn btn-success" >Back</button> </a>



<section class="services5 cid-rGZ1v1dNHR" id="services5-s">

    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title pb-5 col-12">
                <h2 class="align-left mbr-fonts-style m-0 display-1">
                    Reports
                </h2>
                
            </div>
            @if(count($rep) >= 1)
            @foreach($rep as $re)
            @if($re->clear == 'NULL')

<div class="container">
    <div class="row">
        <div class="card px-3 col-12">
            <div class="card-wrapper media-container-row media-container-row">
                <div class="card-box">
                    <div class="top-line pb-3">
                        <h4 class="card-title mbr-fonts-style display-5">
                            GasStations name: {{$re->gasstationName}}
                        </h4>
                        <p class="mbr-text cost mbr-fonts-style m-0 display-5" style="font-size: 15px">
                            Reporter email : {{$re->geustEmail}}
                        </p>
                    
                    </div>
                    
                    <div class="bottom-line">
                        <p class="mbr-text mbr-fonts-style m-0 b-descr display-7" style="font-size: 20px">
                          Comment:   {{$re->comment}}
                        </p>

                                    </div>
                                    <div class="top-line pb-3">
                                            <h4 class="card-title mbr-fonts-style display-5">
                                                @if($re->fine == 'NULL')
                                              {{-- issue fine --}}
                                     <div class="form-group">
                                            {!! Form::open(['action' => 'ReportController@issueFine', 'method' => 'POST']) !!}
                                            {{ Form::hidden('issue', $re->id) }}
                                             <input  id="issue" name="issue" type="text"  value="{{$re->id}}" hidden>
                                            {{Form::submit('Issue fine', ['class' => 'btn btn-primary'])}} 
                                            {!! Form::close() !!}
                                                @else
                                                Fine issued
                                                @endif
                                            </h4>
                                            <h4 class="card-title mbr-fonts-style display-5">
                                                    {{-- issue fine --}}
                                           <div class="form-group">
                                                  {!! Form::open(['action' => 'ReportController@clearFine', 'method' => 'POST']) !!}
                                                  {{ Form::hidden('issue', $re->id) }}
                                                   <input  id="clear" name="clear" type="text"  value="{{$re->id}}" hidden>
                                                  {{Form::submit('Clear fine', ['class' => 'btn btn-primary'])}} 
                                                  {!! Form::close() !!}
                                                  
                                                  </h4>
                                                 @if($re->object == 'Yes')
                                        </div>
                                                 {{-- issue fine --}}
                                                 <div class="form-group">
                                                   
                                                        
                                                   <p style="color:red"> Fine objected </p>
                                              
                                              </div>
                                              @endif
                                        </div>
                                        

                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
{{$rep->links()}}
@else
<p>No Reports</p>

@endif
</section>


@endsection