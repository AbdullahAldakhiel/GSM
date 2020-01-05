

    <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

    

      <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <div class="hamburger">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
          </button>
          <div class="menu-logo">
              <div class="navbar-brand">
                  <span class="navbar-logo">
                      <a href="/">
                           <img src="assets/images/gas-3620713-1280-96x96.png" alt="GSM" title="" style="height: 4.9rem;">
                      </a>
                  </span>
                  <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="/">GSM</a></span>
              </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              @guest

              <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                      <a class="nav-link link text-white display-4" href="{{ route('login') }}">
                          <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                          {{ __('Login') }}
                        </a>
                  </li></ul>
          
              @else
              @if(Auth::user()->type == "Admin")

              <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                  <a class="nav-link link text-white display-4" href="{{ route('register') }}">
                      <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                      {{ __('Register a GasStation') }}
                    </a>
              </li></ul>
              @endif
     
                 
              <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                  <a class="nav-link link text-white display-4" href="/dashboard">
                      
                       {{ __('Dashboard') }}
                    </a>
              </li></ul>
              <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                  <a class="nav-link link text-white display-4" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                      
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
              </li></ul>
                             
                                
                            </li>
                         
                            @endguest
      
               </div>

              
          </div>
      </nav>
  </section>


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
<div class="alert alert-success" >
        <script >

    function alert(){
        swal("{{session('error')}}", "..");


    }
    alert();
    console.log("fdrf");

</script>
    {{session('success')}}
</div>
@endif
