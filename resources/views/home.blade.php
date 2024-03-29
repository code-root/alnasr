    @include('partials.header')
    @include('partials.navbar')
<style>
     .check-icon {
            margin-right: 10px;
            font-size: 20px;
            transition: transform 0.3s ease-in-out;
        }
        .check-icon:hover {
            transform: scale(1.2);
        }

     .video-container {
        position: relative;
        top: -6rem;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    video {
        width: 100%;
        height: auto;
    }
    video::-webkit-media-controls {
        display: none !important;
    }

</style>
    <main class="main">

      <div class="cover-home1">
        <div class="video-container">
            <video controls autoplay loop muted playsinline>
                <source src="https://allnasr.com/assets/vvvv.mp4" type="video/mp4">
            </video>
        </div>

        
        <div class="container">
          <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10 col-lg-12">
              <div class="banner">
                <div class="row align-items-end">
                  <div class="col-lg-6 pt-100">
                    {{-- <span class="text-sm-bold color-gray-600 wow animate__animated animate__fadeInUp">Hello Everyone!</span> --}}
                    <h1 class="color-gray-50 mt-20 mb-20 wow animate__animated animate__fadeInUp">IS IT<a class="typewrite color-linear" href="#" data-period="3000" data-type="[ &quot;graphic designe&quot;, &quot;Motion 3D&quot;, &quot;Montage&quot; , &quot;programmers&quot;  , &quot;motion graphic&quot; ]"></a></h1>
                    <div class="row">
                      <div class="col-lg-12">
                        <h3 class="color-gray-50">You're looking F o r ?</h3>
                    <h6 class="color-linear d-inline-block mb-30">
                      Welcome to Al-Nasr Company, where creativity is our language and design is our passion
                    </h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-lg-6 text-center">
                    <div class="banner-img position-relative wow animate__animated animate__fadeIn"><img  src="{{asset('assets')}}/home/post_24048560428620.png" alt="al-nasr">
                      {{-- <div class="pattern-1"><img src="{{asset('assets')}}/home/image/logo-34-35.png" style="width: 11%; " alt="al-nasr"></div> --}}
                      {{-- <div class="pattern-2"><img src="{{asset('assets')}}/home/image/logo-34-35.png" alt="al-nasr"  style="width: 11%; "></div> --}}
                      {{-- <div class="pattern-3"><img src="{{asset('assets')}}/home/image/logo-34-35.png" alt="al-nasr"></div> --}}
                      {{-- <div class="pattern-4"><img src="{{asset('assets')}}/home/image/logo-34-35.png" alt="al-nasr"></div> --}}
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-70">
                <div class="box-topics border-gray-800 bg-gray-850">
                  <div class="row">
                    <div class="col-lg-2">
                      <h5 class="mb-15 color-white wow animate__animated animate__fadeInUp" data-wow-delay="0s">SOME OF OUR PRODUCTION</h5>
                      {{-- <p class="color-gray-500 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">The latest projects that won the admiration of customers, as our team designed them with love ...</p> --}}
                      <div class="box-buttons-slider position-relative wow animate__animated animate__zoomIn">
                        <div class="swiper-button-prev swiper-button-prev-style-1"></div>
                        <div class="swiper-button-next swiper-button-next-style-1"></div>
                      </div>
                    </div>
                    <div class="col-lg-10">
                      <div class="box-swiper">
                        <div class="swiper-container swiper-group-5">
                            <div class="swiper-wrapper">
                                @isset($projects)
                                    @foreach ($projects as $item)
                                        @isset($item['image'][0]['url'])
                                        @if($item['image'][0]['status'] != 'video')
                                            <div class="swiper-slide">
                                                <div class="card-style-1">
                                                            <a href="/{{ $item['image'][0]['url'] }}">
                                                                <div class="card-image">
                                                                <img src="/{{ $item['image'][0]['url'] }}" alt="al-nasr">
                                                                <div class="card-info">
                                                                    <div class="info-bottom">
                                                                        <h6 class="color-white mb-5">{{ $item->name }}</h6>
                                                                        <p class="text-xs color-gray-500">{{ $item->category->name ?? '' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                </div>
                                            </div>
                                            @endif
                                        @endisset
                                    @endforeach
                                @endisset
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <h2 class="color-linear d-inline-block mb-10 wow animate__animated animate__fadeInUp">WHAT WE DO</h2>
            {{-- <p class="text-lg color-gray-500 wow animate__animated animate__fadeInUp">Most requested services</p> --}}
            <div class="row mt-70 mb-50">
                @isset($subCategory)
                @foreach ($subCategory as $item )
                @isset($item['image'][0]['url'])
                @if($item['image'][0]['status'] !='video'  )
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.1s">
                        {{-- <div > --}}
                                {{-- <a href="/{{ $item['image'][0]['status'] }}">
                                  <img src="/{{ $item['image'][0]['url'] }}" alt="{{ $item->name }}"
                                  ></a> --}}
                        {{-- </div> --}}
                        <div><a class="color-gray-500" href="/s/{{ $item->name ?? '' }}"> {{ $item->name }}</a></div>
                    </div>
                  </div>
                  @endif
                @endisset
                @endforeach
                @endisset
            </div>


            </div>


              <h2 class="color-linear d-inline-block mb-10 wow animate__animated animate__fadeInUp">Our best work in videos</h2>
              <p class="text-lg color-gray-500 wow animate__animated animate__fadeInUp">Our best work is in videos made for clients</p>

                <div class="row mt-70">
                    @isset($projects)
                    @foreach ($projects as $item )
                    @isset($item['image'][0]['url'])
                    @if($item['image'][0]['status'] == 'video')
                    <div class="col-lg-4">
                        <div class="project" data-category="{{ $item->category->name ?? '' }} all">
                          <div class="item-content">
                            <div class="card-style-1 hover-up mb-30" data-wow-delay=".1s">
                              <div class="card-image">
                                <video width="100%" height="100%" controls autoplay loop muted style="position: relative;border-radius: 19px !important;">
                                    <source src="/{{ $item['image'][0]['url'] }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                  <div class="card-info @if($item['image'][0]['status'] == 'video')  @else  card-bg-2 @endif">
                                    <div class="info-bottom mb-15">
                                      <h3 class="color-white mb-10">{{ $item->name }}</h3>
                                    </div>
                                  </div>
                                </a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endif
                    @endisset
                    @endforeach
                    @endisset
                </div>



                @isset($latestOurTeamMembers)
              <div class="text-center mt-70 mb-50">
                <h2 class="color-linear d-inline-block mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">MEET US</h2>
            </div>
            <div class="box-testimonials mb-150 animate__fadeIn mb-100">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-3 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper pt-5" id="swiper-wrapper-8b5f89fbf10afd4a7" aria-live="off" style="transform: translate3d(-1505.33px, 0px, 0px); transition-duration: 0ms;">
                            @foreach ($latestOurTeamMembers as $item )
                            @isset($item['image'][0]['url'])

                            <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 9">
                                <div class="card-testimonials bg-gray-850 border-gray-100 hover-up">
                                    <div class="box-author mb-10">
                                        <img src="/{{ $item['image'][0]['url'] }}" alt="{{ $item->name }}">
                                        <div class="author-info">
                                            <h6 class="color-white-700">{{ $item->name }}</h6><span class="color-gray-700 text-sm">{{ $item->job_name }}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endisset
                            @endforeach
                    </div>
                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                  <div class="swiper-buttons">
                    <div class="swiper-button-prev swiper-button-prev-style-3" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-8b5f89fbf10afd4a7"></div>
                    <div class="swiper-button-next swiper-button-next-style-3" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-8b5f89fbf10afd4a7"></div>
                  </div>
                </div>
              </div>
              @endisset

              <div class="row align-items-end mt-30">
                <div class="col-lg-9 wow animate__animated animate__fadeIn">
                  <h3 class="color-linear">PARTNERS</h3>
                </div>
                <div class="col-lg-3 text-lg-end mt-15 hover-up wow animate__animated animate__fadeIn" data-wow-delay="0.2s"><a class="link-brand-1" href="#">Learn More</a></div>
              </div>

              <div class="list-logos mt-50 mb-30">
                <div class="container">
                  <div class="row">
                    <div class="swiper-container swiper-group-1">
                      <div class="swiper-wrapper wow animate__animated animate__fadeIn">
                        @isset($ourClients)
                        @foreach ($ourClients as $item)
                            @isset($item['image'][0]['url'])
                                {{-- @if(file_exists(public_path($item['image'][0]['url']))) --}}
                                    <div class="swiper-slide">
                                        <a href="#"><img src="{{ $item['image'][0]['url'] }}" alt="{{ $item->name }}"></a>
                                    </div>
                                {{-- @endif --}}
                            @endisset
                        @endforeach
                    @endisset
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </main>
   @include('partials.footer')
<script>
    $(document).ready(function() {

// Gets the video src from the data-src on each button

    var videoSrc;
    $('.video-btn').click(function() {

        videoSrc = $(this).data( "src" );

    });



// when the modal is opened autoplay it
$('#myModal').on('shown.bs.modal', function (e) {

// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");

})



// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',videoSrc);
})






// document ready
});

</script>
