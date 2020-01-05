@extends('layouts.app')
@section('content')


<div class="jumbotron text-center">
        <h1>Send New Prices to GasStations</h1>
        {!! Form::open(['action' => 'SendGasolineController@store', 'method' => 'POST']) !!}
            <div class="form-group">
            
                {{Form::label('premiumOctane', 'PremiumOctane')}}
                <input id="premp" class="form-control"  name="premiumOctane" type="text" value="">

                {{Form::label('normalOctane', 'NormalOctane')}}
                <input id="nomlp" class="form-control"  name="normalOctane" type="text" value="">

                {{Form::label('diesel', 'Diesel')}}
                <input id="diselp" class="form-control"  name="diesel" type="text" value="">

                <br>
                {{-- <p> <button type="button" class="btn btn-success">Update Prices!</button> </p> --}}
               <p> {{Form::submit('Update Prices!', ['class' => 'btn btn-primary'])}} </p>
            </div>
    {!! Form::close() !!}
        
</div>
 
<script>
 
 function httpGet(){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", "https://api.oilpriceapi.com/v1/prices/latest", false ); // false for synchronous request
    xmlHttp.setRequestHeader("Authorization","Token bf03f977bc96df6b12a96c934b108bb1");
    xmlHttp.setRequestHeader("Content-Type","application/json");
    xmlHttp.send(null);
    var obj = JSON.parse(xmlHttp.responseText);

    var prem = (obj.data.price*3.75)/108;
    var noml = (obj.data.price*3.75)/159;
    var des = (obj.data.price*3.75)/497;
    document.getElementById("premp").value  = prem.toFixed(2);
    document.getElementById("nomlp").value  = noml.toFixed(2);

     document.getElementById("diselp").value  = des.toFixed(2);

    }
    window.addEventListener("load", httpGet);
    

</script>


@endsection