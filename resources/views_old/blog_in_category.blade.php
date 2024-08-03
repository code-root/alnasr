@include('partials.header')
@include('partials.navbar')

<main class="main">
    <div class="cover-home1">
      {{-- <div class="container"> --}}
        <div class="row home-div">

          <div class="col-xl-10 col-lg-12">
            <div class="row align-items-end mt-50">
              <div class="col-lg-7 mb-20">
                <div class="d-inline-block position-relative">
                  <h1 class=" mb-20 color-linear wow animate__animated animate__fadeIn">{{ $category->name }}</h1>
                  {{-- <span class="btn btn-linear-small btn-number-arts">{{ $category->blog()->count() }} blog</span> --}}
                </div>
                <p class="color-gray-500 text-base wow animate__animated animate__fadeIn">{{$category->title }}</p>
              </div>
            </div>
          </div>
            <div class="mb-70" >
                <div class="box-topics border-gray-800 bg-gray-850">
                  <div class="row">
                    <div class="col-lg-2">
                      <h5 class="mb-15  wow animate__animated animate__fadeInUp" data-wow-delay="0s" style="color: #ffffff">Latest projects</h5>
                      <p class="color-gray-500 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">The latest projects that won the admiration of customers</p>
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
                                            <div class="swiper-slide">
                                                <div class="card-style-1">
                                                    <a href="/{{ $item['image'][0]['url'] }}">
                                                        <div class="card-image">
                                                            @if($item['image'][0]['status'] === 'video')
                                                                {{-- <video width="100%" height="150px" controls class="video-btn"  autoplay loop muted data-target="#myModal">
                                                                    <source src="/{{ $item['image'][0]['url'] }}" type="video/mp4">
                                                                    Your browser does not support the video tag.
                                                                </video> --}}
                                                            @else
                                                                <img src="/{{ $item['image'][0]['url'] }}" alt="al-nasr">
                                                            @endif
                                                            <div class="card-info">
                                                                <div class="info-bottom">
                                                                    <h6 class=" mb-5">{{ $item->name }}</h6>
                                                                    <p class="text-xs color-gray-500">{{ $item->category->name ?? '' }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
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


@isset($services)

                             <div class="row mt-50 mb-30">
                                @php
                                    $x = 0;
                                @endphp
                                @foreach($services as $option)
                                    @php
                                        $x++;
                                        $label = (object)[];

                                        if ($x == 2) {
                                            $label->class = 'lbl-success';
                                            $label->text = 'Popular';
                                        } elseif ($x == 3) {
                                            $label->class = 'lbl-danger';
                                            $label->text = 'Premium';
                                        } else {
                                            $label->class = '';
                                            $label->text = '';
                                        }
                                    @endphp

                                    <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay="1">
                                        <div class="card-pricing border-gray-800 bg-gray-850 mb-30">
                                            <label class="{{ $label->class }} text-base color-gray-900">{{ $label->text }}</label>
                                            <div class="card-pricing-top border-gray-800">
                                                {{-- <h3 class=" mb-10">Business</h3> --}}
                                                <h3 class=" mb-10">{{ $option->name }}</h3>
                                                @if($option->price_before && $option->price_before > $option->price)
                                                    <div class="discount">
                                                        <s class="text-lg color-gray-500 mb-15" style="color: #311667 !important;">${{ $option->price_before }}</s>
                                                        <p class="text-lg color-gray-500 mb-15" style="color: #311667 !important;">${{ $option->price }}</p>
                                                    </div>
                                                @else
                                                    <p class="text-lg color-gray-500 mb-15"  >${{ $option->price }}</p>
                                                @endif
                                                <p class="text-base color-gray-500 mb-30"  >{{ $option->description }}</p>
                                                <button type="button" style="background-color: #7f07d0;width: 100%" class="btn btn-lg btn-danger mt-3 btn-order-now"
                                                onclick="changeValueAndOpenModal('{{ $option->id }}')" >
                                                <i class="fas fa-shopping-cart"></i>
                                                Order now
                                            </button>
                                          </div>
                                            <div class="card-pricing-bottom">
                                                <h6 class=" mb-25">What you get:</h6>
                                                <ul class="list-checked">
                                        @if($option->features)
                                        @php
                                            $features = explode("\n", $option->features);
                                        @endphp
                                            @foreach($features as $feature)
                                            <li>{{ $feature }}</li>
                                            <br>
                                            @endforeach
                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
            @endisset

            <h2 class="color-linear d-inline-block mb-10 wow animate__animated animate__fadeInUp">Our best work in videos</h2>

            <div class="row mt-70">
                @isset($projects)
                @foreach ($projects as $item )
                @isset($item['image'][0]['url'])
                {{-- @if(file_exists(public_path($item['image'][0]['url']))) --}}

                            @if($item['image'][0]['status'] === 'video')
            <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                <div class="vv hover-up">
                        <a href="/{{ $item['image'][0]['url'] }}">
                            <video width="100%" height="100%" controls class="video-btn" autoplay loop muted data-target="#myModal" style="position: relative;border-radius: 19px !important;">
                                <source src="/{{ $item['image'][0]['url'] }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </a>
                    </div>
                </div>
                            @endif

                {{-- @endif --}}
                @endisset
                @endforeach
                @endisset
            </div>


            <div class="mb-70"></div>
            <h2 class="color-linear d-inline-block mb-10 wow animate__animated animate__fadeInUp">Our services</h2>
            <p class="text-lg color-gray-500 wow animate__animated animate__fadeInUp">Most requested services</p>
            <div class="row mt-70 mb-50">
                @isset($subCategory)
                @foreach ($subCategory as $item )
                @isset($item['image'][0]['url'])
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="card-style-33 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.1s">
                      <div class="card-image"><a href="/{{ $item['image'][0]['url'] }}"><img src="/{{ $item['image'][0]['url'] }}" alt="{{ $item->name }}"></a></div>
                      <div class="card-info"><a class="color-gray-500" href="/s/{{ $item->name ?? '' }}"> {{ $item->name }}</a></div>
                    </div>
                  </div>

                  
                  {{-- @endif --}}
                @endisset
                @endforeach
                @endisset
              </div>


              
              <div class="mb-70"></div>
              <h2 class="color-linear d-inline-block mb-10 wow animate__animated animate__fadeInUp" style="    font-style: normal;
              font-weight: 400;
              font-size: 66.9px;
              line-height: 77px;
              text-align: center;
              color: #A201FF;">BLOG</h2>            

              <div class="mt-50 mb-50">
                <div class="row mt-50 mb-10">
                  @isset($blog)
                  @foreach ($blog as $item )
                  @isset($item['image'][0]['url'])
                  {{-- @if(file_exists(public_path($item['image'][0]['url']))) --}}
                  <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                      <div class="card-blog-1 hover-up">
                        <img src="/{{ $item['image'][0]['url'] }}" style="width: 100%;border-radius: 28px;height: 64%;" alt="{{  $item->name }}"></a>

                        <div class="card-image mb-20">
                          <a href="/b/{{ $item->category->name ?? '' }}/{{ $item->name ?? '' }}">
                          </div>
                        <div style="margin: 21px">
                          <h5 class=" mt-20 blog-name-h5" >{{  $item->name }}</h5>
                          <div class="blog-name-div">
                            <a class="color-gray-700 text-sm" href="/c/{{ $item->category->name ?? '' }}" > #{{ $item->category->name ?? '' }}</a>
                            <a class="color-gray-700 text-sm"  href="/s/{{ $item->subCategory->name ?? '' }}"> #{{ $item->subCategory->name ?? '' }}</a>
                        <span class="color-gray-700 text-sm timeread">{{ $item->updated_at }}</span>
                         
                            
                          </div>
                   
                            </div>
                          </div>
                          {{-- <div class="row align-items-center mt-25">
                            <div class="col-7">
                              <div class="box-author"><img src="https://ui-avatars.com/api/?name={{ $item->users->name ?? '' }}" alt="al-nasr">
                                <div class="author-info">
                                  <h6 class="color-gray-700">views</h6><span class="color-gray-700 text-sm">{{ $item->views() }}</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-5 text-end"><a class="readmore color-gray-500 text-sm" href="/b/{{ $item->category->name ?? '' }}/{{ $item->name ?? '' }}"><span>Read more</span></a></div>
                          </div> --}}
                        {{-- </div> --}}
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
  </main>
@include('partials.footer')
