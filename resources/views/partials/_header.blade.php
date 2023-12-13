<style>
    .navbar-collapse .active::after {
      content: "";
      position: absolute;
      bottom: 5px; /* Adjust the distance from the text */
      left: 50%;
      width: 50px; /* Adjust the width of the underline */
      height: 2px; /* Adjust the thickness of the underline */
      background-color: #FF6000; /* Set the color of the underline */
      transform: translateX(-50%); /* Center the underline under the text */
    }

  </style>

  <header style="background-color: #1E1B1B; position: sticky; top: 0; z-index: 5; font-family: 'Raleway', sans-serif;">
    <nav class="navbar navbar-expand-sm navbar-dark m-0">
      <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="./img/bertologylogo.png" alt="" width="70px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto text-center" >
            <!-- Add 'active' class to the parent li when any child link is active -->
            <li class="nav-item position-relative {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link my-1 mx-4" href="{{ route('home') }}">Home</a>
              </li>
            <li class="nav-item position-relative {{ request()->is('about') ? 'active' : '' }}">
              <a class="nav-link my-1 mx-4" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item position-relative {{ request()->is('service') ? 'active' : '' }}">
              <a class="nav-link my-1 mx-4" href="{{ route('service') }}">Services</a>
            </li>
            <li class="nav-item position-relative {{ request()->is('product') ? 'active' : '' }}">
              <a class="nav-link my-1 mx-4" href="{{ route('product') }}">Products</a>
            </li>
            <li class="nav-item position-relative {{ request()->is('gallery') ? 'active' : '' }}">
              <a class="nav-link my-1 mx-4" href="{{ route('gallery') }}">Gallery</a>
            </li>
            <li class="nav-item position-relative {{ request()->is('contact') ? 'active' : '' }}">
              <a class="nav-link my-1 mx-4" href="{{ route('contact') }}">Contact Us</a>
            </li>
            <li class="nav-item position-relative {{ request()->is('profileinfo') ? 'active' : '' }}">
              <a class="nav-link my-1 mx-4" href="{{ route('mydetails') }}"><i class="fa-solid fa-user" style="font-size: 20px; color: #F24E1E;"></i></a>
            </li>
            <li class="d-flex nav-item position-relative {{ request()->is('cart') ? 'active' : '' }}" style="justify-content: center;margin-right: 15px;">
              <a class="nav-link my-1" href="{{ route('carts') }}"><i class="fa-solid fa-cart-shopping my-1 mx-3" style="font-size: 20px; color: #F24E1E;"></i></a>
              <span class="cartnumber">1</span>
            </li>
            @if(Auth::user())
              <li class="nav-item position-relative">
                <a class="nav-link my-1 mx-4" href="{{ route('logout') }}">Logout</a>
              </li>
            @else
              <li class="nav-item position-relative">
                <a class="nav-link my-1 mx-4" href="{{ route('maglogin') }}">Login</a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <style>
    @media(min-width:180px) and (max-width:425px){
      .cartnumber{
        margin-left: -12px;
        color:white;
      }
    }
    @media(min-width:426px){
      .cartnumber{
        margin-left: -21px;
        color:white;
      }
    }
  </style>
