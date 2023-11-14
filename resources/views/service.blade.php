@extends('layouts.layout')

@section('title', 'Services')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/style.css">
</head>

<style>
    .textStyle {
        font-size: 34px;
        font-weight: 600;
    }
    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
        text-decoration: none;
        border: 1px solid #ddd;
        color: #333;
        border-radius: 3px;
        background-color: #FFE6C7; /* Add the background color for pagination items */
    }
    .pagination .page-item{
        margin: 0px 5px;
    }
    .pagination .page-item:not(.active) .page-link{
    border: none;
    }
    
    .pagination > .active > a,
    .pagination > .active > span {
        color: black;
        border-color: #FF6000;
    }
    .page-link.active, .active > .page-link {
        background-color: #FFE6C7; /* Add the background color for pagination items */
        color: black;
    }
    
    /* Hide the "Next" and "Previous" links */
    .pagination .disabled,
    .pagination .page-link[rel="next"],
    .pagination .page-link[rel="prev"] {
        display: none;
    }
    .btnStyle{
        width:150px;
        background-color: #FF6000;
    }
    .btnStyle:hover{
        color:white;
        background-color: #FFA559;
        border-color: #FF6000;
    }
    .cardStyle{
        width: 210px;
        height: auto;
        background-color: white;
        border-radius: 10px;
        border-style: solid;
        border-color: black;
        border-width: 2px;
    
    }
    .cardtitle{
        font-size: 13px;
        font-weight: 600;
        margin: 2px;
        padding-left: 14px;
        padding-right: 5px;
        padding-bottom: 5px;
    
    }
    .buttonText{
        font-size: 13px;
        width: 180px;
        padding: 8px;
    }
    
    </style>
<body>
    @include('partials._header')



<div class="container-fluid mt-5" style="width:80vw;min-height:53vh;">
    <h1 class="text-start text-uppercase" name="title">Car Services</h1>
    <label for="title" style="width: 120px;border-bottom: solid 3px #FFA559;"></label>

    <div class="container-fluid w-100 d-flex justify-content-end mt-2">
        <input type="text" class="w-25" style="border:1px solid #FF6000">
        <button class="btn btn-sm text-uppercase text-white" style="background-color:#FF6000;padding:10px;width: 20%;border-radius: 0;">Search Service</button>
    </div>

    <div class="service-card d-flex  mt-5 justify-content-evenly flex-wrap  w-100 row">
        @foreach($services as $service)
        <div class="card col-lg-3 m-4 p-0">
            <div class="card-body d-flex justify-content-center align-items-center  flex-column pt-0 ps-0 pe-0 ">
                <img src="{{asset('upload/'.$service->image)}}" width="100%" height="100%"  alt="NO PICTURE YET" style="display: inline-block;max-width: fit-content;">
                <br>
                <h5 class="card-title ">{{ $service['name'] }}</h5>
                <p class="card-text">Price: Php {{ number_format($service['price']) }}</p>

                <button class="btn w-75 text-white p-3 fw-bold m-2" style="background-color: #FF6000;" onclick="window.location.href='{{route('requestform')}}'">BOOK APPOINTMENT</button>
            </div>
           
            
                <div class="row d-flex align-items-center md-4 gap-0" style="padding-right:37px;s">
                    <div class="form-group col-md-8 pe-0">
                      <input id="exampleFormControlInput5" type="email" placeholder="search service" class="form-control form-control-underlined">
                    </div>
                    <div class="form-group col-md-4 pe-0">
                      <button type="submit" class="btn btnStyle rounded-pill btn-block shadow-sm">Search</button>
                    </div>
                </div>
                {{-- <input type="text" class="w-15" style="border:1px solid #FF6000">
                <button class="btn btn-sm text-uppercase text-white text-base" style="background-color:#FF6000;padding:10px;width: 100px;border-radius: 0;">Search Service</button> --}}
        
        </div>
            @endforeach
        </div>
        <div class="d-flex align-items-center ">
            <span style="display: inline-block; border-bottom:2px solid #FFA559;width:85%"> </span>
        <div class="d-inline-flex justify-content-end mt-4">
            {{ $services->links() }}
        </div>
        </div>
        
    </div> <br><br>
    @include('partials._footer')
    @endsection
    
</body>
</html>
