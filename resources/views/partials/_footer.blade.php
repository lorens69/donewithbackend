
<footer class="footer text-light bottom-0 d-flex justify-content-around footerbackground">

  <div class="container w-25 h-100  d-flex flex-column justify-content-center mt-auto mb-auto  ">
    <div class="d-flex position-relative justify-content-center  ">
      <img class="footerlogo" src="./img/bertologylogo.png">
      <span style="border-right: 1px solid white;margin-left: 20px;margin-right: 20px;border-right-width: 2px; height: 100px;" id="standingline" name="standingline"></span>
      <div class="maelstromlogo">
        <img src="/img/maelstrom2ndlogo.png" height="80px" width="auto">
      </div>
    </div>
    <h5 class="mb-0 mt-sm-4 text-center">
      Get your car accessories installed now for free!
      </h4>

  </div>

  <div class="container d-flex flex-column justify-content-center m-auto align-items-center mt-2 mb-2  " style="width: fit-content;">
    <h4 class="fw-bold ">Useful Links</h4>
    <div class="usefullinks">
      <h6>
        <a href="{{ route('home') }}">Home</a>
      </h6>
      <h6>
        <a href="{{ route('product') }}">Products</a>
      </h6>
      <h6>
        <a href="{{ route('service') }}">Services</a>
      </h6>
      <h6>
        <a href="{{ route('gallery') }}">Gallery</a>
      </h6>
      <h6>
        <a href="{{ route('contact') }}">Contact Us</a>
      </h6>

    </div>
  </div>

  <div class="container w-25 h-100 d-flex flex-column justify-content-center align-items-center mt-auto mb-auto ">

    <h3>Connect with us now</h3>
    <div class="brand d-flex">
      <i class="fa-brands fa-facebook footericons"></i>
      <i class="fa-brands fa-facebook-messenger footericons"></i>
    </div>

  </div>

  <style>
     @media(min-width:180px) and (max-width:320px){

      .footer {
        text-align: center;
      }
      .footerlogo{
        height: 59px;
        width: 83px;
        margin-bottom: 8px;
      }
      

      .footer h2 {
        font-size: 1.5rem;
        margin-top: 10px;
      }

      .footer h5 {
        font-size: 9px;
      }
      .footer h4 {
        font-size: 13px;
      }
      .footer h6 {
        font-size: 11px;
        margin-bottom:4px;
      }

      .footer h3 {
        font-size: 14px;
      }
      .footericons{
        color: #FF6000;
        font-size: 20px;
        margin: 10px;
      }

      #mael {
        display: none;
      }

      #mael2 {
        display: none;
      }

      #standingline {
       display: none;
      }
      .maelstromlogo{
        display: none;
      }
      .footerbackground{
        background-color: #1E1B1B;
        padding-top: 5px;
        padding-bottom: 5px;
        font-family: 'Raleway', sans-serif;
      }
      .usefullinks{
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
      }
      .usefullinks a{
        text-decoration: none;
        color: white;
      }
      .usefullinks a:hover{
        text-decoration: none;
        color: #FF6000;
      }



    }
    @media(min-width:321px) and (max-width:767px){
      .footer {
        text-align: center;
      }

      .footer img {
        width: 80%;
        max-width: 150px;
      }
      .footericons{
        color: #FF6000;
        font-size: 35px;
        margin: 10px;
      }

      .footer h2 {
        font-size: 1.5rem;
        margin-top: 10px;
      }

      .footer h5 {
        font-size: 12px;
      }
      .footer h4 {
        font-size: 15px;
      }

      .footer h3 {
        font-size: 1.2rem;
      }

      #mael {
        display: none;
      }

      #mael2 {
        display: none;
      }

      #standingline {
       display: none;
      }
      .maelstromlogo{
        display: none;
      }
      .footerbackground{
        background-color: #1E1B1B;
        padding-top: 5px;
        padding-bottom: 5px;
        font-family: 'Raleway', sans-serif;
      }
      .usefullinks{
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
      }
      .usefullinks a{
        text-decoration: none;
        color: white;
      }
      .usefullinks a:hover{
        text-decoration: none;
        color: #FF6000;
      }
      .footerlogo{
        height: 80px;
        width: 100px;
      }



    }

    @media (min-width: 768px) {
      .footerbackground{
        background-color: #1E1B1B;
        height: 30vh; 
        font-family: 'Raleway', sans-serif;
      }
      .footericons{
        color: #FF6000;
        font-size: 35px;
        margin: 10px;
      }
      .usefullinks{
        width: 203px;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
      }
      .usefullinks a{
        text-decoration: none;
        color: white;
      }
      .usefullinks a:hover{
        text-decoration: none;
        color: #FF6000;
      }
      .footerlogo{
        height: 80px;
        width: 100px;
      }

      

    }
  </style>


</footer>
