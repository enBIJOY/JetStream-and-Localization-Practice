<div class="main-navigation" id="mainmenu-area">
  <div class="container-fluid px-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable">

      <a class="navbar-brand d-lg-none d-block" href="{{route('home')}}">
        <h4 class="h3 mb-0">Rappo</h4>
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>

      <!-- Collapse -->
      <div class="container collapse navbar-collapse has-dropdown" id="navbarCollapse">
        <!-- Links -->
        <ul class="navbar-nav ">
          </li>
          <li class="nav-item ">
            <a href="{{route('home')}}" class="nav-link js-scroll-trigger">
              Home
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{route('about')}}" class="nav-link js-scroll-trigger">
              About
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{route('service')}}" class="nav-link js-scroll-trigger">
              Services
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{route('pricing')}}" class="nav-link js-scroll-trigger">
              Pricing
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{route('project')}}" class="nav-link js-scroll-trigger">
              Projects
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{route('contact')}}" class="nav-link">
              Contact
            </a>
          </li>
        </ul>

        <ul class="ml-lg-auto list-unstyled m-0">
          <li><a href="{{route('contact')}}" class="btn btn-white btn-circled">Get a quote</a></li>
        </ul>
      </div> 
      <!-- / .navbar-collapse -->
    </nav>
  </div> 
  <!-- / .container -->
</div>