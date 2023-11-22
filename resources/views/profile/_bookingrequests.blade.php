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

        <div class="d-flex flex-column flex-sm-row btn-group btn-group-lg bd-highlight" role="group" aria-label="Basic example">
            <button type="button" class="btn forbutton mb-2 mb-sm-0 me-sm-2" onclick="window.location.href='{{route('mydetails')}}'">PROFILE</button>
            <button type="button" class="btn forbutton active mb-2 mb-sm-0 me-sm-2">BOOKING REQUESTS</button>
            <button type="button" class="btn forbutton mb-2 mb-sm-0" onclick="window.location.href='{{route('myOrders')}}'">ORDERS AND PURCHASES</button>
        </div>


        <div class="container brequest">

            <div class="container-fluid brequest1" style="padding:20px">
                @if(count($reservations) > 0)
                @foreach($reservations as $reservation)  
                    <div class="container-fluid request2 d-flex flex-row justify-content-between" >
                        <div class="d-flex flex-column justify-content-center ">
                            <div class="d-flex" style="font-size: 16px; font-weight:bold;">SERVICE NAME: {{$reservation->service_name}}</div>
                            <div class="d-flex" style="font-size: 16px; font-weight:bold;">Special Instructions: {{$reservation->special_instructions}}</div>
                            <div class="d-flex" style="font-size: 14px;">DATE AND TIME: {{$reservation->created_at}}</div>

                        </div>

                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-end text-center pe-5 mt-4"><button type="button" class="btn btn-md btn-primary btnrequest1" disabled>{{ $reservation->status }}</button></div>
                            <div class="d-flex justify-content-end text-center pe-5 my-2 mb-4 ">
                                @if($reservation->status === 'pending')
                                        <form actionq="{{ route('showuserreservations.cancel', $reservation->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-md btn-warning btnrequest2">Cancel Booking</button>
                                        </form>
                                        @elseif($reservation->status === 'accepted')
                                            <p>Booking has been accepted. Cancellation not allowed.</p>
                                    @endif
                            </div>
                        </div>

                    </div>

                    </div>
            </div>
                @endforeach
                @else
                    <div class="text-center mt-5">
                        <p style="font-size: 18px; font-weight: bold;">No reservations or booking requests yet.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @include('sweetalert::alert')

</body>

</html>

@include('partials._footer')
@endsection
