@extends('layouts.app')
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
    <hr>
    <hr>
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
