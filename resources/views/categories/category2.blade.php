@extends('layouts.layout')

@section('title', 'Product')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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
        height: 450px;
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
            width: 100%;
            height: 164px;
            background-color: #F24E1E;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .modal-body {
        padding: 0px 16px;
        width: 100%;
        height: auto;
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
            height: 157px;
            padding-top: 20px;
            flex-direction: column;
            align-items: flex-start;
            justify-content: space-between;
            font-family: 'Bayon', sans-serif; 

        }
        .infoname{
            font-weight: 900;
            text-transform: uppercase;
            font-size: 22px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 11px;
        }
        .infoname2{
            font-weight: 900;
            font-size: 14px;
        }
        .infoimage{
            width:241px;
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
        margin-top: 107px;
        padding: 0;
        border: 1px solid #888;
        width: 50%;
        height: auto;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s;
        
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
        height: auto;
        display: flex;
        flex-direction: column;
        font-family: 'Bayon', sans-serif;
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
            font-family: 'Bayon', sans-serif;
            font-size: 24px;
        }
        .infoname{
            font-weight: 900;
            text-transform: uppercase;
            font-size: 37px;
            display: flex;
            width: 100%;
            flex-direction: column;
            align-items: flex-start;
            gap: 29px;
            
        }
        .infoname2{
            font-weight: 900;
            font-size: 19px;
            letter-spacing: 1px;
        }
        .infoname3{
            font-weight: 900;
            font-size: 29px;
            letter-spacing: 1px;
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

        
        <div class="product-items-container">
            <div class="accordion" id="accordionExample">
                <div >
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

                                <a href="{{route('sortby1')}}" for="securitySafety" class="form-check ">
                                    {{-- <input class="form-check-input m-0" type="radio" name="category" id="securitySafety"
                                        value="Security and Safety"> --}}
                                    <label class="ms-3 m-1" style="font-size: 14px; font-weight:200; letter-spacing:1px; color:#333;">
                                        Security and Safety
                                    </label>
                                </a>
                                <a href="{{route('sortby2')}}" class="d-flex form-check active justify-content-left">
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

            @if(count($sort2) > 0)
            <div class="service-card row-cols-auto" >
                @foreach($sort2 as $product)
                <article class="productitem">
                    <div class="cardimage">
                        <img class="cardimage" src="{{ asset('upload/'.$product->image) }}" width="217px" height="150px" alt="fiksur">
                    </div>
                    <br>
                    <div class="infos">
                        <div class="item-info">
                            <h3 class="title">{{ $product->name }}</h3>
                            <p class="description" hidden>{{ $product->description}}</p>
                            <p class="price">Php {{ number_format($product->price) }}</p>
                            <p class="id" hidden>{{ $product ->id }}</p>
                        </div>
                        <div class="icons text-center">
                            <form action="{{ route('addToCart', ['productId' => $product->id]) }}" method="POST">
                                @csrf
                                {{-- <input type="hidden" name="product_id" value="{{ $product['id'] }}"> --}}
            
                                @auth
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                @endauth
            
                                <button class="btn btn-block" style="margin: 3px;padding: 15px;background-color:#FF6000;">
                                    <i class="bi bi-cart-plus" style="font-size: 1.5rem; color: white;"></i>
                                </button>
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
     <!-- Modal content -->
     <div id="myModal-{{$product->id}}" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
                <div class="col-6 modal-header">
                    <img class="infoimage" src="" id="productImage" alt="">
                {{-- <h2>Modal Header</h2> --}}
                </div>

                <div class="col-6 modal-body">
                    <span class="close">&times;</span>
                    <div class="productinformation">
                        
                        <div class="d-flex infoname justify-content-center"><span id="productName"></span></</div>
                        <div class="d-flex infoname2 justify-content-center p-0"><span id="productDescription"></span></div>
                        <div><span id="productID" hidden></span></div>
                        {{-- <div class="d-flex justify-content-center align-items-end gap-4">
                            <i id="productDecrease" class="fa-regular fa-square-minus iconsize"></i>
                            <span id="productQuantity" class="d-flex carttext" style="font-size:22px;">0</span>
                            <i id="productIncrease" class="fa-regular fa-square-plus iconsize"></i></i>
                        </div> --}}
                        <div class="d-flex col-12 gap-sm-4 infoname3">
                            <div>
                                <span id="productPrice"></span>
                            </div>
                            {{-- <div class="col-6 fw-bold infobutton">
                                @if(count($products) > 0)
                                <button class="btn btn-block pay-button" style="color:white;" type="button" id="productAddtoCart">ADD TO CART</button>
                                @else
                                <button class="btn btn-block pay-button" type="button" id="productAddtoCartDisabled" disabled> ADD TO CART</button>
                                @endif
                            </div> --}}
                        </div>      
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Get the modal
            var modal = $(".modal");

            // Get the button that opens the modal
            var cardimage = $(".cardimage");

            // Get the <span> element that closes the modal
            var span = $(".close").eq(0);

            // When the user clicks the button, open the modal
            cardimage.each(function() {
                $(this).click(function() {
                var setProductIncrease = $('#productIncrease');
                var setProductDecrease = $('#productDecrease');
                var setProductQuantity = $('#productQuantity');

                let productQuantity = 0;
                setProductQuantity.text(productQuantity)
                
                var productName = $(this).find('.pname').val();
                var imageSrc = $(this).find('img').attr('src');
                var title = $(this).siblings('.infos').find('.title').text();
                var description = $(this).siblings('.infos').find('.description').text();
                var price = $(this).siblings('.infos').find('.price').text()
                var id = $(this).siblings('.infos').find('.id').text()

                var setProductName = $('#productName');
                var setProductPrice = $('#productPrice');
                var setProductDescription = $('#productDescription');
                var setProductImage = $('#productImage');
                var setProductID = $('#productID');

                // Log the data to the console
                // console.log('Product Name:', productName);
                // console.log('Image Source:', imageSrc);
                // console.log('Title:', title);
                // console.log('Price:', price);

                // Set the data to the respective elements
                setProductName.text(title);
                setProductPrice.text(price);
                setProductDescription.text(description);
                setProductImage.attr('src', imageSrc);
                setProductID.text(id);

                // Perform any other actions with the data
                // ...
                modal.css("display", "block");

                

                setProductIncrease.click(function(){
                    productQuantity++;
                    setProductQuantity.text(productQuantity)
                })
                setProductDecrease.click(function(){
                    if(productQuantity <= 0){
                        return ;
                    }
                    --productQuantity;
                    setProductQuantity.text(productQuantity)
                })

                // Create an object to hold the data
                var data = {
                productName: productName,
                description: description,
                imageSrc: imageSrc,
                title: title,
                price: price,
                id: id
            };
            
        
            });

        });

            // When the user clicks on <span> (x), close the modal
            span.click(function() {
                modal.css("display", "none");
            });

            // When the user clicks anywhere outside of the modal, close it
            $(window).click(function(event) {
                if (event.target === modal[0]) {
                modal.css("display", "none");
                }
            });
        });
    </script>
    <br><br>
    @include('sweetalert::alert')

    

</body>
</html>

@include('partials._footer')
@endsection