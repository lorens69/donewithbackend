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

    <div class="container-fluid mt-5 products-container" style="width:90%;">
        <div class="d-flex justify-content-between mt-2 products-header">
            <div>
                <span class="textStyle fs-2" name="title" style="font-family: 'Raleway', sans-serif; ">CAR ACCESSORIES</span>
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

                <article class="product-item col-6">

                        <img src="{{asset('upload/'.$product->image)}}" width="100%" height="100%" alt="fiksur">
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

                                <button class="btn btn-block"><i class="bi bi-cart-plus" style="font-size: 1.5rem; color: white;"></i></button>
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
