<div id="top-header">
  <div class="top-bar bg-dark py-2 py-md-0"  id="top-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="top-bar-left text-white text-md-left text-sm-center">
            <i class="fas fa-map-marker-alt"></i>
            <span class="ml-2">soclosedhaka - Dhaka Bangladesh</span>
          </div>
        </div>

        <div class="col-lg-4 ml-lg-auto col-md-6">
          <ul class="list-inline list-unstyled header-socials text-md-right text-sm-center">
            <!-- <li class="list-inline-item"><a href="#!"> <i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#!"> <i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#!"> <i class="fab fa-pinterest-p"></i></a></li>
            <li class="list-inline-item"><a href="#!"> <i class="fab fa-linkedin"></i></a></li> -->
            <li class="list-inline-item"><a href="{{route('login')}}"> <i class="bi bi-person"></i>{{ __("Login") }}</a></li>
            <li class="list-inline-item"><a href="{{route('register')}}"> <i class="fab fa-register"></i>{{ __("Register") }}</a>
            </li>
            <li class="list-inline-item">
              <a>
                <div class="dropdown">
                  <button class="btn btn-secondary btn-sm dropdown-toggle p-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Session()->get('locale') == 'english')
                      En
                      <img src="{{ asset('rappo/images/flag/united-states.png') }}" alt="English Flag" style="width: 20px; height: 20px;" />
                    @else
                      Bn
                      <img src="{{ asset('rappo/images/flag/bangladesh.png') }}" alt="bangla Flag" style="width: 20px; height: 20px;" />
                    @endif
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('locale', 'bangla') }}"><img src="{{ asset('rappo/images/flag/bangladesh.png') }}" alt="bangla Flag" style="width: 20px; height: 20px;" /> Bengali</a>
                    <a class="dropdown-item" href="{{ route('locale', 'english') }}"><img src="{{ asset('rappo/images/flag/united-states.png') }}" alt="English Flag" style="width: 20px; height: 20px;" /> English</a>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="logo-bar d-none d-md-block d-lg-block bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="logo d-none d-lg-block">
            <!-- Brand -->
            <a class="navbar-brand js-scroll-trigger" href="{{route('home')}}">
              <h2 class="mb-0">Rappo</h2>
            </a>
          </div>
        </div>

        <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12 col-md-12 justify-content-md-center">
          <div class="top-info-block d-inline-flex">
            <div class="icon-block">
              <i class="ti-mobile"></i>
            </div>
            <div class="info-block">
              <h5 class="font-weight-500">+7809346657</h5>
              <p>Call Free</p>
            </div>
          </div>

          <div class="top-info-block d-inline-flex">
            <div class="icon-block">
              <i class="ti-email"></i>
            </div>
            <div class="info-block">
              <h5 class="font-weight-500">info@example.com</h5>
              <p>Email Us</p>
            </div>
          </div>
          <div class="top-info-block d-inline-flex">
            <div class="icon-block">
              <i class="ti-time"></i>
            </div>
            <div class="info-block">
              <h5 class="font-weight-500">Mon-Sat 9:00-12.00 </h5>
              <p>Sunday Closed</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>