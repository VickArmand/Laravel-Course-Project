@extends('layouts.default')
@section('bodytype')

   <!-- body -->
   <body class="main-layout inner_header blog_page"> {{-- <div class="loader_bg">
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
                     <h2>Our Blog</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog -->
      <div class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="blog_box">
                     <figure><img src="{{ asset('assets/images/Blog_img1.png') }}" alt="#"/></figure>
                     <h3>Seo marking</h3>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <figure><img src="{{ asset('assets/images/Blog_img2.png') }}" alt="#"/></figure>
                     <h3>Seo marking</h3>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <figure><img src="{{ asset('assets/images/Blog_img3.png') }}" alt="#"/></figure>
                     <h3>Seo marking</h3>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog -->
      @endsection