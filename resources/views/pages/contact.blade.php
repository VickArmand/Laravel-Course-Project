@extends('layouts.default')
@section('bodytype')

   <!-- body -->
   <body class="main-layout inner_header contact_page"> {{-- <div class="loader_bg">
         <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
      </div> --}}
      <!-- header -->
     
      <!-- end header inner -->
      <!-- end header -->
      @endsection
      @section('content')
     <div class="yellow_darkbg">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                  <h2>Contact Us</h2>
                 </div>
              </div>
           </div>
        </div>
     </div>

      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus1" placeholder="Message" type="type" Message="Name">
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map">
                     <figure><img src="{{ asset('assets/images/map_img.png') }}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      @endsection