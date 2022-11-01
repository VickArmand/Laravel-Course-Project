@extends('layouts.default')
@section('bodytype')
   <!-- body -->
   <body class="main-layout inner_header blog_page">
      <!-- loader  -->
      {{-- <div class="loader_bg">
         <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
      </div> --}}
      <!-- end loader -->
      <!-- header -->
      @endsection
      @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
