@extends('layouts.app')
@section('content')
<hr>
<hr>
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
    <hr>
    
<div class="pull-left">
    </div>

    <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-right">
    </div>
    </div>
    </div>
@if ($message=Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered">
<tr>
    <th>id</th>
    <th>Matric No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mahallah</th>
    <th>No. Phone</th>
    <th>Equipment</th>
    <th>Code Equipment</th>
    <th>Rental Price</th>
    <th width="280px">Action</th>
</tr>
@foreach($students as $student)
<tr>
    <td>{{++$i}}</td>
    <td>{{$student->matricno}}</td>
    <td>{{$student->studname}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->address}}</td> 
    <td>{{$student->nophone}}</td> 
    <td>{{$student->equipment}}</td>
    <td>{{$student->codeequipment}}</td>
    <td>{{$student->rentalprice}}</td>
    <td>
    <form action="{{route('students.destroy',$student->id)}}" method="post">
        <a class="btn btn-info" href="/calculate/form">Rental</a>
        <a class="btn btn-primary" href="{{route('students.edit',$student->id)}}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
</tr>
@endforeach
</table>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<a class="btn btn-primary" href="{{route('students.create')}}">Create Your New Equipment</a>
</div>      