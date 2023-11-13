@extends('layouts.layout')
@section('title', 'Landing Page')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="Css/style.css">
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 <script src="\resources\js\app.js"></script>

    <title>Log In</title>
    
</head>
<body>
<div class="container-fluid p-0 " style="min-height: 100vh;">
    @include('partials._header')

    <div class="h-50 mt-5 ms-5 me-5 mb-3 d-flex flex-column" style="background: url(./img/landingpage.jpg);background-size: cover;background-position: center;">
        <div class="container bg-white h-50 w-75  bg-opacity-25 me-0 ms-5 mt-5 text-uppercase text-white d-flex  flex-column justify-content-evenly">
           <h4 style="padding-top:14px;">We offer you </h3> 
            <h1 class="fw-bolder "><span style="color: #FF6000;"> trustworthy </span>auto refurbishing</h1>
           <h4>let us be your trusted partner in maintaining <br> <br>
            the health and reliabili ty of your vehicle  </h3> 
        </div>
        <div class="container h-50 w-75 me-0 ms-5   d-flex align-items-start justify-content-start ">
            <div class="btn w-25 m-5 p-2" style="background-color: #FF6000;" onclick="window.location.href='{{route('requestform')}}'">Schedule Appointment</div>
            <div class="btn w-25 m-5 p-2" style="background-color: #FF6000;" onclick="window.location.href='{{route('product')}}'">Order Parts</div>
        </div>
    </div>


   <!-- START of Trusted Partners Section -->
    <section class="container partners" >
    <span class="text-uppercase fs-4">Our Trusted Brands</span>
    <hr class="hr m-1" style= "width: 100px; color:#FF6000; opacity:100%; border-width: 5px;">
        <div class="row">
            <div class="col-md-2 align-middle">
                <img src="./img/brand1.png" class="rounded-circle object-fit-scale p-3" alt="...">
            </div>
            <div class="col-md-2 align-middle">
                <img src="./img/brand2.png"  class="rounded-circle object-fit-scale p-3" alt="...">
            </div>
            <div class="col-md-2 align-middle">
                <img src="./img/brand3.png" class="rounded-circle object-fit-scale p-2 "  alt="...">
            </div>
            <div class="col-md-2 align-middle">
                <img src="./img/brand1.png" class="rounded-circle object-fit-scale p-3" alt="...">
            </div>
            <div class="col-md-2 align-middle">
                <img src="./img/brand1.png" class="rounded-circle object-fit-scale p-3" alt="...">
            </div>
            <div class="col-md-2 align-middle">
                <img src="./img/brand1.png" class="rounded-circle object-fit-scale p-3" alt="...">
            </div>
            
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------ -->

    <!-- START of Why Choose Us Section --> 
    <section class="container chooseUs position-relative" >
    <span class="text-uppercase fs-4">Why Choose Us</span>
    <hr class="hr m-1" style= "width: 100px; color:#FF6000; opacity:100%;  border-width: 5px;">
        <div class="row flex flex-wrap" style="margin-left:50px;">
            <div class=" flex flex-col col-lg-10">
                <div class="row col-lg-12">
                    <div class="row col-lg-6">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="./img/mechanic_icon.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <div><h6 class="fw-bold text-uppercase">Experienced <span style="color: #FF6000;">Mechanics</span></h6></div>
                                <div><h6 class="label">We have our mechanics on standby to aid your need and offer service</h6></div>
                            </div>
                        </div> 
                    </div>
                    <div class="row col-lg-6">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="./img/deliver_product.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <div><h6 class="fw-bold text-uppercase">Reliable <span style="color: #FF6000;">Products</span></h6></div>
                                <div><h6 class="label">We have our mechanics on standby to aid your need and offer service</h6></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row col-lg-12">
                    <div class="row col-lg-6">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="./img/wallet_icon.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <div><h6 class="fw-bold text-uppercase">Reasonable <span style="color: #FF6000;">Price</span></h6></div>
                                <div><h6 class="label">We have our mechanics on standby to aid your need and offer service</h6></div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-6">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="./img/time_icon.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <div><h6 class="fw-bold text-uppercase">Fast <span style="color: #FF6000;">Service Delivery</span></h6></div>
                                <div><h6 class="label">We have our mechanics on standby to aid your need and offer service</h6></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-absolute top-0 end-0">
            <div class="row">
                <div class="col-md-2">
                    <img class="techimg" src="./img/technician.png" alt="">
                </div> 
            </div>
        </div>

    </section>
    <!-- ------------------------------------------------------------------------------------------ -->

    <!-- START of Services We Provide Section --> 
    <section class="servicesOffered">
        <div class=" ms-5 me-5 mb-3 d-flex flex-column" style="background: url(./img/usephoto4.png); background-size: cover;background-position: top; height: 180px;">
            <div class="container" style="padding-top:20px;">
                <span class="text-uppercase fs-4 text-light">Services We Provide</span>
                <hr class="hr m-1" style= "width: 100px; color:#FF6000; opacity:100%;  border-width: 5px;">
            </div>

            <div class="container servicesOffered1">
                <div class="row">
                <div class="card">
                    <img src="./img/usephoto3.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;padding-top:12px; padding-bottom:12px;">
                    <img src="./img/usephoto3.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;padding-top:12px; padding-bottom:12px;">
                    <img src="./img/usephoto3.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
    
        </div>

        </div>
        
    </section>
    <!-- ------------------------------------------------------------------------------------------ -->

    <!-- START of Popular Items Section --> 
    <section class="container popularItems">
    <span class="text-uppercase fs-4">Popular Items</span>
    <hr class="hr m-1" style= "width: 100px; color:#FF6000; opacity:100%;  border-width: 5px;">
        <div id="cCarousel">
            <div class="arrow" id="prev"><i class="fa-solid fa-chevron-left"></i></div>
            <div class="arrow" id="next"><i class="fa-solid fa-chevron-right"></i></div>

            <div id="carousel-vp">
            <div id="cCarousel-inner">

                <article class="cCarousel-item">
                <img src="./img/product1.png">
                <div class="infos">
                    <div class="item-info">
                        <h3 class="title">ITEM PRICE</h3>
                        <p class="description">Lorem</p>
                        <p class="price">Php 214.00</p>
                    </div>
                    <div class="icons text-center">
                    <i class="bi bi-cart-plus" style="font-size: 1.5rem; color: white;"></i>
                    </div>
                </div>
                </article>

                <article class="cCarousel-item">
                <img src="./img/product1.png">
                <div class="infos">
                    <div class="item-info">
                        <h3 class="title">ITEM PRICE</h3>
                        <p class="description">Lorem</p>
                        <p class="price">Php 214.00</p>
                    </div>
                    <div class="icons text-center">
                    <i class="bi bi-cart-plus" style="font-size: 1.5rem; color: white;"></i>
                    </div>
                </div>
                </article>

                <article class="cCarousel-item">
                <img src="./img/product1.png">
                <div class="infos">
                    <div class="item-info">
                        <h3 class="title">ITEM PRICE</h3>
                        <p class="description">Lorem</p>
                        <p class="price">Php 214.00</p>
                    </div>
                    <div class="icons text-center" >
                    <i class="bi bi-cart-plus" style="font-size: 1.5rem; color: white;"></i>
                    </div>
                </div>
                </article>

                <article class="cCarousel-item">
                <img src="./img/product1.png">
                <div class="infos">
                    <div class="item-info">
                        <h3 class="title">ITEM PRICE</h3>
                        <p class="description">Lorem</p>
                        <p class="price">Php 214.00</p>
                    </div>
                    <div class="icons text-center">
                    <i class="bi bi-cart-plus" style="font-size: 1.5rem; color: white;"></i>
                    </div>
                </div>
                </article>

                <article class="cCarousel-item">
                <img src="./img/product1.png">
                <div class="infos">
                    <div class="item-info">
                        <h3 class="title">ITEM PRICE</h3>
                        <p class="description">Lorem</p>
                        <p class="price">Php 214.00</p>
                    </div>
                    <div class="icons text-center">
                    <i class="bi bi-cart-plus" style="font-size: 1.5rem; color: white;"></i>
                    </div>
                </div>
                </article>

                <article class="cCarousel-item">
                <img src="./img/product1.png">
                <div class="infos">
                    <div class="item-info">
                        <h3 class="title">ITEM PRICE</h3>
                        <p class="description">Lorem</p>
                        <p class="price">Php 214.00</p>
                    </div>
                    <div class="icons text-center">
                    <i class="bi bi-cart-plus" style="font-size: 1.5rem; color: white;"></i>
                    </div>
                </div>
                </article>
            </div>
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------ -->

    <!-- START of Clients Love Section --> 
    <section class="container" style="margin-bottom:100px">
    <span class="text-uppercase fs-4">Clients Love</span>
    <hr class="hr m-1" style= "width: 100px; color:#FF6000; opacity:100%;  border-width: 5px;">
        <div class="container testimonial-inner">
            <div class="row d-flex justify-content-center">
                            <div class="col-md-4 style-4">
                                <div class="tour-item" >
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                        <div class="link-position d-flex justify-content-center">Student</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 style-4">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                        <div class="link-position d-flex justify-content-center">Student</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 style-4">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                        <div class="link-position d-flex justify-content-center">Student</div>
                                    </div>
                                </div>
                            </div>
                            
            </div>
        </div>                        
        

    </section>
    <!-- ------------------------------------------------------------------------------------------ -->

    







</div>
@include('partials._footer')


</body>

</html>
@endsection
