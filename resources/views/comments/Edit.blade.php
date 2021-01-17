@extends('layouts.app')
@section('content')
<div class="container">
<nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/">IIUM Student</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/aboutus">About Us</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/products">Sports Equipment List</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/students">List to Rent</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/calculate/form">Payment</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Review and Forum</a>
        </li>
    </nav>
    
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
        <h2>Edit Your Comments Here</h2>
    </div>

    <div class="pull-right">
    </div>
    </div>
    </div>

@if ($errors->any())
 <div class="alert alert-danger">
 <strong>ERROR !</strong>There were some problems with your input.<br><br>
 <ul>
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
 </ul>
</div>
@endif

<form action="{{route('comments.update',$comment->id)}}" method="post">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Matric No:</strong>
<input type="text" name="matricno" value="{{$comment->matricno}}" class="form-control" placeholder="matricno">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>StudentName:</strong>
<input type="text" name="studname" value="{{$comment->studname}}" class="form-control" placeholder="studname">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Comments and Reviews:</strong>
<input type="text" name="studcomments" value="{{$comment->studcomments}}" class="form-control" placeholder="studcomments">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <a class="btn btn-primary" href="{{route('comments.index')}}">Back</a>
    <button type="submit" class="btn btn-primary">Update Comments</button>
</div>
</div>
</form>
@endsection
