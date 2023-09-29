@extends('layouts.layout')
@section('title', 'Purchase History')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="Css/style.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Purchase History</title>

</head>
<body>
    @include('partials._header')
    <div class="container profileinfo">

        <div class="d-flex btn-group btn-group-lg bd-highlight" role="group" aria-label="Basic example">
            <button type="button" class="btn forbutton" onclick="window.location.href='{{route('mydetails')}}'">PROFILE</button>
            <button type="button" class="btn forbutton" onclick="window.location.href='{{route('showuserreservations')}}'">BOOKING REQUESTS</button>
            <button type="button" class="btn forbutton active">ORDERS AND PURCHASES</button>
        </div>




        <div class="container phistory">
            <div class="container-fluid phistory1">
                <div class="row row-cols-12 phistory2">
                    <div class="col d-flex justify-content-end text-center pe-5 py-2 fw-bold" style="justify-content:left">Date: </div>
                    <div class="col-md-4 align-self-center text-center fw-bold">Total: ₱ {{$orderstotal}} </div>
                     <div class="col d-flex justify-content-end text-center pe-5 py-2 fw-bold">Order No: <span class="mx-2" style="font-size: 16px; font-weight:bold; color:orangered"> -- </span>
                        <span class="text-sm sm:hidden 2sm:hidden 3sm:hidden pe-2"> | </span>
                        Status: <span class="mx-2" style="font-size: 16px; font-weight:bold; color:orangered"> -- </span>
                    </div>
                </div>
                @foreach ( $orders as $order)
                @csrf
                <div class="row row-cols-12 phistory3">
                    <div class="row mt-10">
                        <div class="d-flex col-md-4">
                            <div class="col-md-6 align-self-center text-center">
                                <img src="{{asset('upload/'.$order->image)}}" alt="" style="width:50px; height:50px;">
                            </div>
                            <div class="col-md-6 align-self-center ">
                                <div class="col-md-12 fw-bold">PRODUCT NAME: {{$order->name}}</div>
                                <div class="col-md-12 fw-bold">MOP: COD</div>
                                <div class="col-md-12 fw-bold">Price: {{$order->price}}</div>
                                <div class="col-md-12 fw-bold">DATE: {{$order->created_at}}</div>

                            </div>
                        </div>
                        <div class="col-md-4 align-self-center text-center fw-bold">Description: askdjaskjd kasjdkas jkasjdkasjd aksjd kajasd</div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>


    </div>

</body>

</html>

@include('partials._footer')
@endsection
