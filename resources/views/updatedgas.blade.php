@extends('layouts.app')
@section('content')
<a href="{{ URL::previous() }}"> <button type="button"  class="btn btn-success" >Back</button> </a>

<section class="step2 cid-rGZ1ABrVVX" id="step2-u">

    
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



<section class="section-table cid-rGZ1LIKJcE" id="table1-z">

  
  
        <div class="container container-table">
            <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
                List of GSA confirmed the new price
            </h2>
    
      
              <div class="container scroll">
                <table class="table isSearch" cellspacing="0">
                  <thead>
                    <tr class="table-heads ">
                        
                        
                        
                        
                    <th class="head-item mbr-fonts-style display-7">
                            GasStations Name</th><th class="head-item mbr-fonts-style display-7">
                                    Confirmed</th><th class="head-item mbr-fonts-style display-7">
                                            At</th><th class="head-item mbr-fonts-style display-7">
                
                  </thead>
      
                  <tbody>
                    
                    
                    
                    
                  <tr> 
                        @if(count($listupdated) >= 1  )
                    @foreach ($listupdated as $updated)
                    @if((int)$lastdata->id ==  (int)$updated->priceId )
                      
                    <td class="body-item mbr-fonts-style display-7">{{$updated->stationName}}</td><td class="body-item mbr-fonts-style display-7">{{$updated->isConfirm}}</td><td class="body-item mbr-fonts-style display-7">{{$updated->updated_at}}</td></tr><tr>
                      @endif
                        @endforeach
                        {{$listupdated->links()}}
                        @else
                        <p>no GasStations  </p>
                
                        @endif
                        
                             
                      
    </tbody>
                </table>
              </div>
      
              </div>
            </div>
          </div>
      </section>
      
          



@endsection