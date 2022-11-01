@extends('layouts.default')
@section('bodytype')
   <!-- body -->
   <body class="main-layout inner_header about_page">
      <!-- loader  -->
      {{-- <div class="loader_bg">
         <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
      </div> --}}
      <!-- end loader -->
      <!-- header -->
      @endsection
      @section('content')
      <!-- end header inner -->
      <!-- end header -->
     <div class="yellow_darkbg">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                  <h2>About Us</h2>
                 </div>
              </div>
           </div>
        </div>
     </div>


      <!-- team -->
      <div class="team">
         <div class="container">
            <div class="row d_flex">
              
               <div class="col-md-6">
                  <div class="titlepage">
                      <h3>PROJECTS COMPLETED</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod enim tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                     <a class="read_more" href="#"> Read More</a>
                  </div>
               </div>
                <div class="col-md-5 offset-md-1">
                  <div class="team_img">
                     <figure><img src="{{ asset('assets/images/sco.png') }}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <!-- team -->
@endsection