<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.header')
@yield('header')
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
</head>

@yield('bodytype')   
@include('includes.navbar')
@yield('content')
@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif
@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
@if(session('error'))
<div class="alert alert-danger">{{session('error')}}</div>
@endif
</body>
@include('includes.footer')
</body>
</html>