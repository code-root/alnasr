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

    .hover-img {
    transition: all 0.25s cubic-bezier(0.02, 0.01, 0.47, 1);
    background: #58028b ; 
    }

    .color-it {
      background: #a821f6;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    background-clip: text !important;
    }

</style>
    <main class="main">

      <div class="cover-home1">
        <div class="video-container">
            <video controls autoplay loop muted playsinline>
                <source src="https://allnasr.com/assets/vvvv.mp4" type="video/mp4">
            </video>
        </div>

        
        <div style="position: relative;padding: 2%;top: -8rem;">
        
                  <div class="col-lg-7">
                    {{-- <span class="text-sm-bold color-gray-600 wow animate__animated animate__fadeInUp">Hello Everyone!</span> --}}
                    <h1 class=" mt-20  wow animate__animated animate__fadeInUp">IS IT
                      <a style="color:#a821f6 !important;" class="typewrite color-it" href="#" data-period="3000" data-type="[ &quot;Graphic Designe&quot;, &quot;Motion 3D&quot;, &quot;Montage&quot; , &quot;Programmers&quot;  , &quot;Motion Graphic&quot; ]"></a></h1>
                    <div class="row">
                      <div class="col-lg-6">
                        <h2 style="color:#58028b !important;">You're looking For ?</h2>
                    <h6 class="color-linear mt-20  d-inline-block mb-40">
                      Welcome to Allnasr, your one-stop destination for all your design needs!
                    </h6>
                      </div>
                    </div>
                  </div>
 
                <hr style="height: 2px;width: 100%;color: #a821f6 !important;opacity: unset;">
              <div class="mb-70">
                <div class="box-topics border-gray-800 bg-gray-850">
                  <div class="row">
                    <div class="col-lg-2" >
                      <p class="mb-15 color-white wow animate__animated animate__fadeInUp ourPro" data-wow-delay="0s" >Some For Our</p>  
                      <h3 style="text-align: center;margin-bottom: 1rem;color: #ffffff;">Production</h3>
                      {{-- <p class="color-gray-500 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">The latest projects that won the admiration of customers, as our team designed them with love ...</p> --}}
                      <div class="box-buttons-slider position-relative wow animate__animated animate__zoomIn ppv" style="margin-left: 6rem;"> 
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
      </div>


      <div style="padding: 2%;">
        <h1 class="color-linear d-inline-block mb-10 wow animate__animated animate__fadeInUp" style="position: relative; color: #311557 !important; ">WHAT WE DO</h1>
            <h3 class="text-lg  wow animate__animated animate__fadeInUp" style="position: relative;right: -9px;top: -2px;font-family: Gilroy-Medium !important;">OUR SERVICES</h3>
            <div class="row mt-70 mb-50">
                @isset($subCategory)
                @foreach ($subCategory as $item )
                @isset($item['image'][0]['url'])
                @if($item['image'][0]['status'] !='video'  )
                <div class="subCategory">
                  <div class="card-style-2 hover-up hover-img wow animate__animated animate__fadeIn" data-wow-delay="0.9s">
                        <div><a  href="/s/{{ $item->name ?? '' }}"> {{ $item->name }}</a></div>
                    </div>
                  </div>
                  @endif
                @endisset
                @endforeach
                @endisset
            </div>

              <h2 class="d-inline-block mb-10 wow animate__animated animate__fadeInUp" style="color: #311557 !important; position: relative;">SOME VIDEOS</h2>
              {{-- <p class="text-lg color-gray-500 wow animate__animated animate__fadeInUp" style="position: relative;">Our best work is in videos made for clients</p> --}}

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
                <h2 class="d-inline-block mb-10 wow animate__animated animate__fadeInUp" style="color: #311557 !important; position: relative;">MEET US</h2>
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
                                            <h6 class="color-white-700" style="color:rgb(255, 255, 255) ; font-size:24px !important" >{{ $item->name }}</h6>
                                            <span class="color-gray-700 text-sm" style="color:rgb(255, 255, 255)" >{{ $item->job_name }}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endisset
                            @endforeach
                    </div>
                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                  <div class="swiper-buttons" style="left :-1rem !important">
                    <div class="swiper-button-prev swiper-button-prev-style-3" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-8b5f89fbf10afd4a7"></div>
                    <div class="swiper-button-next swiper-button-next-style-3" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-8b5f89fbf10afd4a7"></div>
                  </div>
                </div>
              </div>
              @endisset

              <div class="row mt-30" style="text-align: center;">
                  <div class="col-lg-12 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <h3 class="color-linear" style="position: relative;">PARTNERS</h3>
                  </div>
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
