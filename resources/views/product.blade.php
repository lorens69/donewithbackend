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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    @include('partials._header')


    <div class="container-fluid mt-5" style="width:90%;">
        <div class="d-flex justify-content-between mt-2 ">
            <div>
                <span class="textStyle" name="title">CAR ACCESSORIES</span>
            </div>


                <div class="row d-flex align-items-center md-4 gap-0" style="padding-right:37px;s">
                    <div class="form-group col-md-8 pe-0">
                      <input id="exampleFormControlInput5" type="email" placeholder="search product" class="form-control form-control-underlined">
                    </div>
                    <div class="form-group col-md-4 pe-0">
                      <button type="submit" class="btn btnStyle rounded-pill btn-block shadow-sm">Search</button>
                    </div>
                </div>
                {{-- <input type="text" class="w-15" style="border:1px solid #FF6000">
                <button class="btn btn-sm text-uppercase text-white text-base" style="background-color:#FF6000;padding:10px;width: 100px;border-radius: 0;">Search Service</button> --}}

        </div>
        <br>
       

        @csrf

        <div class="d-flex w-100 justify-content-between" style="margin-bottom:31px; margin-top:-40px;">
            <div class="accordion mt-5 me-5 w-25" id="accordionExample">
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
                                <a href="{{route('sortby2')}}" class="form-check">
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
                <div class="accordion-item ">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="filterTextStyle p-2 accordion-button bg-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Sort By
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form>
                                <a href="" class="form-check">
                                    <label class="ms-3 m-1" for="alphabetical" style="font-size: 14px; font-weight:200; letter-spacing:1px;color:#333;">
                                        Alphabetically
                                    </label>
                                </a>
                                <a href="" class="form-check">
                                    <label class="ms-3 m-1" for="lowtohigh" style="font-size: 14px; font-weight:200; letter-spacing:1px;color:#333;">
                                        Price (Low to High)
                                    </label>
                                </a>
                                <a href="" class="form-check">
                                    <label class="ms-3 m-1" for="hightolow" style="font-size: 14px; font-weight:200; letter-spacing:1px;color:#333;">
                                        Price (High to Low)
                                    </label>
                                </a>
                                <a href="" class="form-check">
                                    <label class="ms-3 m-1" for="recentproducts" style="font-size: 14px; font-weight:200; letter-spacing:1px;color:#333;">
                                        Recently Added
                                    </label>
                                </a>
                                <a href="" class="form-check">
                                    <label class="ms-3 m-1" for="bestsellers" style="font-size: 14px; font-weight:200; letter-spacing:1px;color:#333;">
                                        Best Sellers
                                    </label>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-card card d-flex flex-row mt-5 justify-content-start flex-wrap w-75 row p-4 gap-3" >
                @foreach($showproduct as $product)

                <article class="product-item">
                        <img src="{{asset('upload/'.$product->image)}}" width="100%" height="100%" alt="fiksur">
                    <div class="infos">
                        <div class="item-info">
                            <h3 class="title">{{ $product['name'] }}</h3>
                            <p class="price">Price: Php {{ number_format($product['price']) }}</p>
                        </div>
                        <div class="icons text-center">
                            <form action="/addtocart" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product['id'] }}">

                                @auth
                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                @endauth

                                <button class="btn btn-block"><i class="bi bi-cart-plus" style="font-size: 1.5rem; color: white;"></i></button>
                            </form>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

        </div>
        <div class="d-flex align-items-center ">
            <span style="display: inline-block; border-bottom:2px solid #FFA559;width:85%;"> </span>
            <div class="d-inline-flex justify-content-end mt-4">
                {{ $products->links() }}
            </div>
        </div>

    </div>  
    <br><br>
    @include('sweetalert::alert')

    @include('partials._footer')
    @endsection

</body>
</html>
