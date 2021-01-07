<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">{{ config('app.name') }}</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ activeUrl('home') }}"><a href="{{ route('home') }}">@lang('text.menu.accueil')</a></li>
          <li class="{{ activeUrl('about') }}"><a href="{{ route('about') }}">@lang('text.menu.apropos')</a></li>
          <li class="{{ activeUrl('services') }}"><a href="{{ route('services') }}">@lang('text.menu.services')</a></li>
          <!-- <li class="drop-down"><a href="">Blog</a>
            <ul>
              <li><a href="#">Le monde des SI</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{ route('contact') }}" class="get-started-btn scrollto"><i class="icofont icofont-back"></i> @lang('text.menu.contacter')</a>

    </div>
  </header><!-- End Header -->

