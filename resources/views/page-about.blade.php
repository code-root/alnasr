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
                    <p class="text-xl color-gray-500">
                        🚀 The vision of Al-Nasr Company is to be a <span style="color: #ff7f50;">leading and authoritative entity</span> in the field of <span style="color: #6495ed;">graphic design</span>, encompassing <span style="color: #32cd32;">social media design</span>, <span style="color: #ff1493;">motion graphics</span>, various forms of <span style="color: #ff6347;">montage</span>, <span style="color: #800080;">website</span>, and <span style="color: #4169e1;">system development</span>.
                        <br><br>
                        🌟 We are a team of seasoned creatives and developers offering <span style="color: #ff8c00;">high-quality and innovative services</span> tailored to meet our clients' needs. We aspire to be an <span style="color: #228b22;">effective partner</span> in their success across <span style="color: #ff4500;">social media platforms</span>.
                        <br><br>
                        🎨 Al-Nasr Company's objectives manifest in providing <span style="color: #9932cc;">innovative and compelling social media designs</span> that reflect our clients' identities and captivate the intended audience, thereby enhancing their <span style="color: #4682b4;">engagement</span> with our published content.
                        <br><br>
                        🎬 We are committed to crafting <span style="color: #8a2be2;">inventive and distinctive motion graphics content</span> that aids our clients in effectively and engagingly conveying their messages, thereby amplifying audience interaction. Furthermore, we deliver <span style="color: #dc143c;">high-quality and professional montage services</span>, aiming to transform video clips into refined and impactful artistic works.
                        <br><br>
                        📊 We provide specialized consultations in <span style="color: #ffa500;">social media design</span>, aiming to assist our clients in achieving their goals and increasing audience awareness of their brand. We consistently strive to leverage the <span style="color: #008000;">latest tools and technologies</span> in <span style="color: #20b2aa;">design</span>, <span style="color: #800000;">montage</span>, <span style="color: #2e8b57;">3D</span>, and <span style="color: #9932cc;">motion graphics</span>.
                        <br><br>
                        🌐 Additionally, we offer detailed <span style="color: #ff69b4;">3D services</span> that intricately explain your business domain. We are a <span style="color: #4169e1;">dedicated and enthusiastic team</span> working diligently to achieve the client's vision and bolster their activity, ensuring their attainment of optimal results and success.
                    </p>
                </div>
            </div>

            <div  id="Projects" class="text-center mt-70 mb-50">
              <h2 class="color-linear d-inline-block mb-20 wow animate__animated animate__fadeInUp">My Latest Projects</h2>
              <p class="text-lg color-gray-500 wow animate__animated animate__fadeInUp">The convention is the main event of the year for professionals in<br class="d-none d-lg-block">the world of design and architecture.</p>
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
            <div id="Pricing" class="mb-70"></div>
            <h2 class="color-linear d-inline-block mb-10 wow animate__animated animate__fadeInUp">Pricing</h2>
            <ul class="list-unstyled text-left wow animate__animated animate__fadeInUp">
                <li class="point"><i class="far fa-gem check-icon text-success"></i> Transforming ideas into visually captivating realities.</li>
                <li class="point"><i class="far fa-lightbulb check-icon text-warning"></i> Elevating your brand's identity with innovative designs tailored to your needs.</li>
                <li class="point"><i class="fas fa-paint-brush check-icon text-info"></i> Delivering striking logos and captivating marketing materials.</li>
                <li class="point"><i class="fas fa-users check-icon text-primary"></i> Dedicated team offering top-notch, creative solutions.</li>
                <li class="point"><i class="far fa-star check-icon text-danger"></i> Experience the exceptional power of design to bring your vision to life!</li>
            </ul>
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
                            <label class="{{ $label->class }} text-base color-gray-900" style="color:#37ffa2 ">{{ $label->text }}</label>
                            <div class="card-pricing-top border-gray-800">
                                {{-- <h3 class="color-white mb-10">Business</h3> --}}
                                <h3 class="color-white mb-10">{{ $option->name }}</h3>
                                @if($option->price_before && $option->price_before > $option->price)
                                    <div class="discount">
                                        <s class="text-lg color-gray-500 mb-15">${{ $option->price_before }}</s>
                                        <p class="text-lg color-gray-500 mb-15">${{ $option->price }}</p>
                                    </div>
                                @else
                                    <p class="text-lg color-gray-500 mb-15"  style="color:#37ffa2 ">${{ $option->price }}</p>
                                @endif
                                <p class="text-base color-gray-500 mb-30"  style="color:#37ffa2 ">{{ $option->description }}</p>
                                <button type="button" style="color: #04140f;background-color: #37ffa2;" class="btn btn-lg btn-danger mt-3 btn-order-now"
                                onclick="changeValueAndOpenModal('{{ $option->id }}')" >
                                <i class="fas fa-shopping-cart"></i>
                                Order now
                            </button>                                            </div>
                            <div class="card-pricing-bottom">
                                <h6 class="color-white mb-25">What you get:</h6>
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


            <div class="text-center mt-30">
              <h2 class="color-linear d-inline-block mb-10 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">FAQs</h2>
            </div>
            <div class="box-faqs mb-70">
              <div class="accordion" id="accordionFaqs">
                <div class="accordion-item border-gray-800 wow animate__animated animate__fadeIn">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="heading-4 color-white">Understanding company billing and accounts</span></button>
                  </h2>
                  <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">Nulla non sollicitudin. Morbi sit amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula eleifend velit, luctus mattis ante nulla condimentum nulla.</div>
                  </div>
                </div>
                <div class="accordion-item border-gray-800 wow animate__animated animate__fadeIn">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span class="heading-4 color-white">Updating your billing credit card</span></button>
                  </h2>
                  <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">Nulla non sollicitudin. Morbi sit amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula eleifend velit, luctus mattis ante nulla condimentum nulla.</div>
                  </div>
                </div>
                <div class="accordion-item border-gray-800 wow animate__animated animate__fadeIn">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span class="heading-4 color-white">Application keyboard shortcuts and tips</span></button>
                  </h2>
                  <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">Nulla non sollicitudin. Morbi sit amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula eleifend velit, luctus mattis ante nulla condimentum nulla.</div>
                  </div>
                </div>
                <div class="accordion-item border-gray-800 wow animate__animated animate__fadeIn">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span class="heading-4 color-white">Cancelling a website subscription</span></button>
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
