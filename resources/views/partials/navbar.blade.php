
<body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img class="mb-10" src="{{asset('assets')}}/home/image/1.png" alt="">
            <div class="preloader-dots"></div>
          </div>
        </div>
      </div>
    </div>

    <header class="header sticky-bar navbar-logo-new ">
      <div class="container">
        <div class="main-header">
          <div class="header-logo"><a class="d-flex" href="/"><img class="logo-night" alt="GenZ" src="{{asset('assets')}}/home/image/logo-new.png" ><img class="d-none logo-day" alt="GenZ" src="{{asset('assets')}}/home/image/logo-new.png"></a></div>
          <div class="header-nav">
            <nav class="nav-main-menu d-none d-xl-block">
              <ul class="main-menu">
                <li><a class="color-gray-500" href="/">Home</a></li>
                <li class="has-children"><a class="active" href="/">Services</a>
                  <ul class="sub-menu">
                    @foreach ($category as $item )
                    <li><a class="color-gray-500" href="{{ route('showByCategory',$item->name ) }}">{{ $item->name }}</a></li>
                    @endforeach
                  </ul>
                </li>
                 <li><a class="color-gray-500" href="{{ route('page_about') }}#Projects"> Portoflio</a></li>
                 <li><a class="color-gray-500" href="{{ route('page_about') }}">Who are we</a></li>
                <li><a class="color-gray-500" href="{{ route('contact_us') }}">Contact</a></li>
              </ul>
            </nav>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
          </div>
           {{-- <div class="col-lg-4 text-center text-lg-end">
            <div class="box-socials">
              <div class="d-inline-block mr-30 wow animate__animated animate__fadeIn" data-wow-delay=".2s"><a class="icon-socials icon-linked color-gray-500" href="https://www.linkedin.com">LinkedIn</a></div>
              <div class="d-inline-block wow animate__animated animate__fadeIn" data-wow-delay=".4s"><a class="icon-socials icon-insta color-gray-500" href="https://www.instagram.com">Instagram</a></div>
            </div>
          </div>  --}}
           <div class="header-right text-end">
            <div class="switch-button">
              <div class="form-check form-switch" style="font-size: xx-large;">
                <a class="icon-socials color-gray-500" href="https://www.instagram.com/allnasr.co?utm_source=qr&igsh=MzNlNGNkZWQ4Mg=="><i class="fa-brands fa-instagram"></i></a> 
                <a class="icon-socials color-gray-500" href="https://www.facebook.com/profile.php?id=61555548246249&mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a> 
                <a class="icon-socials color-gray-500" href="https://www.instagram.com"><i class="fa-brands fa-x-twitter"></i></a> 
              </div>
            </div>
            {{-- <a class="icon-socials icon-insta color-gray-500" href="https://www.instagram.com">Instagram</a> --}}
            {{-- <div class="d-inline-block mr-30 wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="icon-socials icon-twitter color-gray-500" href="https://twitter.com">Twitter</a></div> --}}
          </div> 
        </div>
      </div>
    </header>

    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar bg-gray-900">
        <div class="mobile-header-wrapper-inner">
          <div class="mobile-header-content-area">
            <div class="mobile-logo border-gray-800"><a class="d-flex" href="/"><img class="logo-night" alt="GenZ" src="{{asset('assets')}}/home/image/logo-34-35.png"><img class="d-none logo-day" alt="GenZ" src="{{asset('assets')}}/home/image/logo-27-26.png" ></a></div>
            <div class="perfect-scroll">
              <div class="mobile-menu-wrap mobile-header-border">
                  <nav class="mt-15">
                      <ul class="mobile-menu font-heading">
                          <li class="has-children" > <a  href="/">Home</a></li>
                          <li >
                            <a href="/">Service</a>
                              <ul class="sub-menu">
                                @foreach ($category as $item )
                                <li><a  href="{{ route('showByCategory',$item->name ) }}">{{ $item->name }}</a></li>
                                @endforeach
                              </ul>
                          </li>
                          <li><a  href="{{ route('page_about') }}">Portofli</a></li>
                          <li><a  href="{{ route('contact_us') }}">Contact</a></li>
                          <li><a href="">Contact</a></li>
                      </ul>
                  </nav>

              </div>

              <div class="site-copyright color-gray-400 mt-30">Copyright 2023 &copy; al-nasr.<br>Designed by<a href="https://wa.me/201001995914" target="_blank">&nbsp; Mostafa Elbagory</a></div>
            </div>
          </div>
        </div>
      </div>
