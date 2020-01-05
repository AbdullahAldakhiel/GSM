@extends('layouts.app')
@section('content')
]


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
    <script >

            function alert(){
                swal("{{session('success')}}", ":)", "success");
        
            }
            alert();
            console.log("fdrf");
        
        </script>
</div>
@endif

<section class="mbr-section form1 cid-rGHEbzst7r" id="form1-l">

    

        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                        
                        Report a gas station</h2>
         
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column col-lg-8" >
                    <!---Formbuilder Form--->
                  
    @if(count($errors )> 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" style="background-color: red">
            {{$error}}
        </div>
    @endforeach
    @endif
            
                                <div class="jumbotron text-center">
                                        {!! Form::open(['action' => 'ReportController@store', 'method' => 'POST']) !!}
                                            <div class="form-group">
                                                    
                                
                                                    {{ Form::select('gasName', $instructorOptions, null, ['class'=>'form-control']) }}
                                                {{Form::label('gasName', 'Your email')}}
                                                <input type="email"  id="premp" class="form-control" name="geustEmail" type="text" value="">
                                
                                                {{Form::label('comment', 'Comment')}}
                                                <textarea   id="nomlp" class="form-control"  name="comment" type="text" value=""></textarea>
                                
                                
                                                <br>
                                               <p> {{Form::submit('Send Report', ['class' => 'btn btn-primary btn-form display-4'])}} </p>
                                            </div>
                                    {!! Form::close() !!}
                                        
                                </div>
                    
                </div>
            </div>
        </div>
    </section>
    


@endsection