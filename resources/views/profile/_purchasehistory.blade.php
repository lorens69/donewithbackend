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
    <div class="container profileinfo"  style="min-height:62vh">

        <div class="d-flex btn-group btn-group-lg bd-highlight" role="group" aria-label="Basic example">
            <button type="button" class="btn forbutton" onclick="window.location.href='{{route('mydetails')}}'">PROFILE</button>
            <button type="button" class="btn forbutton" onclick="window.location.href='{{route('showuserreservations')}}'">BOOKING REQUESTS</button>
            <button type="button" class="btn forbutton active">ORDERS AND PURCHASES</button>
        </div>




        <div class="container phistory">
            <div class="container-fluid phistory1">
                <div class="row row-cols-12 phistory2">
                    <div style="margin:20px;font-size:20px">Total: ₱ {{$orderstotal}} </div>
                    </div>
                </div>
                @if(count($orders) > 0)
                @foreach ( $orders as $order)
                @csrf
                <div style="margin:20px" class="row row-cols-12 phistory3">
                    <div  style="margin:10px" class="row mt-10">
                        <div class="d-flex col-md-4">
                            <div class="col-md-6 align-self-center text-center">
                                <img src="{{asset('upload/'.$order->image)}}" alt="" style="width:50px; height:50px;">
                            </div>
                            <div class="col-md-6 align-self-center ">
                                <div class="col-md-12 fw-bold">PRODUCT NAME: {{$order->name}}</div>
                                <div class="col-md-12 fw-bold">MOP: COD</div>
                                <div class="col-md-12 fw-bold">Price: {{$order->price}}</div>
                                <div class="col-md-12 fw-bold">DATE: {{$order->created_at}}</div>
                                <div>{{$order->status}}</div>
                            </div>

                        </div>
                        <div class="col-md-4 align-self-center text-center fw-bold">Description: {{$order->description}}</div>

                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="text-center mt-5">
            <p style="font-size: 18px; font-weight: bold;">No orders yet.</p>
        </div>
    @endif
</div>

            </div>
        </div>


    </div>

</body>

@include('partials._footer')

</html>

@endsection
