@extends('layouts.default')
@section('bodytype')
<!-- body -->
<body class="main-layout inner_header blog_page"> {{-- <div class="loader_bg">
    <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
 </div> --}}
 <!-- header -->
@endsection
@section('content')
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
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
            </table>
         </div>
       </div>
    </div>
 </div>
@endsection