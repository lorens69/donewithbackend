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

    <style>
        .item-container {
            background-color: aliceblue;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        @media (max-width: 768px) {
            .item-container {
                flex-direction: column;
                align-items: center;
                text-align: center;
                height: 350px;
            }
        }
    </style>

</head>
<body>
    @include('partials._header')
    <div class="container profileinfo">

        <div class="d-flex flex-column flex-sm-row btn-group btn-group-lg bd-highlight" role="group" aria-label="Basic example">
            <button type="button" class="btn forbutton mb-2 mb-sm-0 me-sm-2" onclick="window.location.href='{{route('mydetails')}}'">PROFILE</button>
            <button type="button" class="btn forbutton mb-2 mb-sm-0 me-sm-2" onclick="window.location.href='{{route('showuserreservations')}}'">BOOKING REQUESTS</button>
            <button type="button" class="btn forbutton active mb-2 mb-sm-0 me-sm-2">ORDERS AND PURCHASES </button>
        </div>




        <div class="container phistory">
            <div class="container-fluid phistory1">

                @if(count($orders) > 0)
                @foreach ( $orders as $order)
                @csrf
                <div style="margin:20px" class="row phistory3">
                    <div>
                        <i class="bi bi-circle-fill"></i>
                        <span >Tracker (sample: Arrive tomorrow)</span>
                    </div>

                    <div class="item-container d-flex flex-row justify-content-evenly" id="item-container" name="item-container">
                        <div class="">
                            <img src="{{asset('upload/'.$order->image)}}" alt="" style="width:100px; height:100px;">
                        </div>

                        <div class="d-flex align-self-center fw-bold">Product: {{$order->name}}</div>
                        <div class="d-flex align-self-center fw-bold">Price: {{$order->price}}</div>
                        <div class="d-flex align-self-center fw-bold">Qty: {{$order->quantity}}</div>
                        <div class="d-flex align-self-center fw-bold">Item Total: {{$order->price * $order->quantity}}</div>
                        <div class="d-flex align-self-center fw-bold">Date: {{$order->created_at}}</div>
                        <div class="d-flex align-self-center">
                            <button type="button" class="btn btn-block p-2" style="width:150px; color:orangered;background-color:white;border: 1px solid; border-color:orangered;">{{$order->status}}</button>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <div class="text-center mt-5">
                        <p style="font-size: 18px; font-weight: bold;">No orders yet.</p>
                    </div>
                @endif
            </>
        </div>
         </div>
    </div>

</body>

<script>
    function updateContainerClass() {
    var itemContainers = document.querySelectorAll('.item-container');
    var screenWidth = window.innerWidth;

    itemContainers.forEach(function(itemContainer) {
        // Check if the screen width is less than or equal to 768 pixels
        if (screenWidth <= 768) {
            // Remove the original class when the screen size is small
            itemContainer.classList.remove('d-flex', 'flex-row', 'justify-content-evenly');

            // Add a new class or apply styles directly if needed
            itemContainer.classList.add('new-class'); // Replace 'new-class' with your desired class name
        } else {
            // If the screen width is greater than 768 pixels, add back the original class
            itemContainer.classList.remove('new-class'); // Remove the added class
            itemContainer.classList.add('d-flex', 'flex-row', 'justify-content-evenly');
        }
    });
}

// Call the function when the page loads
document.addEventListener('DOMContentLoaded', updateContainerClass);

// Listen for window resize events
window.addEventListener('resize', updateContainerClass);

</script>

</html>

@include('partials._footer')
@endsection
