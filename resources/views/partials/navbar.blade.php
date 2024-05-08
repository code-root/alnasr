
<body>
  <style>
    video::-webkit-media-controls {
    display: none !important;
}

video {
    outline: none;
    border: none;
}
  </style>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center">
            <video autoplay loop muted playsinline  style="width: 16%;">
              <source class="mb-10" src="{{asset('assets')}}/home/Intri.mp4"type="video/mp4">
          </video>
            {{-- <div class="preloader-dots"></div> --}}
          </div>
        </div>
      </div>
    </div>

    <header class="header sticky-bar navbar-logo-new ">
      <div class="container">
        <div class="main-header">
          <div class="header-logo"><a class="d-flex" href="/">
            <img class="logo-night" alt="GenZ" src="{{asset('assets')}}/home/image/logo-new.png" >
            <img class="d-none logo-day" alt="GenZ" src="{{asset('assets')}}/home/image/logo-new.png"></a></div>
          <div class="header-nav">
            <nav class="nav-main-menu d-none d-xl-block">
              <ul class="main-menu">
                <li><a  style="color: #7F07D0" href="/">Home</a></li>
                <li class="has-children"><a style="color: #7F07D0" href="/">Services</a>
                  <ul class="sub-menu">
                    @foreach ($category as $item )
                    <li><a  style="color: #ffffff" href="{{ route('showByCategory',$item->name ) }}">{{ $item->name }}</a></li>
                    @endforeach
                  </ul>
                </li>
                 <li><a  style="color: #7F07D0" href="{{ route('portfolio') }}#portfolio">Portfolio</a></li>
                 <li><a  style="color: #7F07D0" href="{{ route('blogs.index') }}">Blogs</a></li>
                <li><a  style="color: #7F07D0" href="{{ route('contact_us') }}">Contact Us</a></li>
              </ul>
            </nav>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
          </div>

           <div class="header-right text-end">
            <div class="switch-button">
              <div class="form-check form-switch" style="font-size: xx-large;">
                <a class=" iconeavbar color-font" href="https://www.instagram.com/allnasr.co?utm_source=qr&igsh=MzNlNGNkZWQ4Mg=="><i class="fa-brands fa-instagram"></i></a> 
                <a class=" iconeavbar color-font" href="https://www.facebook.com/profile.php?id=61555548246249&mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a> 
                <a class="  iconeavbar color-font" href="https://www.instagram.com"><i class="fa-brands fa-x-twitter"></i></a> 
              </div>
            </div>
          </div> 
        </div>
      </div>
    </header>

    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar bg-gray-900">
      <div class="mobile-header-wrapper-inner">
          <div class="mobile-header-content-area">
              {{-- <div class="mobile-logo border-gray-800">
                  <a class="d-flex" href="/">
                      <img class="logo-night" alt="GenZ" src="{{asset('assets')}}/home/image/logo-34-35.png">
                      <img class="d-none logo-day" alt="GenZ" src="{{asset('assets')}}/home/image/logo-27-26.png">
                  </a>
              </div> --}}
              <div class="perfect-scroll">
                  <div class="mobile-menu-wrap mobile-header-border">
                      <nav class="mt-15">
                          <ul class="mobile-menu font-heading">
                              <li class="has-children">
                                  <a href="/">Home</a>
                              </li>
                              <li class="has-children"><a class="active" href="/">Services</a>
                                <ul class="sub-menu">
                                  @foreach ($category as $item )
                                  <li><a style="color: white" href="{{ route('showByCategory',$item->name ) }}">{{ $item->name }}</a></li>
                                  @endforeach
                                </ul>
                              </li>
                              <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                              <li><a href="{{ route('contact_us') }}">Contact</a></li>
                          </ul>
                      </nav>
                  </div>
                  <div class="site-copyright color-gray-400 mt-30" style="font-size: 3rem; text-align: center;">
                    {{-- <div class="form-check form-switch"> --}}
                      <a class="  color-font" href="https://www.instagram.com/allnasr.co?utm_source=qr&igsh=MzNlNGNkZWQ4Mg=="><i class="fa-brands fa-instagram"></i></a> 
                      <a class="  color-font" href="https://www.facebook.com/profile.php?id=61555548246249&mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a> 
                      <a class="   color-font" href="https://www.instagram.com"><i class="fa-brands fa-x-twitter"></i></a> 
                    {{-- </div> --}}
                  </div>
              </div>
          </div>
      </div>
  </div>
  