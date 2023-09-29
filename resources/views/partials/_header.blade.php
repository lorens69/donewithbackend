<style>
  .navbar-collapse .active::after {
    content: "";
    position: absolute;
    bottom: 25%;
    right: 15%;
    width: 70%;
    border-bottom: 1px solid #FF6000;
    border-bottom-width: 2px;
    margin-bottom: -4px;
  }
</style>
<header style="background-color: #1E1B1B;position: sticky;top: 0;z-index: 5;">
  <nav class="navbar navbar-expand-lg navbar-dark  m-0  " >
    <div class="container-fluid me-5 ms-5">
      <a class="navbar-brand" href="#"><img src="./img/bertologylogo.png" alt="" width="70px" height="50px" style="margin-left: -30px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item position-relative ">
            <a class="nav-link my-1 mx-4  {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item position-relative ">
            <a class="nav-link my-1 mx-4 {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
          </li>
          <li class="nav-item position-relative ">
            <a class="nav-link my-1 mx-4  {{ request()->is('service') ? 'active' : '' }}" href="{{ route('service') }}">Services</a>
          </li>
          <li class="nav-item position-relative ">
            <a class="nav-link my-1 mx-4  {{ request()->is('product') ? 'active' : '' }}" href="{{ route('product') }}">Products</a>
          </li>
          <li class="nav-item position-relative ">
            <a class="nav-link my-1 mx-4  {{ request()->is('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
          </li>
          <li class="nav-item position-relative ">
            <a class="nav-link my-1 mx-4  {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
          </li>
          <li class="nav-item position-relative ">
            <a class="nav-link my-1 mx-4  {{ request()->is('profileinfo') ? 'active' : '' }}" href="{{ route('mydetails') }}"><i class="fa-solid fa-user"  style="font-size: 20px;color: #F24E1E;"></i></a>
            {{-- <a class="nav-link my-1 mx-4  {{ request()->is('bookingrequests') ? 'active' : '' }}" href="{{ route('bookingrequests') }}"><i class="fa-solid fa-user"  style="font-size: 20px;color: #F24E1E;"></i></a>
            <a class="nav-link my-1 mx-4  {{ request()->is('purchasehistory') ? 'active' : '' }}" href="{{ route('purchasehistory') }}"><i class="fa-solid fa-user"  style="font-size: 20px;color: #F24E1E;"></i></a> --}}
          </li>
          <li class="nav-item position-relative ">
            <a class="nav-link my-1 mx-4  {{ request()->is('cart') ? 'active' : '' }}" href="{{ route('carts') }}"><i class="fa-solid fa-cart-shopping my-1 mx-4" style="font-size: 20px;color: #F24E1E;"></i></a>
          </li>

        @if(Auth::user())
          <li class="nav-item position-relative ">
            <a class="nav-link my-1 mx-4  {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('logout') }}">Logout</a>
          </li>
        @else
        <li class="nav-item position-relative ">
            <a class="nav-link my-1 mx-4  {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('maglogin') }}">Login</a>
          </li>
        @endif

        </ul>


        </div>
      </div>
    </nav>
  </header>
