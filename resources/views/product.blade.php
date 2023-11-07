@extends('layouts.layout')

@section('title', 'Product')

@section('content')

@include('partials._header')
<style>
    .pagination>li>a,
    .pagination>li>span {
        padding: 6px 12px;
        text-decoration: none;
        border: 1px solid #ddd;
        color: #333;
        border-radius: 3px;
        background-color: #FFE6C7;
        /* Add the background color for pagination items */
    }

    .pagination .page-item {
        margin: 0px 5px;
    }

    .pagination .page-item:not(.active) .page-link {
        border: none;
    }

    .pagination>.active>a,
    .pagination>.active>span {
        color: black;
        border-color: #FF6000;
    }

    .page-link.active,
    .active>.page-link {
        background-color: #FFE6C7;
        /* Add the background color for pagination items */
        color: black;
    }

    /* Hide the "Next" and "Previous" links */
    .pagination .disabled,
    .pagination .page-link[rel="next"],
    .pagination .page-link[rel="prev"] {
        display: none;
    }

    .card {
        border: 2px solid black;
    }

    .accordion-button {
        border: 1px solid #FF6000;
        font-size: larger;
        color: black;
    }

    .accordion-body {
        background-color: #FFE6C7;
    }

    .accordion-body label {
        font-weight: bolder;
        font-size: large;
        margin-left: 10px;
    }

    .accordion-body input {
        border: 1px solid black;
        margin-left: 15px;
    }

    .form-check {
        display: flex;
        align-items: center;
    }

    .form-check * {
        margin: 15px;
    }
    .service-card .card{
        border: 1px solid #FF6000;
    }

    .textStyle {
    font-size: 34px;
    font-weight: 600;
    }
    .btnStyle{
        width:150px;
        background-color: #FF6000;
    }
    .btnStyle:hover{
        color:white;
        background-color: #FFA559;
        border-color: #FF6000;
    }
</style>
<div class="container-fluid mt-5" style="width:90%;">
    <div class="d-flex justify-content-between mt-2 ">
        <div>
            <span class="textStyle" name="title">CAR ACCESSORIES</span>
        </div>
       
        
            <div class="row d-flex align-items-center md-4 gap-0" style="padding-right:37px;s">
                <div class="form-group col-md-8 pe-0">
                  <input id="exampleFormControlInput5" type="email" placeholder="search service" class="form-control form-control-underlined">
                </div>
                <div class="form-group col-md-4 pe-0">
                  <button type="submit" class="btn btnStyle rounded-pill btn-block shadow-sm">Search</button>
                </div>
            </div>
            {{-- <input type="text" class="w-15" style="border:1px solid #FF6000">
            <button class="btn btn-sm text-uppercase text-white text-base" style="background-color:#FF6000;padding:10px;width: 100px;border-radius: 0;">Search Service</button> --}}
    
    </div>
    <br>
    @if ($errors->any())
                                    <div class="col-12">
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">{{$error}}</div>
                                        @endforeach
                                    </div>
                                @endif

                                @if (session()->has('error'))
                                    <div class="alert alert-danger">{{session('error')}}</div>
                                @endif

                                @if (session()->has('success'))
                                    <div class="alert alert-success">{{session('success')}}</div>
                                @endif

                                @csrf

    <div class="d-flex w-100 justify-content-between ">
        <div class="accordion mt-5 me-5 w-25" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Category
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category" id="securitySafety"
                                    value="Security and Safety">
                                <label class="form-check-label" for="securitySafety">
                                    Security and Safety
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="audioEntertainment" value="Audio and Entertainment">
                                <label class="form-check-label" for="audioEntertainment">
                                    Audio and Entertainment
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="exteriorEnhancements" value="Exterior Enhancements">
                                <label class="form-check-label" for="exteriorEnhancements">
                                    Exterior Enhancements
                                </label>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="accordion-item ">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Sort By
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category" id="securitySafety"
                                    value="Security and Safety">
                                <label class="form-check-label" for="securitySafety">
                                    Alphabetically
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="audioEntertainment" value="Audio and Entertainment">
                                <label class="form-check-label" for="audioEntertainment">
                                    Price (Low to High)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="exteriorEnhancements" value="Exterior Enhancements">
                                <label class="form-check-label" for="exteriorEnhancements">
                                    Price (High to Low)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="exteriorEnhancements" value="Exterior Enhancements">
                                <label class="form-check-label" for="exteriorEnhancements">
                                    Recently Added </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ms-2" type="radio" name="category"
                                    id="exteriorEnhancements" value="Exterior Enhancements">
                                <label class="form-check-label" for="exteriorEnhancements">
                                    Best Sellers </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-card card d-flex flex-row  mt-5 justify-content-center flex-wrap  w-75 row ">
            @foreach($showproduct as $product)
            <div class="card col-lg-3 m-4 p-0">
                <div class="card-body d-flex justify-content-center align-items-center  flex-column pt-0 ps-0 pe-0 ">
                    <img src="{{asset('upload/'.$product->image)}}" width="100%" height="100%" alt="fiksur">
                    <br>
                    <h5 class="card-title ">{{ $product['name'] }}</h5>
                    <p class="card-text">Price: Php {{ number_format($product['price']) }}</p>

                    <form action="/addtocart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">

                        @auth
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        @endauth

                        <button class="btn w-75 text-white p-3 fw-bold m-2" style="background-color: #FF6000">ADD TO CART</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="d-flex align-items-center ">
        <span style="display: inline-block; border-bottom:2px solid #FFA559;width:85%;"> </span>
        <div class="d-inline-flex justify-content-end mt-4">
            {{ $products->links() }}
        </div>
    </div>

</div> <br><br>
@include('partials._footer')
@endsection
