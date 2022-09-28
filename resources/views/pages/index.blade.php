@extends('layouts.default')
@section('content')

   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
         {{-- <div class="loader_bg">
            <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
         </div> --}}
      <!-- end loader -->
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
                              <li class="nav-item active">
                                 <a class="nav-link" href="/">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('home.about') }}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{route('home.services')}}">Services</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{route('home.blogs')}}">Blog</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{route('home.contact')}}">Contact Us</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
               <li data-target="#banner1" data-slide-to="3"></li>
               <li data-target="#banner1" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Strategy And <br>Research</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="{{ asset('assets/images/pct.png') }}" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Strategy And <br>Research</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="{{ asset('assets/images/pct.png') }}" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Strategy And <br>Research</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="{{ asset('assets/images/pct.png') }}" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Strategy And <br>Research</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="{{ asset('assets/images/pct.png') }}" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Strategy And <br>Research</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="{{ asset('assets/images/pct.png') }}" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- team -->
      <div class="team">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="team_img">
                     <figure><img src="{{ asset('assets/images/sco.png') }}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="titlepage">
                     <h2>We Are A Dynamic Team Of Seo Agency</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod enim tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                     <h3>PROJECTS COMPLETED</h3>
                     <strong>1165 <span class="yellow">+</span></strong>
                     <a class="read_more" href="#"> Read More</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- team -->
         <!-- services -->
         <div  class="services">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="titlepage">
                        <h2>Build Your Website, Let's Check Our Services</h2>
                        <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div id="serv_hover"  class="services_box">
                        <i><img src="{{ asset('assets/images/service1.png') }}" alt="#"/></i>
                        <h3>Web Design</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="{{ asset('assets/images/service2.png') }}" alt="#"/></i>
                        <h3>Data Analysis</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="{{ asset('assets/images/service3.png') }}" alt="#"/></i>
                        <h3>Marketing Analysis</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end services -->
         <!-- New Ideas  section -->
         <div class="ideas">
            <div class="container">
               <div class="row">
                  <div class="col-md-10">
                     <div class="titlepage">
                        <h2> New Ideas & Bold Moves</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                     </div>
                  </div>
               </div>
               <div class="border_trbl">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>80%</h3>
                           <p>Email Marketing</p>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>70%</h3>
                           <p>Online Marketing</p>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>60%</h3>
                           <p>Enterprise Marketing</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end New Ideas  section -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                     <p>labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 ">
                  <div class="test_box margin_bottom">
                     <p>psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                     <div class="test_icon">
                        <i><img src="{{ asset('assets/images/cos.png') }}" alt="#"/></i>
                        <h4>Joans Mark <br> <span class="yellow">Call</span></h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="test_box">
                     <p>psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                     <div class="test_icon">
                        <i><img src="{{ asset('assets/images/cos.png') }}" alt="#"/></i>
                        <h4>Joans Mark <br> <span class="yellow">Call</span></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request A Call Back</h2>
                  </div>
               </div>
            </div>
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