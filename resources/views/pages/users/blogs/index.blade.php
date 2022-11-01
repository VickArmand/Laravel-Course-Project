@extends('layouts.default')
@section('bodytype')
<!-- body -->
<body class="main-layout inner_header blog_page"> {{-- <div class="loader_bg">
    <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
 </div> --}}
 <!-- header -->

@section('content')
<div class="card">
@if (count($posts) > 0)
<div class="row">
@foreach($posts as $post) 
<img class="thumbnail" style="height:100px;width:100px;" src="{{ asset($post->imagepath) }}" alt="">

<div class="col md-7">
    <div class="card-block py-3">
<h2 class="card-title">{{ $post->title }}</h2>
<p class="card-text">{{ $post->body }}</p>
Created by {{ $post->user_id }} At {{ $post->created_at}}
</div>
</div>  
@endforeach
</div>
@endif
</div>
@endsection
@endsection