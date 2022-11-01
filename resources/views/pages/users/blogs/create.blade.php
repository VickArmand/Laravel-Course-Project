@extends('layouts.default')
@section('bodytype')
<!-- body -->
<body class="main-layout inner_header blog_page"> {{-- <div class="loader_bg">
    <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
 </div> --}}
 <!-- header -->
 @endsection
 @section('content')
  <!--  contact -->
  <div class="yellow_darkbg">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>New Blog</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- blog -->
 <div class="blog">
    <div class="container">
       <div class="row">
        <div class="col-md-6">
            <form id="request" method="post" action="{{ url('blog')}}" class="main_form" enctype="multipart/form-data">
               @csrf
               <div class="row">
                  <div class="col-md-12 ">
                     <input class="contactus" placeholder="Enter Post Title" type="type" name="title"> 
                     @error('title')
                     <div class="alert-danger">{{$message}}</div> 
                     @enderror
                  </div>

                  <div class="col-md-12">
                     <textarea name="body" placeholder="Enter Post Body" id="" cols="30" rows="10" class="contactus"></textarea>
                     @error('body')
                     <div class="alert-danger">{{$message}}</div> 
                     @enderror
                    </div>
                  
      <script>
        CKEDITOR.replace('body');
    </script>
                  <div class="col-md-12">
                     <input type="file" name="postimage" id="">
                     @if ($errors->first('postimage'))
                     <div class="alert-danger">{{$errors->first('postimage')}}</div> 
                     @endif
                  </div>
                  <div class="col-md-12">
                     <button class="send_btn" type="submit">SUBMIT</button>
                  </div>
                  @include('includes.flashmessages')
               </div>
            </form>
         </div>
       </div>
    </div>
 </div>            
@endsection

