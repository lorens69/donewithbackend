@extends('layouts.layout')

@section('title', 'Contact Us')

@section('content')

@include('partials._header')
<style>


.card {
        border: 2px solid black;
        margin-right: 10%;
        margin: 10px;
        display:none;
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

        .map_sec{
        padding: 50px 0px;
    }
    .map_inner h4, .map_inner p{
        color: #000;
        text-align: center
    }
    .map_inner p{
        font-size: 13px;
    }
    .map_bind{
    margin-top: 50px;
        border-radius: 30px;
        overflow: hidden;
    }

    h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}


.sec-title-style1 {
    position: relative;
    display: block;
    margin-top: -9px;
    padding-bottom: 50px;
}
.sec-title-style1.max-width{
    position: relative;
    display: block;
    max-width: 770px;
    margin: -9px auto 0;
    padding-bottom: 52px;
}
.sec-title-style1.pabottom50 {
    padding-bottom: 42px;
}
.sec-title-style1 .title {
    position: relative;
    display: block;
    color: #131313;
    font-size: 36px;
    line-height: 46px;
    font-weight: 700;
    text-transform: uppercase;
}
.sec-title-style1 .title.clr-white{
    color: #ffffff;
}
.sec-title-style1 .decor {
    position: relative;
    display: block;
    width: 70px;
    height: 5px;
    margin: 19px 0 0;
}
.sec-title-style1 .decor:before{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #ff7300;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .decor:after{
    position: absolute;
    top: 0;
    right: 10px;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #ff7300;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .decor span {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #f36e01;
    margin: 2px 0;
}


.sec-title-style1 .text{
    position: relative;
    display: block;
    margin: 7px 0 0;
}
.sec-title-style1 .text p{
    position: relative;
    display: inline-block;
    padding: 0 15px;
    color: #302d2d;
    font-size: 14px;
    line-height: 16px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0;
}
.sec-title-style1 .text.clr-yellow p{
    color: #ff8420;
}
.sec-title-style1 .text .decor-left{
    position: relative;
    top: -2px;
    display: inline-block;
    width: 70px;
    height: 5px;
    background: transparent;
}
.sec-title-style1 .text .decor-left span {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #ff7300;
    content: "";
    margin: 2px 0;
}
.sec-title-style1 .text .decor-left:before{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #ff7300;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .text .decor-left:after{
    position: absolute;
    top: 0;
    right: 10px;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #ff7300;
    border-radius: 50%;
    content: "";
}

.sec-title-style1 .text .decor-right{
    position: relative;
    top: -2px;
    display: inline-block;
    width: 70px;
    height: 5px;
    background: transparent;
}
.sec-title-style1 .text .decor-right span {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #ff7300;
    content: "";
    margin: 2px 0;
}
.sec-title-style1 .text .decor-right:before{
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #ff7300;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .text .decor-right:after{
    position: absolute;
    top: 0;
    left: 10px;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #ff7300;
    border-radius: 50%;
    content: "";
}

.sec-title-style1 .bottom-text{
    position: relative;
    display: block;
    padding-top: 16px;
}
.sec-title-style1 .bottom-text p{
    color: #848484;
    font-size: 16px;
    line-height: 26px;
    font-weight: 400;
    margin: 0;
}
.sec-title-style1 .bottom-text.clr-gray p{
    color: #cdcdcd;
}
.contact-address-area{
    position: relative;
    display: block;
    background: #ffffff;
    padding: 100px 0 120px;
}
.contact-address-area .sec-title-style1.max-width {
    padding-bottom: 72px;
}
.contact-address-box{
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
}
.single-contact-address-box {
    position: relative;
    display: block;
    background: #272626;
    padding: 85px 30px 77px;
}
.single-contact-address-box .icon-holder{
    position: relative;
    display: block;
    padding-bottom: 24px;
}
.single-contact-address-box .icon-holder span:before{
    font-size: 75px;
}
.single-contact-address-box h3{
    color: #ffffff;
    margin: 0px 0 9px;
}
.single-contact-address-box h2{
    color: #eb8e43;
    font-size: 24px;
    font-weight: 600;
    margin: 0 0 19px;
}
.single-contact-address-box a{
    color: #ffffff;
}

.single-contact-address-box.main-branch {
    background: #ec8003;
    padding: 53px 30px 51px;
    margin-top: -20px;
    margin-bottom: -20px;
}
.single-contact-address-box.main-branch h3{
    color: #131313;
    font-size: 18px;
    font-weight: 700;
    margin: 0 0 38px;
    text-transform: uppercase;
    text-align: center;
}
.single-contact-address-box.main-branch .inner{
    position: relative;
    display: block;

}
.single-contact-address-box.main-branch .inner ul{
    position: relative;
    display: block;
    overflow: hidden;
}
.single-contact-address-box.main-branch .inner ul li{
    position: relative;
    display: block;
    padding-left: 110px;
    border-bottom: 1px solid #737373;
    padding-bottom: 23px;
    margin-bottom: 24px;
}
.single-contact-address-box.main-branch .inner ul li:last-child{
    border: none;
    margin-bottom: 0;
    padding-bottom: 0;
}
.single-contact-address-box.main-branch .inner ul li .title{
    position: absolute;
    top: 2px;
    left: 0;
    display: inline-block;
}
.single-contact-address-box.main-branch .inner ul li .title h4{
    color: #131313;

.single-contact-address-box.main-branch .inner ul li .text{
    position: relative;
    display: block;
}
.single-contact-address-box.main-branch .inner ul li .text p{
    color: #131313;
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
    margin: 0;
}


}


</style>


    <div class="d-flex flex-row-reverse" >

    <div class="container-fluid mt-2 p-20px" style="width:100%;">

    <div class="card-body d-flex justify-content-left align-items-center  mt-4 row col-lg-12 ">
        <div class="card " style="background-color: #FFE6C7; max-width:fit-content" >
            <img src="./img/24_7Contact.png" width="100%" alt="" style="display: mt-5; margin:10px">
            <p>Phone Number: <b>09617590889</b></p>
            <p>Email Address: <b>umaranshobi2424@gmail.com</b></p>
            <p>Location Address: <b>Edison St, Cebu City, 6000 Cebu near St.Therese Parish Church</b></p>
            <button class="btn w-75 text-white p-2 fw-normal m-4 mt-0"
            style="background-color: #454545;" > Call anytime! </button>
        </div>

        <div class="card " style="background-color: #FFE6C7; max-width:fit-content " >
            <img src="./img/MobileInbox.png" width="100%" alt="" style="display: mt-5 ">
            <button class="btn w-75 text-white p-2 fw-normal m-4 mt-0"
            style="background-color: #454545;" onclick="window.location.href='{{route('requestform')}}'" >Book now! </button>
        </div>

        <div class="divcon">
            <section class="contact-address-area">
                <div class="container">
                    <div class="sec-title-style1 text-center max-width">
                        <div class="title">Contact Us</div>
                        <div class="text"><div class="decor-left"><span></span></div><p>Quick Contact</p><div class="decor-right"><span></span></div></div>
                        <div class="bottom-text">
                            <p>Bertology takes pride in being the trusted name that has served numerous vehicle owners in Cebu City since 2015. Our dedicated team has earned the confidence of our customers by providing top-notch services for car accessories maintenance, enhancement, and repairs. We are committed to delivering high-quality service, ensuring the satisfaction of every individual who entrusts their vehicle to Bertology.</p>
                        </div>
                    </div>
                            <div class="contact-address-box row">
                                <!--Start Single Contact Address Box-->
                                <div class="col-sm-4 single-contact-address-box text-center">
                                    <div class="icon-holder">
                                        <span class="icon-clock-1">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span>
                                        </span>
                                    </div>
                                    <h3>Special Thanks To</h3>
                                    <h2>Website Development</h2>
                                    <img src="/img/maelstrom2.png" style="height: 80px;width:200px">
                                </div>
                                <!--End Single Contact Address Box-->
                                <!--Start Single Contact Address Box-->
                                <div class="col-sm-4 single-contact-address-box main-branch">
                                    <h3>Bertology</h3>
                                    <div class="inner">
                                        <ul>
                                            <li>
                                                <div class="title">
                                                    <h4>Address:</h4>
                                                </div>
                                                <div class="text">
                                                    <p>Edison St, Cebu City, 6000 Cebu near St.Therese Parish Church</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">
                                                    <h4>Phone<br> Email:</h4>
                                                </div>
                                                <div class="text">
                                                    <p>09617590889 / umaranshobi2424@gmail.com</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">
                                                    <h4>Office Hrs:</h4>
                                                </div>
                                                <div class="text">
                                                    <p>Mon-Sat 10am - 6:00 pm <br>Sun: Closed</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--End Single Contact Address Box-->
                                <!--Start Single Contact Address Box-->
                                <div class="col-sm-4 single-contact-address-box text-center">
                                    <div class="icon-holder">
                                        <span class="icon-question-2">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                        </span>
                                    </div>
                                    <h3>24/7 Service</h3>
                                    <img src="/img/berto.png" style="height: 70%;width:70%">
                                </div>
                                <!--End Single Contact Address Box-->
                    </div>
                </div>
            </section>
            <!--End Contact Address Area-->
        </div>

    </div>
    <div class="div">
        <section class="map_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="map_inner">
                            <h4>Find Bertology on Google Map</h4>
                            <p>The following map shows the location of the Bertology physical branch.</p>
                            <p>Edison St, Cebu City, 6000 Cebu near St.Therese Parish Church</p>
                            <div class="map_bind">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d368.7467799359478!2d123.90135984475411!3d10.331640729083794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99926bffe4f69%3A0x7b0fa439840473c9!2sEdison%20St%2C%20Cebu%20City%2C%206000%20Cebu!5e0!3m2!1sen!2sph!4v1701135385878!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    </div>
</div>

@include('partials._footer')


<style>
@media (max-width: 768px) {

.card {
   display: block;
}

.divcon {
    display:none;
}
</style>
