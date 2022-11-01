@extends('layouts.default')
@section('bodytype')

   <!-- body -->
   <body class="main-layout inner_header service_page"> {{-- <div class="loader_bg">
         <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
      </div> --}}
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
                  <h2>Welcome Back {{ Auth::user()->name }}</h2>
                 </div>
              </div>
           </div>
        </div>
     </div>

         <!-- services -->
         <div  class="services">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div id="serv_hover"  class="services_box">
                        {{-- <i><img src="{{ asset('assets/images/service1.png') }}" alt="#"/></i> --}}
                        <h2>12</h2>
                        <h3>Total Blogs</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div id="serv_hover" class="services_box">
                        {{-- <i><img src="{{ asset('assets/images/service2.png') }}" alt="#"/></i> --}}
                        <h2>4</h2>
                        <h3>Your Blogs</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  {{-- <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="{{ asset('assets/images/service3.png') }}" alt="#"/></i>
                        <h3>Marketing Analysis</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div> --}}
               </div>
            </div>
         </div>
         <!-- end services -->
         @endsection