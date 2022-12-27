@extends('base')

@include('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container m-3">
        <h1></h1>
        <div class="card col-sm-7 offset-sm-3 border border-light mt-5">
            <div class="card-header">
                <h1 class="text-center">Big Bikes</h1>
            </div>
            <div class="card-body shadow">
            <img class="offset-sm-1" src="images/cover.jpg" alt="cover">
            </div>
        </div>
    </div>

@endsection

<style>
    img {
        width: 90%;
    }
</style>
