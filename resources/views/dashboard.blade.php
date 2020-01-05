@extends('layouts.app')

@section('content')
<br>
<br>
<section class="step2 cid-rGZ1ABrVVX" id="step2-u">

        @if(session('success'))
        <div class="alert alert-success" >
                <script >

            function alert(){
                swal("{{session('success')}}", ":)", "success");

            }
            alert();
            console.log("fdrf");

</script>
            {{session('success')}}
        </div>
@endif


@if(session('error'))
        <div class="alert alert-danger">
            
            {{session('error')}}
        </div>
@endif

    
    
    <div class="container">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style align-center display-2">
            Prices
        </h2>
     
        <div class="step-container row justify-content-center">
            <div class="card col-12 col-md-4 separline">
                <div class="step-element">
                    <div class="step-wrapper pb-3">
                        <h3 class="step d-flex align-items-center justify-content-center m-auto">
                            95
                        </h3>
                    </div>          
                        <div class="step-text-content align-center">
                            <h4 class="mbr-step-title pb-3 mbr-fonts-style display-5"> {{$lastdata->premiumOctane}} SAR</h4>     
                        </div>
                     </div>
            </div>

            <div class="card col-12 separline col-md-4">
                <div class="step-element">
                    <div class="step-wrapper pb-3">
                        <h3 class="step d-flex align-items-center justify-content-center m-auto">
                            91
                        </h3>
                    </div>          
                    <div class="step-text-content align-center">
                        <h4 class="mbr-step-title pb-3 mbr-fonts-style display-5">{{$lastdata->normalOctane}} SAR</h4>
                        
                    </div>
                </div>
            </div>

            <div class="card col-md-4 col-12 separline last-child">
                <div class="step-element">
                    <div class="step-wrapper pb-3">
                        <h3 class="step d-flex align-items-center justify-content-center m-auto">
                            D
                        </h3>
                    </div>          
                    <div class="step-text-content align-center">
                        <h4 class="mbr-step-title pb-3 mbr-fonts-style display-5">{{$lastdata->diesel}} SAR
                        </h4>
                    </div>
                </div>
            </div>

            
            
            
            
            
            
            
            
            
            
            
        </div>
    </div>
</section>


<section class="services5 cid-rGZ1v1dNHR" id="services5-s">
    <!---->
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" >
                <!---Formbuilder Form--->
              
        
                            <div class="jumbotron text-center">
                                
        <div class="card-header">Dashboard</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if(Auth::user()->type == "Admin")
            Welcome To Your Page!!!!!
 {{-- Send message --}}
 <div class="form-group">
        {!! Form::open(['action' => 'BroadCastController@sendBC', 'method' => 'POST']) !!}
        Send new Broadcast
        <br>
        <p> Select gas station </p>
        {{ Form::select('gasName', $instructorOptions, null, ['class'=>'form-control']) }}

        <br>
        <textarea   id="message" class="form-control"  name="message" type="text" value=""></textarea>

        {{Form::submit('Send!', ['class' => 'btn btn-primary'])}} 
        {!! Form::close() !!}
        
        </h4>

</div>
                  </div>
                  <div class="card">
                        <h5 class="card-header">Global Oil Price</h5>
                        <div class="card-body">
                      <h5>Global oil barrel price : </h5><p id="oilprice"></p>
                      <h5>Last update : </h5> <p id="oildate"></p>
                      <hr>
                      

                        </div>
        </div>
                            </div>
            </div>
        </div>
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    
    <div class="container">
        <div class="row">
       
            <!--Card-1-->
            <div class="card px-3 col-12">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="top-line pb-3">
                            <h4 class="card-title mbr-fonts-style display-5">
                                Calculate The new prices 
                            </h4>
                            <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                                     <a href="/create"> <button type="button"  class="btn btn-warning-outline display-4" >Calculate the price</button> </a>

                            </p>
                        </div>
                    
                    </div>
                </div>
            </div>
            <!--Card-2-->
            <div class="card px-3 col-12">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="top-line pb-3">
                            <h4 class="card-title mbr-fonts-style display-5">
                                See the GSA updates
                            </h4>
                            <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                <a href="/updatedgas"> <button type="button"  class="btn btn-warning-outline display-4" >Updated prices (From GSA)</button> </a>
                            </p>
                        </div>
               
                    </div>
                </div>
            </div>
            <!--Card-3-->
            <div class="card px-3 col-12">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="top-line pb-3">
                            <h4 class="card-title mbr-fonts-style display-5">
                                See the report
                            </h4>
                            <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                <a href="/getreports"> <button type="button"  class="btn btn-warning-outline display-4" >Show reports</button> </a>

                            </p>
                        </div>
                 
                    </div>
                </div>
            </div>

            <!--Card-7-->
            
            <!--Card-8-->
            
            <!--Card-9-->
            
            <!--Card-10-->
            
            <!--Card-11-->
            
            <!--Card-12-->
            
        </div>
    </div>
</section>


<section class="section-table cid-rGZ1LIKJcE" id="table1-z">

  
  
    <div class="container container-table">
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
            List of last prices
        </h2>

  
          <div class="container scroll">
            <table class="table isSearch" cellspacing="0">
              <thead>
                <tr class="table-heads ">
                    
                    
                    
                    
                <th class="head-item mbr-fonts-style display-7">
                        DATE</th><th class="head-item mbr-fonts-style display-7">
                        95</th><th class="head-item mbr-fonts-style display-7">
                        91</th><th class="head-item mbr-fonts-style display-7">
                        D</th></tr>
              </thead>
  
              <tbody>
                
                
                
                
              <tr> 
                  
                @if(count($SendGasolinePrices) > 0)
                @foreach ($SendGasolinePrices as $SendGasolinePrice)
                  
                  
                <td class="body-item mbr-fonts-style display-7">{{$SendGasolinePrice->updated_at}}</td><td class="body-item mbr-fonts-style display-7">{{$SendGasolinePrice->premiumOctane}}</td><td class="body-item mbr-fonts-style display-7">{{$SendGasolinePrice->normalOctane}}</td><td class="body-item mbr-fonts-style display-7">{{$SendGasolinePrice->diesel}}</td></tr><tr>
                  
                    @endforeach
                    @else
                    <th>
                        No Prices ..
                    </th>
                    @endif
                    @else 
                              
                    Hello {{Auth::user()->name }}
                    <hr>
                    -BroadCast-
                    <br>
                
                    {{$messages->message}}
                    
                    <hr> 
                    -Direct message from Adminstrator-
                    <br>
                    @if(count($dmMessages) > 0)
                    {{$dmMessages->message}}
                    @endif
                    
                    <hr> 
                                                    <a href="/fine"> <button type="button"  class="btn btn-warning-outline display-4" >View Fines </button> </a>
                    
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Updated at:    </th>
                            <th> {{$SendGasolinePrices->last()->updated_at}}</th>
                            </tr>
                    <hr>
                    </thead>
                    <tbody>
                    <tr>
                            <th>New Price</th>
                            <th>{{$lastdata->premiumOctane}}</th>
                            <th>{{$lastdata->normalOctane}}</th>
                            <th>{{$lastdata->diesel}}</th>
                  </tr>
                  <tr>
                        <th>Current Price</th>
                        <th> {{$currentGasReturn->premiumOctane}}</th>
                        <th>  {{$currentGasReturn->normalOctane}}</th>
                        <th> {{$currentGasReturn->diesel}}</th>
</tr>
</tbody>
           
                    </table>
                            {!! Form::open(['action' => 'ConfirmationController@store', 'method' => 'POST']) !!}
      <div class="form-group">
      
          
         <p> {{Form::submit('Update Prices!', ['class' => 'btn btn-primary'])}} </p>
      </div>
{!! Form::close() !!}
                    @endif
                  
</tbody>
            </table>
          </div>
  
          </div>
        </div>
      </div>
  </section>
  
      
<script>
 
 function httpGet(){
    var xmlHttp = new XMLHttpRequest();
    
    xmlHttp.open( "GET", "https://api.oilpriceapi.com/v1/prices/latest", false ); // false for synchronous request
    xmlHttp.setRequestHeader("Authorization","Token bf03f977bc96df6b12a96c934b108bb1");
    xmlHttp.setRequestHeader("Content-Type","application/json");
    xmlHttp.send(null);
     var obj = JSON.parse(xmlHttp.responseText);

     oilcreated = obj.data.created_at;
     oildate = oilcreated.substring(0, 9);
     oiltime = oilcreated.substring(11, 19);
    document.getElementById("oilprice").innerHTML  = (obj.data.price*3.75).toFixed(2);
         document.getElementById("oildate").innerHTML  = oildate + " "+ oiltime;

    }
    window.addEventListener("load", httpGet);



</script>
@endsection
