@extends('layouts.layout')
@section('title', 'Shopping Cart')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');


.size span {
  font-size: 11px;
}

.color span {
  font-size: 11px;
}

.product-deta {
  margin-right: 70px;
}

.gift-card:focus {
  box-shadow: none;
}

.pay-button {
  color: #fff;
}

.pay-button:hover {
  color: #fff;
}

.pay-button:focus {
  color: #fff;
  box-shadow: none;
}

.text-grey {
  color: #a39f9f;
}

.qty i {
  font-size: 11px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>
<body>
    @include('partials._header')
    <div class="container shopcart">
        <div class="ms-5 mt-3">
            <h6 style="font-size: 20px;">Shopping Cart</h6>
            <hr class="hr" style= "width: 100px; background-color:#FF6000; opacity:100%; border-width: 5px;">
        </div>

        <div class="d-flex shopheaders col-12 text-center">
            <div class="col-md-2 fw-semibold"></div>
            <div class="col-md-2 fw-semibold">Product Name</div>
            <div class="col-md-2 fw-semibold">Unit Price</div>
            <div class="col-md-2 fw-semibold">Quantity</div>
            <div class="col-md-2 fw-semibold">Total Price</div>
        </div>

        @foreach($products as $cart)
        <div class="d-flex shopitems col-12 text-center align-items-center">
            <div class="col-md-2">
              <div class="mr-1"><img class="rounded" src="{{asset('upload/'.$cart->image)}}" width="70" height="70"></div>
            </div>
            <div class="col-md-2 align-items-center">
                <span class="p-2 flex-fil fw-semibold" style="font-size: 14px;">{{ $cart->name }}</span>
            </div>
            <div class="col-md-2 fw-semibold">{{ number_format($cart->price) }}</div>
            <div class="d-flex col-md-2 justify-content-center ">
                <i class="fa-regular fa-square-minus" style="font-size: 20px;"></i>
                <span class="col-md-4 fw-semibold text-center">0</span>
                <i class="fa-regular fa-square-plus" style="font-size: 20px;"></i></i>
            </div>
            <div class="col-md-2 fw-semibold">0</div>
            <div class="col-md-2"><a href="/removecart/{{$cart->cart_id}}"><i class="fa-solid fa-trash" style="font-size: 20px;color: #F24E1E;"></i></a></div>
        </div>
        @endforeach

        <div class="d-flex shoptotal text-center">
            <div class="p-2 flex-fill fw-bold">
                <span style="color: black;">ITEM(S): <span style="color: #FF6000;">-</span></span>
            </div>
            <div class="p-2 flex-fill fw-bold">
                <span style="color: black;">TOTAL PRICE: <span style="color: #F24E1E;">-</span></span>
            </div>
            <div class="p-2 flex-fill fw-bold" style="background-color: #F24E1E; color:white; border-radius:2px;">CHECKOUT</div>
        </div>
        

    </div>
        
    <!-- Trigger/Open The Modal -->
    {{-- <button id="myBtn">Open Modal</button> --}}
    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
            <h1>ORDER SUMMARY</h1>
          <span class="close">&times;</span>
          {{-- <h2>Modal Header</h2> --}}
        </div>

        <form action="/ordernow" method="POST">
            @csrf
        <div class="modal-body">
          <h1>TOTAL AMOUNT: {{$total}}</h1>
          <p>Some other text...</p>
        </div>
        <button type="submit">ORDER NOW</button>
        </form>

        <div class="modal-footer">
          {{-- <h3>Modal Footer</h3> --}}
          <p>some footer here</p>
        </div>
      </div>

    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
      
        
</body>
</html>
@include('partials._footer')
@endsection
