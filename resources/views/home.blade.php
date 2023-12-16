@extends('layouts.layout')
@section('title', 'Bertology')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="CSS/style.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
<div class="container-fluid p-0 homecontainer1">
    @include('partials._header')

    <div class="h-50 mt-sm-5 ms-sm-5 me-sm-5 mb-3 d-flex flex-column" style="background: url(./img/landingpage.jpg);background-size: cover;background-position: center;">
        <div class="container homebackground bg-black bg-opacity-25 text-uppercase text-white">
           <h4 class="hometext" style="padding-top:14px;">We offer you </h3>
            <div class="display-3 hometitle">
                <span style="color: #FF6000;"> trustworthy</span>
                <span class="homeletterSpace">auto refurbishing</span>
            </div>
           <h4 class="hometext" style="padding-top:14px;">let us be your trusted partner in maintaining the health and reliability of your vehicle </h4>
        </div>
        <div class="homeheaderbuttons">
            <div class="col-2 btn homebuttons" onclick="window.location.href='{{route('requestform')}}'">Schedule Appointment</div>
            <div class="col-2 btn homebuttons" onclick="window.location.href='{{route('product')}}'">CAR ACCESSORIES</div>
        </div>
    </div>


   <!-- START of Trusted Partners Section -->
    <section class="container partners" >
    <h1 class="text-uppercase display-sm-3">Our Trusted Brands</h1>
    <hr class="hr m-1" style= "width: 100px; height:5px; color:#FF6000; opacity:100%; border-width: 5px;">
        <div class="row row-cols-auto" style="justify-content: space-evenly; margin:auto;">
            <div class="col-md-2 align-middle">
                <img class="rounded-circle" src="./img/home/1stBrand.png">
            </div>
            <div class="col-md-2 align-middle">
                <img class="rounded-circle" src="./img/home/2ndBrand.png">
            </div>
            <div class="col-md-2 align-middle">
                <img class="rounded-circle" src="./img/home/3rdBrand.png">
            </div>
            <div class="col-md-2 align-middle">
                <img class="rounded-circle" src="./img/home/4thBrand.png">
            </div>
            <div class="col-md-2 align-middle">
                <img class="rounded-circle" src="./img/home/5thBrand.png">
            </div>
            <div class="col-md-2 align-middle">
                <img class="rounded-circle" src="./img/home/6thBrand.png">
            </div>

        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------ -->

    <!-- START of Why Choose Us Section -->
    <section class="container chooseUs position-relative" >
    <span class="text-uppercase"  style="font-size: 26px;">Why Choose Us</span>
    <hr class="hr m-1" style= "width: 100px;height:5px; color:#FF6000; opacity:100%;  border-width: 5px;">
        <div class="row flex flex-wrap" style="margin-left:50px;">
            <div class=" flex flex-col col-lg-10">
                <div class="row col-lg-12">
                    <div class="row col-lg-6">
                        <div class="row">
                            <div class="col-md-4 text-center ">
                                <img src="./img/mechanic_icon.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <div><h6 class="fw-bold text-uppercase" style="font-size: 22px;">Experienced <span style="color: #FF6000;">Mechanics</span></h6></div>
                                <div><h6 class="label" style="font-family: 'Cabin Condensed', sans-serif; font-weight:700;">We have our mechanics on standby to aid your need and offer service</h6></div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-6">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="./img/deliver_product.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <div><h6 class="fw-bold text-uppercase"style="font-size: 22px;">Reliable <span style="color: #FF6000;">Products</span></h6></div>
                                <div><h6 class="label" style="font-family: 'Cabin Condensed', sans-serif; font-weight:700;">We have our mechanics on standby to aid your need and offer service</h6></div>
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
                                <div><h6 class="fw-bold text-uppercase" style="font-size: 22px;">Reasonable <span style="color: #FF6000;">Price</span></h6></div>
                                <div><h6 class="label" style="font-family: 'Cabin Condensed', sans-serif; font-weight:700;">We have our mechanics on standby to aid your need and offer service</h6></div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-6">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="./img/time_icon.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <div><h6 class="fw-bold text-uppercase" style="font-size: 22px;">Fast <span style="color: #FF6000;">Service Delivery</span></h6></div>
                                <div><h6 class="label" style="font-family: 'Cabin Condensed', sans-serif; font-weight:700;">We have our mechanics on standby to aid your need and offer service</h6></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-absolute top-0 end-0 ">
            <div class="row">
                <div>
                    <img class="techimg" src="./img/technician.png" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- ------------------------------------------------------------------------------------------ -->

    <!-- START of Services We Provide Section -->
    <section class="servicesOffered">
        <div class="servBackground">
            <div class="container" style="padding-top:20px;">
                <span class="text-uppercase headText">Services We Provide</span>
                <hr class="hr m-1" style= "width: 100px;height:5px; color:#FF6000; opacity:100%;  border-width: 5px;">
            </div>
        </div>

            <div class="servicesOffered1">
                <div class="container d-flex justify-content-evenly row row-cols-auto" style="gap:10px;">
                    <div class="col card">
                        <img src="./img/usephoto3.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title cardTitle">Free Installation</h5>
                        <p class="card-text" style="font-size:14px; font-family: 'Cabin Condensed', sans-serif; font-weight:700;text-align:left;">We have our mechanics on standby to aid your need and offer service.</p>

                        </div>
                    </div>
                    <div class="col card">
                        <img src="./img/usephoto3.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title cardTitle text-uppercase">Troubleshooting</h5>
                        <p class="card-text " style="font-size:14px; font-family: 'Cabin Condensed', sans-serif; font-weight:700; text-align:left;">For any car or electronics issue, make Bertology your first call. We specialize in troubleshooting and resolving problems swiftly and effectively.</p>

                        </div>
                    </div>
                    <div class="col card">
                        <img src="./img/usephoto3.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title cardTitle text-uppercase">Maintenance</h5>
                        <p class="card-text" style="font-size:14px; font-family: 'Cabin Condensed', sans-serif; font-weight:700; text-align:left;">At Bertology, each valued customer enjoys exclusive discounted pricing for regular maintenance. When it comes to managing your car's financial well-being, Bertology is your go-to solution.</p>

                        </div>
                    </div>
                </div>

            </div>



    </section>
    <!-- ------------------------------------------------------------------------------------------ -->

    <!-- START of Popular Items Section -->
    <section class="container popularItems">
    <span class="text-uppercase" style="font-size: 26px;">Popular Items</span>
    <hr class="hr m-1" style= "width: 100px;height:5px; color:#FF6000; opacity:100%;  border-width: 5px;">
        <div id="cCarousel">
            <div class="arrow" id="prev"><i class="fa-solid fa-chevron-left"></i></div>
            <div class="arrow" id="next"><i class="fa-solid fa-chevron-right"></i></div>

            <div id="carousel-vp">
            <div id="cCarousel-inner">
                @foreach($randomItems as $items)

                <article class="cCarousel-item">
                    <img src="{{asset('upload/'.$items->image)}}" width="100%" height="100%">
                    <div class="infos">
                        <div class="item-info">
                            <h3 class="title">{{$items->name}}</h3>
                            <p class="price">Price: Php {{ number_format($items->price) }}</p>
                        </div>
                        <div class="icons text-center">
                            <form action="{{ route('homeaddToCart', ['productId' => $items->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-block" style="padding: 10px; border-radius:9px;background-color: #FF6000;">
                                    <i class="bi bi-cart-plus" style="font-size: 1.5rem;"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </article>

                @endforeach
            </div>
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------ -->

    <!-- START of Clients Love Section -->
    <section class="container" id="CL">
    <span class="text-uppercase" style="font-size: 26px;">Clients Love</span>
    <hr class="hr m-1" style= "width: 100px;height:5px; color:#FF6000; opacity:100%;  border-width: 5px;">
        <div class="container testimonial-inner">
            <div class="row row-cols-auto d-flex justify-content-center row-gap-2">
                            <div class="col-md-4 style-4">
                                <div class="tour-item" >
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacus mi, molestie ac risus at, rhoncus maximus nibh. Vestibulum iaculis purus quam, nec fermentum ex laoreet ut.&rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                        <div class="link-position d-flex justify-content-center">Customer</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 style-4">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacus mi, molestie ac risus at, rhoncus maximus nibh. Vestibulum iaculis purus quam, nec fermentum ex laoreet ut.&rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                        <div class="link-position d-flex justify-content-center">Customer</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 style-4">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacus mi, molestie ac risus at, rhoncus maximus nibh. Vestibulum iaculis purus quam, nec fermentum ex laoreet ut.&rdquo;</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                        <div class="link-position d-flex justify-content-center">Customer</div>
                                    </div>
                                </div>
                            </div>

            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------ -->
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      const prev = document.querySelector("#prev");
      const next = document.querySelector("#next");

      let carouselVp = document.querySelector("#carousel-vp");

      let cCarouselInner = document.querySelector("#cCarousel-inner");
      let carouselInnerWidth = cCarouselInner.getBoundingClientRect().width;

      let leftValue = 0;

      // Variable used to set the carousel movement value (card's width + gap)
      const totalMovementSize =
        parseFloat(
          document.querySelector(".cCarousel-item").getBoundingClientRect().width,
          10
        ) +
        parseFloat(
          window.getComputedStyle(cCarouselInner).getPropertyValue("gap"),
          10
        );

      prev.addEventListener("click", () => {
        if (!leftValue == 0) {
          leftValue -= -totalMovementSize;
          cCarouselInner.style.left = leftValue + "px";
        }
      });

      next.addEventListener("click", () => {
        const carouselVpWidth = carouselVp.getBoundingClientRect().width;
        if (carouselInnerWidth - Math.abs(leftValue) > carouselVpWidth) {
          leftValue -= totalMovementSize;
          cCarouselInner.style.left = leftValue + "px";
        }
      });

      const mediaQuery510 = window.matchMedia("(max-width: 510px)");
      const mediaQuery770 = window.matchMedia("(max-width: 770px)");

      mediaQuery510.addEventListener("change", mediaManagement);
      mediaQuery770.addEventListener("change", mediaManagement);

      let oldViewportWidth = window.innerWidth;

      function mediaManagement() {
        const newViewportWidth = window.innerWidth;

        if (leftValue <= -totalMovementSize && oldViewportWidth < newViewportWidth) {
          leftValue += totalMovementSize;
          cCarouselInner.style.left = leftValue + "px";
          oldViewportWidth = newViewportWidth;
        } else if (leftValue <= -totalMovementSize && oldViewportWidth > newViewportWidth) {
          leftValue -= totalMovementSize;
          cCarouselInner.style.left = leftValue + "px";
          oldViewportWidth = newViewportWidth;
        }
      }
    });
  </script>

@include('sweetalert::alert')
</body>
<script>


    const prev = document.querySelector("#prev");
    const next = document.querySelector("#next");

    let carouselVp = document.querySelector("#carousel-vp");

    let cCarouselInner = document.querySelector("#cCarousel-inner");
    let carouselInnerWidth = cCarouselInner.getBoundingClientRect().width;

    let leftValue = 0;

    // Variable used to set the carousel movement value (card's width + gap)
    const totalMovementSize =
      parseFloat(
        document.querySelector(".cCarousel-item").getBoundingClientRect().width,
        10
      ) +
      parseFloat(
        window.getComputedStyle(cCarouselInner).getPropertyValue("gap"),
        10
      );

    prev.addEventListener("click", () => {
      if (!leftValue == 0) {
        leftValue -= -totalMovementSize;
        cCarouselInner.style.left = leftValue + "px";
      }
    });

    next.addEventListener("click", () => {
      const carouselVpWidth = carouselVp.getBoundingClientRect().width;
      if (carouselInnerWidth - Math.abs(leftValue) > carouselVpWidth) {
        leftValue -= totalMovementSize;
        cCarouselInner.style.left = leftValue + "px";
      }
    });

    const mediaQuery510 = window.matchMedia("(max-width: 510px)");
    const mediaQuery770 = window.matchMedia("(max-width: 770px)");

    mediaQuery510.addEventListener("change", mediaManagement);
    mediaQuery770.addEventListener("change", mediaManagement);

    let oldViewportWidth = window.innerWidth;

    function mediaManagement() {
      const newViewportWidth = window.innerWidth;

      if (leftValue <= -totalMovementSize && oldViewportWidth < newViewportWidth) {
        leftValue += totalMovementSize;
        cCarouselInner.style.left = leftValue + "px";
        oldViewportWidth = newViewportWidth;
      } else if (
        leftValue <= -totalMovementSize &&
        oldViewportWidth > newViewportWidth
      ) {
        leftValue -= totalMovementSize;
        cCarouselInner.style.left = leftValue + "px";
        oldViewportWidth = newViewportWidth;
      }
    }

    </script>


<style>

    @media (min-width: 180px) and (max-width:767px) {

        #CL {
            display: none;
        }
    }
    @media (min-width: 768px) {

        #CL {
            margin-top:44px;
        }
    }
</style>



</html>
@include('partials._footer')
@endsection
