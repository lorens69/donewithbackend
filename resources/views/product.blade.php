@extends('layouts.layout')

@section('title', 'Products')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"> --}}
</head>

<style>
    @media(min-width:180px) and (max-width:425px){
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
        display:flex;
        flex-direction:column;
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
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-end;
        }

        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        }

        .modal-header {
        padding: 2px 16px;
        width: 100%;
        background-color:#F24E1E;
        display: flex;
        flex-direction: row;
        justify-content: center;
        }

        .modal-body {
        padding: 0px 16px;
        width: 100%;
        padding-right: 31px;
        }

        .modal-footer {
        padding: 2px 16px;
        background-color: #F24E1E;
        color: white;
        }
        .iconsize{
            font-size:30px;
        }
        .productinformation{
            display: flex;
            height: 226px;
            flex-direction: column;
            align-items: flex-start;
            justify-content: space-between;
            font-family: 'Raleway', sans-serif; 
            font-size: 19px;

        }
        .infoname{
            font-weight: 900;
            text-transform: uppercase;
            margin-top: 20px;
            font-size: 17px;
        }
        .infoname2{
            font-weight: 900;
            font-size: 14px;
        }
        .infoimage{
            width:200px;
            height:auto;
        }
        .infobutton{
            background-color: #F24E1E; 
            text-align:center; 
            color:white; 
            border-radius:2px; 
            height:fit-content;
            width: fit-content;
            margin-bottom: 22px;
        }

    }
    @media(min-width:426px){
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
        display: flex;
        flex-direction: row;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 50%;
        height: 400px;
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
        color: #000;
        float: right;
        font-size: 28px;
        font-weight: bold;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-end;
        }

        .close:hover,
        .close:focus {
        color: #F24E1E;
        text-decoration: none;
        cursor: pointer;
        }

        .modal-header {
        padding: 2px 16px;
        background-color:#F24E1E;
        color: white;
        }

        .modal-body {
        padding: 0px 16px;
        display: flex;
        flex-direction: column;
        }

        .modal-footer {
        padding: 2px 16px;
        background-color: #F24E1E;
        color: white;
        }
        .productinformation{
            display: flex;
            height: 310px;
            flex-direction: column;
            align-items: flex-start;
            justify-content: space-between;
            font-family: 'Raleway', sans-serif; 
            font-size: 24px;

        }
        .infoname{
            font-weight: 900;
            text-transform: uppercase;
            font-size: 22px;
        }
        .infoname2{
            font-weight: 900;
            font-size: 18px;
            margin-top: -46px;
        }
        .infoimage{
            width:300px;
            height:auto;
        }
        .infobutton{
            background-color: #F24E1E; 
            text-align:center; 
            color:white; 
            border-radius:2px; 
            height:fit-content;
            width: fit-content;
            margin-bottom: 22px;
        }

    }
    
    

</style>




<body>

    @include('partials._header')

    <div class="container-fluid mt-5 products-container" style="width:90%;">
        <div class="d-flex justify-content-between mt-2 products-header">
            <div>
                <span class="textStyle" name="title" style="font-family: 'Bayon', sans-serif;">CAR ACCESSORIES</span>
                <hr class="hr m-1" style= "width: 100px; color:#FF6000; opacity:100%; border-width: 5px;">
            </div>
        </div>
        <br>
        @csrf

        @if(count($products) > 0)
        <div class="product-items-container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class=" filterTextStyle p-2 accordion-button bg-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Category
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form>
                                <a href="{{route('product')}}" for="securitySafety" class="form-check">
                                    {{-- <input class="form-check-input m-0" type="radio" name="category" id="securitySafety"
                                        value="Security and Safety"> --}}
                                    <label class="ms-3 m-1" style="font-size: 14px; font-weight:200; letter-spacing:1px; color:#333;">
                                        ALL
                                    </label>
                                </a>

                                <a href="{{route('sortby1')}}" for="securitySafety" class="form-check">
                                    {{-- <input class="form-check-input m-0" type="radio" name="category" id="securitySafety"
                                        value="Security and Safety"> --}}
                                    <label class="ms-3 m-1" style="font-size: 14px; font-weight:200; letter-spacing:1px; color:#333;">
                                        Security and Safety
                                    </label>
                                </a>
                                <a href="{{route('sortby2')}}" class="d-flex form-check justify-content-left">
                                    <label class="ms-3 m-1" for="audioEntertainment" style="font-size: 14px; font-weight:200; letter-spacing:1px;color:#333;">
                                        Audio and Entertainment
                                    </label>
                                </a>
                                <a href="{{route('sortby3')}}" class="form-check">
                                    <label class="ms-3 m-1" for="exteriorEnhancements" style="font-size: 14px; font-weight:200; letter-spacing:1px;color:#333;">
                                        Exterior Enhancements
                                    </label>
                                </a>
                            </form>

                        </div>
                    </div>
                </div>

            </div>


            <div class="service-card row-cols-auto" >
                @foreach($showproduct as $product)

                <article class="productitem">
                    <div class="cardimage" id="myBtn">
                        <img src="{{asset('upload/'.$product->image)}}" width="220  px" height="150px" alt="fiksur">
                    </div>
                        <br>
                    <div class="infos">
                        <div class="item-info">
                            <h3 class="title">{{ $product['name'] }}</h3>
                            <p class="price">Price: Php {{ number_format($product['price']) }}</p>
                        </div>
                        <div class="icons text-center">
                            <form action="{{ route('addToCart', ['productId' => $product->id]) }}" method="POST">
                                @csrf
                                {{-- <input type="hidden" name="product_id" value="{{ $product['id'] }}"> --}}

                                @auth
                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                @endauth

                                <button class="btn btn-block" style="margin: 3px;padding: 15px;background-color:#FF6000;"><i class="bi bi-cart-plus" style="font-size: 1.5rem; color: white;"></i></button>
                            </form>
                        </div>
                    </div>
                </article>
                @endforeach
                @else
                <div class="d-flex justify-content-center">
                    <img class="img-thumbnail" src="./img/illustrations/noproducts.png" style="width: 300px; height:300px; margin-bottom:40px; border:none;">
                </div>
                @endif
            </div>
        </div>
    </div>


    @foreach($showproduct as $product)
    <!-- Modal content -->
    <div id="myModal-{{$product->id}}" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="col-6 modal-header">
                <img class="infoimage" src="./img/product1.png" alt="">
             {{-- <h2>Modal Header</h2> --}}
            </div>

            <div class="col-6 modal-body">
                <span class="close">&times;</span>
                <div class="productinformation">
                    
                    <div class="d-flex infoname justify-content-center">Name of the product</div>
                    <div class="d-flex infoname2 justify-content-center p-0">Description</div>
                    <div class="d-flex justify-content-center align-items-end gap-4">
                        <i class="fa-regular fa-square-minus iconsize"></i>
                        {{-- <form method="post" action="{{ route('cart.decrease', ['cartId' => $cart->cart_id]) }}">
                          @csrf
                          <button class="d-flex cartquantitybutton align-items-center" type="submit" @if($cart->quantity == 1) disabled @endif><i class="fa-solid fa-minus"></i></button>
                      </form> --}}
                        <span class="d-flex carttext" style="font-size:22px;">2</span>
        
                        {{-- <form method="post" action="{{ route('cart.increase', ['cartId' => $cart->cart_id]) }}">
                          @csrf
                          <button class="cartquantitybutton align-items-center" type="submit"><i class="fa-solid fa-plus"></i></button>
                      </form> --}}
                        <i class="fa-regular fa-square-plus iconsize"></i></i>
                    </div>
                    <div class="d-flex col-12">
                        <div class="d-flex col-6">
                            <span>Php 1000</span>
                        </div>
                        <div class="col-6 fw-bold infobutton">
                            @if(count($products) > 0)
                            <button class="btn btn-block pay-button" style="color:white;" type="button" id="myBtn">ADD TO CART</button>
                            @else
                            <button class="btn btn-block pay-button" type="button" id="myBtn" disabled> ADD TO CART</button>
                            @endif
                        </div>
                    </div>
                    
                </div>
                
            </div>

            {{-- <div class="modal-footer">
                <p>BERTOLOGY</p>
            </div> --}}
        </div>

    </div>

    <script>
        // Get the modal
        var modal = document.querySelector(".modal");

        // Get the button that opens the modal
        var cardimage = document.querySelectorAll(".cardimage");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        cardimage.forEach(element => {
            element.onclick= function(v){
                modal.style.display = "block";
            }
        });

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
    @endforeach

    @include('sweetalert::alert')
</body>
</html>
@include('partials._footer')
@endsection
