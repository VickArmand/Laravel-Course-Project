{{-- <div class="loader_bg">
   <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
</div> --}}
<!-- header -->
<header>
   <!-- header inner -->
   <div class="header">
      <div class="container">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
               <div class="full">
                  <div class="center-desk">
                     <div class="logo">
                        <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="#" /></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
               <nav class="navigation navbar navbar-expand-md navbar-dark ">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarsExample04">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                           <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('blog.index')}}">View Posts</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('blog.create')}}">Create Posts</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('home.contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('blog.create')}}">Profile</a>
                        </li>
                        @if(Route::has ('login'))
                        @auth
                        @if(Auth::user()->utype==='ADM')
                        <li class="nav-item dropdown">
                           <button class="nav-link dropdown-toggle"> <li class=""><a href="{{route('login')}}"><i class='fa fa-user'
                          style="font-size:20px"></i>&nbsp;&nbsp;({{ Auth::user()->name }})</a></li></button>
                           <ul class="dropdown-menu dropdown-menu-end">
                           <a href="{{ route('edit.userProfile') }}">Edit Profile</a>
                           <li><a href="{{ route('logout') }}" onclick = "event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class='fa fa-sign-out'></i>Log
                          Out</a></li>
                           <form id= "logout-form" method="POST" action="{{ route('logout') }}">
                           @csrf
                           </form>
                           @else
                           <li class=""><a href="{{route('login')}}">My Account({{ Auth::user()->name
                          }})</a></li>
                           <li><a href="{{ route('logout') }}" onclick = "event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class='fa fa-sign-out'></i>Log
                          Out</a></li>
                           <form id= "logout-form" method="POST" action="{{ route('logout') }}">
                           @csrf
                        </form>
                           @endif
                           </div>
                        </li>
                        @else
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                       </li>
                       <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    <li class="nav-item d_none">
                     <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                  </li>
                    @endif
                    @endif
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   </div>
</div>
</header>