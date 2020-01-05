@extends('layouts.app')
@section('content')

 

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
                  
                @if(count($postsGasoline) > 0)
                @foreach ($postsGasoline as $SendGasolinePrice)
                  
                  
                <td class="body-item mbr-fonts-style display-7">{{$SendGasolinePrice->updated_at}}</td><td class="body-item mbr-fonts-style display-7">{{$SendGasolinePrice->premiumOctane}}</td><td class="body-item mbr-fonts-style display-7">{{$SendGasolinePrice->normalOctane}}</td><td class="body-item mbr-fonts-style display-7">{{$SendGasolinePrice->diesel}}</td></tr><tr>
                  
                    @endforeach
                    {{$postsGasoline->links()}}

                    @else
                    <th>
                        No Prices ..
                    </th>
                    @endif
                    

                  
</tbody>
            </table>
          </div>
  
          </div>
        </div>
      </div>
  </section>
@endsection