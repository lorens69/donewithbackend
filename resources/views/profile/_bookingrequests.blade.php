@extends('layouts.layout')
@section('title', 'Booking Requests')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="Css/style.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Log In</title>

</head>
<body>
    @include('partials._header')
    <div class="container profileinfo">

        <div class="d-flex btn-group btn-group-lg bd-highlight" role="group" aria-label="Basic example">
            <button type="button" class="btn forbutton" onclick="window.location.href='{{route('mydetails')}}'">PROFILE</button>
            <button type="button" class="btn forbutton active">BOOKING REQUESTS</button>
            <button type="button" class="btn forbutton" onclick="window.location.href='{{route('myOrders')}}'">ORDERS AND PURCHASES</button>
        </div>


        <div class="container brequest">
            <div class="container-fluid brequest1">
                @foreach($reservations as $reservation)
                <div class="container-fluid brequest2">
                    <div class="row row-cols-2">
                      <div class="col d-flex justify-content-start text-center ps-4 mt-4"><span style="font-size: 16px; font-weight:bold;">SERVICE NAME: {{$reservation->service_name}}</span></div>
                      <div class="col d-flex justify-content-start text-center ps-4 mt-4"><span style="font-size: 16px; font-weight:bold;">Special Instructions: {{$reservation->instructions}}</span></div>
                      <div class="col d-flex justify-content-end text-center pe-5 mt-4"><button type="button" class="btn btn-md btn-primary btnrequest1" disabled>{{ $reservation->status }}</button></div>
                      <div class="col d-flex justify-content-start text-end ps-4 my-2 fw-bold"><span style="font-size: 14px;">DATE AND TIME: {{$reservation->created_at}}</span></div>
                      <div class="col d-flex justify-content-end text-center pe-5 my-2 mb-4 "><button type="button" class="btn btn-md btn-warning btnrequest2">Cancel</button></div>
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
