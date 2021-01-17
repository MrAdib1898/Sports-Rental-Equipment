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
        <a class="nav-link" href="/comments">Review and Forum</a>
        </li>
    </nav>
    
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
        <h2>Edit Your Sport Equipment  Details</h2>
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

<form action="{{route('students.update',$student->id)}}" method="post">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Matric No:</strong>
<input type="text" name="matricno" value="{{$student->matricno}}" class="form-control" placeholder="matricno">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>StudentName:</strong>
<input type="text" name="studname" value="{{$student->studname}}" class="form-control" placeholder="studname">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Email:</strong>
<input type="text" name="email" value="{{$student->email}}" class="form-control" placeholder="email">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Mahallah:</strong>
<input type="text" name="address" value="{{$student->address}}" class="form-control" placeholder="address">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>No. Phone:</strong>
<input type="text" name="nophone" value="{{$student->nophone}}" class="form-control" placeholder="nophone">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Equipment:</strong>
<input type="text" name="equipment" value="{{$student->equipment}}" class="form-control" placeholder="equipment">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Code Equipment:</strong>
<input type="text" name="codeequipment" value="{{$student->codeequipment}}" class="form-control" placeholder="codeequipment">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rental price::</strong>
<input type="text" name="rentalprice" value="{{$student->rentalprice}}" class="form-control" placeholder="rentalprice">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection







