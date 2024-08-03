@include('partials.header')
@include('partials.navbar')

<main class="main">
    <div class="cover-home1">
      <div class="container">
        <div class="row">
          <div class="col-xl-1"></div>
          <div class="col-xl-10 col-lg-12">

            <div class="col-xl-10 col-lg-12 m-auto">
                <div class="text-center mt-70">
                    <h1 class="color-linear d-inline-block mb-30">About</h1>
                    <p class="text-xl ">
                      Al-Nasr Company’s vision is to be a leading and accredited entity in the field of design, montage, and electronic websites.
                    </p>
                </div>
                <div class="text-center mt-70">
                  <h3 class="color-linear d-inline-block mb-30">Vision</h3>
                  <p class="text-xl ">
                    To empower individuals and businesses worldwide by providing intuitive and accessible design and programming solutions, enabling them to bring their ideas to life and thrive in the digital landscape.
                  </p>
              </div>
              <div class="text-center mt-70">
                <h4 class="color-linear d-inline-block mb-30">Mission</h4>
                <p class="text-xl ">
                  Our mission is to simplify the process of designing and programming by offering a comprehensive range of services tailored to meet the diverse needs of our clients. Through user-friendly platforms, innovative tools, and expert guidance                </p>
            </div>
            </div>

            <div  id="Projects" class="text-center mt-70 mb-50">
              <h2 class="color-linear d-inline-block mb-20 wow animate__animated animate__fadeInUp">My Latest Projects</h2>
              <p class="text-lg  wow animate__animated animate__fadeInUp">The convention is the main event of the year for professionals in<br class="d-none d-lg-block">the world of design and architecture.</p>
            </div>
            <div  class="row text-center filter-nav">
                <div class="col-lg-12">
                    <span class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <span class="btn btn-border-linear btn-filter hover-up" data-filter="">All</span></span>

                    @isset($category)
                    @foreach ($category as $ca)
                    <span class="wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <span class="btn btn-border-linear btn-filter hover-up" data-filter="{{ $ca->name }}">{{ $ca->name }}</span>
                    </span>
                    @endforeach
                    @endisset
                    </div>
                </div>
            <div class="mt-70 mb-50">
              <div class="row">
                @isset($projects)
                @foreach ($projects as $item)
                @isset($item['image'][0]['url'])
                <div class="col-lg-4">
                    <div class="project" data-category="{{ $item->category->name ?? '' }} all">
                      <div class="item-content">
                        <div class="card-style-1 hover-up mb-30" data-wow-delay=".1s">
                          <div class="card-image">
                            @if($item['image'][0]['status'] == 'video')
                            <video width="100%" height="100%" controls autoplay loop muted style="position: relative;border-radius: 19px !important;">
                                <source src="/{{ $item['image'][0]['url'] }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @else
                            <a href="/{{ $item['image'][0]['status'] }}"><img src="/{{ $item['image'][0]['url'] }}" alt="{{ $item->name }}"></a>
                        @endif


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
                @endisset
                @endforeach
                @endisset
              </div>
            </div>

            <div class="text-center mt-30">
              <h2 class="color-linear d-inline-block mb-10 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">FAQs</h2>
            </div>
            <div class="box-faqs mb-70">
              <div class="accordion" id="accordionFaqs">
                <div class="accordion-item border-gray-800 wow animate__animated animate__fadeIn">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="heading-4 ">Understanding company billing and accounts</span></button>
                  </h2>
                  <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">Nulla non sollicitudin. Morbi sit amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula eleifend velit, luctus mattis ante nulla condimentum nulla.</div>
                  </div>
                </div>
                <div class="accordion-item border-gray-800 wow animate__animated animate__fadeIn">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span class="heading-4 ">Updating your billing credit card</span></button>
                  </h2>
                  <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">Nulla non sollicitudin. Morbi sit amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula eleifend velit, luctus mattis ante nulla condimentum nulla.</div>
                  </div>
                </div>
                <div class="accordion-item border-gray-800 wow animate__animated animate__fadeIn">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span class="heading-4 ">Application keyboard shortcuts and tips</span></button>
                  </h2>
                  <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">Nulla non sollicitudin. Morbi sit amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula eleifend velit, luctus mattis ante nulla condimentum nulla.</div>
                  </div>
                </div>
                <div class="accordion-item border-gray-800 wow animate__animated animate__fadeIn">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span class="heading-4 ">Cancelling a website subscription</span></button>
                  </h2>
                  <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">Nulla non sollicitudin. Morbi sit amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula eleifend velit, luctus mattis ante nulla condimentum nulla.</div>
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
