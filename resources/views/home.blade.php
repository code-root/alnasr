    @include('partials.header')
    @include('partials.navbar')
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- amazing Hero -->
			<section class="amazing-section amazing-hero">
				<div class="image">
					<video autoplay muted loop playsinline id="heroVideo">
						<source src="{{asset('assets')}}/home/images/stvideo.mp4" type="video/mp4">
					</video>
					<div class="ovrl" style="opacity: 0.25;"></div>
					<img class="banar2"  src="{{asset('assets')}}/banar2.png"> 

				</div>
				<div class="container">
					 <h1 style="font-weight: 100 !important;color: white;font-size: 6rem;--word-index: 0;--line-index: 0;vertical-align: sub;">Advertisin</span>
					<h1 class="title amazing-text-white">Production </h1>
					<a href="#" class="amazing-play-btn">
						<span class="play-circles"></span>
						<span class="play-lines">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
				</div>
			</section>

			<!-- amazing Services -->
			<section class="amazing-section gap-top-140 gap-bottom-140">
				<div class="container-xl">

					<!-- Services items -->
					<div class="row amazing-services-grid-fw">

						<!--service item-->
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
							<div class="amazing-service-grid-item amazing-hover-1">
								<div class="image">
									<a href="#">
										<img decoding="async" src="{{asset('assets')}}/home/images/serv-icon1.png" alt="Graphic Design " />
									</a>
								</div>
								<h5 class="amazing-title-3">
									<a href="#">
										<span> Graphic Design  </span>
									</a>
								</h5>
								<div class="amazing-text"> 
									<div>
									   <p>Use all creative designs for social media, publication designs, website designs, and designs that highlight the beauty of your activity for the marketing goal.</p>
								   </div>
							   </div> 
								<div class="amazing-bubble">
									<div class="bubble-1"></div>
									<div class="bubble-2"></div>
									<div class="bubble-3"></div>
								</div>
							</div>
						</div>

						<!--service item-->
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
							<div class="amazing-service-grid-item amazing-hover-1 active active--default">
								<div class="image">
									<a href="#">
										<img decoding="async" src="{{asset('assets')}}/home/images/sales_6633509.png" alt="Digital Marketing " />
									</a>
								</div>
								<h5 class="amazing-title-3">
									<a href="#">
										<span> Digital Marketing </span>
									</a>
								</h5>
								<div class="amazing-text"> 
									<div>
									   <p>Creating courses in all fields, such as graphics, programming, montage, 3D, and all modern developments</p>
								   </div>
							   </div> 
								<div class="amazing-bubble">
									<div class="bubble-1"></div>
									<div class="bubble-2"></div>
									<div class="bubble-3"></div>
								</div>
							</div>
						</div>

						<!--service item-->
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
							<div class="amazing-service-grid-item amazing-hover-1">
								<div class="image">
									<a href="#">
										<img decoding="async" src="{{asset('assets')}}/home/images/teacher_3307318.png" alt="Education" />
									</a>
								</div>
								<h5 class="amazing-title-3">
									<a href="#">
										<span> Education </span>
									</a>
								</h5>
								 <div class="onovo-text"> 
									 <div>
										<p>Developing websites is about so much more than marketing. It’s also about aesthetics.</p>
									</div>
								</div> 
								<div class="onovo-bubble">
									<div class="bubble-1"></div>
									<div class="bubble-2"></div>
									<div class="bubble-3"></div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>

			<!-- amazing About -->
			<section class="amazing-section gap-bottom-140">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">

									<!-- Heading -->
									<div class="amazing-heading gap-bottom-40">
										<div class="amazing-subtitle-1">
											<span> Welcome to amazing </span>
										</div>
										<h2 class="amazing-title-2">
											<span> Production agency <br>Achieving success through <br>Win hearts </span>
										</h2>
									</div>

								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-12 hide-on-desktop gap-bottom-60">

									<!-- Number -->
									<div class="amazing-number amazing-circle-text mrg-left">
										<div class="num amazing-text-white">
											<span> 14 </span>
										</div>
										<div class="label amazing-text-black amazing-circle-text-label"> Years of Digital Solutions Experience </div>
									</div>

								</div>
							</div>

							<!-- Description -->
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<h5 class="text-uppercase">Our Mission</h5>
									<p>From the moment our company was founded we have helped our clients find <strong>exceptional solutions for their businesses</strong> memorable brands and digital products. Our expertise grows with each year, and our accumulated experience. </p>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<h5 class="text-uppercase">Our Goal</h5>
									<p>Our goal is to deliver amazing experiences that make people talk, and build strategic value for brands, tech, entertainment.</p>
									<a class="amazing-btn amazing-hover-btn" href="#">
										<i class="arrow"><span></span></i>
										<span> More About Us </span>
									</a>
								</div>
							</div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 hide-on-mobile">

							<!-- Number -->
							<div class="amazing-number amazing-circle-text mrg-right">
								<div class="num amazing-text-white">
									<span> 14 </span>
								</div>
								<div class="label amazing-text-black amazing-circle-text-label"> Years of Digital Solutions Experience </div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- amazing Ticker -->
			<section class="amazing-section gap-bottom-140">

				<!-- Ticker swiper -->
				<div class="amazing-ticker-slider gap-top-90 gap-bottom-100">
					<div class="swiper-container js-ticker-slider" data-autoplay="1999">
						<div class="swiper-wrapper">
							<!--slide-->
							<div class="swiper-slide">
								<h5 class="title amazing-text-white">
									<a href="#">
										<span> - Brand Strategy </span>
									</a>
								</h5>
							</div>

							<!--slide-->
							<div class="swiper-slide">
								<h5 class="title amazing-text-white">
									<a href="#">
										<span> - Creative Direction </span>
									</a>
								</h5>
							</div>

							<!--slide-->
							<div class="swiper-slide">
								<h5 class="title amazing-text-white">
									<a href="#">
										<span> - Native and Web Apps </span>
									</a>
								</h5>
							</div>

							<!--slide-->
							<div class="swiper-slide">
								<h5 class="title amazing-text-white">
									<a href="#">
										<span> - Machine Learning / AI </span>
									</a>
								</h5>
							</div>

						</div>
					</div>
				</div>

			</section>

			<!-- amazing Showcase -->
			<section class="amazing-section gap-bottom-140" style="border-bottom: 1px solid #555;">
				<div class="container">
			
					<!-- Heading -->
					<div class="amazing-heading gap-bottom-40">
						<div class="amazing-subtitle-1">
							<span> Featured Projects </span>
						</div>
						<h2 class="amazing-title-2">
							<span> Studio Showcase </span>
						</h2>
					</div>
			
					<!-- Showcase -->
					<div class="amazing-showcase gap-bottom-40">
						<div class="img-circle amazing-circle-move"></div>
			
						<!-- Showcase items -->
						<div class="amazing-showcase-items">
			
							<!-- Social media designs Showcase item -->
							<div class="amazing-showcase-item">
								<div class="category">
									<a href="#">
										<span data-splitting data-amazing-scroll>
											<span>DESIGN</span>
										</span>
									</a>
								</div>
								<h3 class="title">
									<a href="#">
										<span class="amazing-lnk" data-splitting data-amazing-scroll> Social Media Designs </span>
									</a>
								</h3>
								{{-- <p class="description">Creating compelling designs for social media platforms to enhance engagement and brand visibility.</p> --}}
								<div class="image" data-amazing-overlay data-amazing-scroll>
									<span class="img" style="background-image: url(assets/images/project-2-1200x988.jpg);"></span>
								</div>
							</div>
			
							<!-- Augmented reality design and animation Showcase item -->
							<div class="amazing-showcase-item">
								<div class="category">
									<a href="#">
										<span data-splitting data-amazing-scroll>
											<span>MOTION 3D</span>
										</span>
									</a>
								</div>
								<h3 class="title">
									<a href="#">
										<span class="amazing-lnk" data-splitting data-amazing-scroll> Augmented Reality Design and Animation </span>
									</a>
								</h3>
								{{-- <p class="description">Innovative AR designs and animations that blend the digital and physical worlds.</p> --}}
								<div class="image" data-amazing-overlay data-amazing-scroll>
									<span class="img" style="background-image: url(assets/images/project-5-1200x800.jpg);"></span>
								</div>
							</div>
			
							<!-- Animation design and animation Showcase item -->
							<div class="amazing-showcase-item">
								<div class="category">
									<a href="#">
										<span data-splitting data-amazing-scroll>
											<span>MOTION GRAPHIC</span>
										</span>
									</a>
								</div>
								<h3 class="title">
									<a href="#">
										<span class="amazing-lnk" data-splitting data-amazing-scroll> Animation Design and Animation </span>
									</a>
								</h3>
								{{-- <p class="description">High-quality animation designs that bring stories to life through motion graphics.</p> --}}
								<div class="image" data-amazing-overlay data-amazing-scroll>
									<span class="img" style="background-image: url(assets/images/project-6-1200x800.jpg);"></span>
								</div>
							</div>
			
							<!-- Creating websites and applications Showcase item -->
							<div class="amazing-showcase-item">
								<div class="category">
									<a href="#">
										<span data-splitting data-amazing-scroll>
											<span>BROGRAMMING</span>
										</span>
									</a>
								</div>
								<h3 class="title">
									<a href="#">
										<span class="amazing-lnk" data-splitting data-amazing-scroll> Creating Websites and Applications </span>
									</a>
								</h3>
								{{-- <p class="description">Development of interactive and user-friendly websites and mobile applications.</p> --}}
								<div class="image" data-amazing-overlay data-amazing-scroll>
									<span class="img" style="background-image: url(assets/images/project-7-1200x800.jpg);"></span>
								</div>
							</div>
			
							<!-- Marketing through psychology Showcase item -->
							<div class="amazing-showcase-item">
								<div class="category">
									<a href="#">
										<span data-splitting data-amazing-scroll>
											<span>PSYCHOLOGY</span>
										</span>
									</a>
								</div>
								<h3 class="title">
									<a href="#">
										<span class="amazing-lnk" data-splitting data-amazing-scroll> Marketing through Psychology </span>
									</a>
								</h3>
								{{-- <p class="description">Utilizing psychological principles to create more effective marketing strategies.</p> --}}
								<div class="image" data-amazing-overlay data-amazing-scroll>
									<span class="img" style="background-image: url(assets/images/project-8-1200x800.jpg);"></span>
								</div>
							</div>
			
							<!-- Interior and exterior decoration design Showcase item -->
							<div class="amazing-showcase-item">
								<div class="category">
									<a href="#">
										<span data-splitting data-amazing-scroll>
											<span>DECORATION</span>
										</span>
									</a>
								</div>
								<h3 class="title">
									<a href="#">
										<span class="amazing-lnk" data-splitting data-amazing-scroll> Interior & Exterior Decoration Design </span>
									</a>
								</h3>
								{{-- <p class="description">Designing aesthetic and functional interiors and exteriors that reflect the client's vision.</p> --}}
								<div class="image" data-amazing-overlay data-amazing-scroll>
									<span class="img" style="background-image: url(assets/images/project-9-1200x800.jpg);"></span>
								</div>
							</div>
			
							<!-- E-marketing to increase interaction on platforms Showcase item -->
							<div class="amazing-showcase-item">
								<div class="category">
									<a href="#">
										<span data-splitting data-amazing-scroll>
											<span>MARKETING</span>
										</span>
									</a>
								</div>
								<h3 class="title">
									<a href="#">
										<span class="amazing-lnk" data-splitting data-amazing-scroll> E-Marketing to Increase Interaction on Platforms </span>
									</a>
								</h3>
								{{-- <p class="description">Strategies to boost engagement and interaction on digital platforms through effective e-marketing.</p> --}}
								<div class="image" data-amazing-overlay data-amazing-scroll>
									<span class="img" style="background-image: url(assets/images/project-2-2-1200x982.jpg);"></span>
								</div>
							</div>
			
						</div>
			
					</div>
			
					<!-- Button -->
					<a class="amazing-btn amazing-hover-btn" href="#">
						<i class="arrow">
							<span></span>
						</i>
						<span> All Projects </span>
					</a>
			
				</div>
			</section>
			

			<!-- amazing Team -->
			<section class="amazing-section gap-top-140 gap-bottom-140">
				<div class="container">

					<!-- Heading -->
					<div class="amazing-heading align-center gap-bottom-40">
						<div class="amazing-subtitle-1">
							<span> Experts Team Members </span>
						</div>
						<h2 class="amazing-title-2">
							<span> We do awesome Services <br>for our clients. </span>
						</h2>
					</div>

					<!-- Team items -->
					<div class="row gap-row">


						@foreach ($latestOurTeamMembers as $item )
						@isset($item['image'][0]['url'])
						<!--team item-->
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
							<div class="amazing-team" data-amazing-overlay data-amazing-scroll>
								<div class="amazing-team-item amazing-hover-3">
									<div class="desc">
										<h5 class="title">
											<a href="#" class="amazing-lnk">
												<span data-splitting data-amazing-scroll> {{ $item->name }} </span>
											</a>
										</h5>
										<div class="amazing-subtitle-1">
											<span data-splitting data-amazing-scroll> {{ $item->job_name }} </span>
										</div>
									</div>
									<div class="image">
											<img decoding="async" src="/{{ $item['image'][0]['url'] }}" width="350" height="530" alt="Thomas Jackki" />
									</div>
									<div class="num amazing-text-white">
										<span> {{ substr($item->name, 0, 1) }}  </span>
									</div>
								</div>
							</div>
						</div>

						@endisset
						@endforeach

					</div>
				</div>
			</section>

			<!-- amazing Reviews -->
			<section class="amazing-section gap-bottom-140">
				<div class="container">

					<!-- Reviews -->
					<div class="amazing-reviews">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

								<!-- Heading -->
								<div class="amazing-reviews-titles">
									<h2 class="amazing-title-2">
										<span data-splitting data-amazing-scroll> Testimonials </span>
									</h2>
									<div class="amazing-reviews-summary">
										<span class="label amazing-text-black">
											<span data-splitting data-amazing-scroll> 4.0 </span>
										</span>
										<span class="amazing-stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
										</span>
										<span class="label">
											<span data-splitting data-amazing-scroll> Rating from all Client's </span>
										</span>
									</div>
								</div>

							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

								<!-- Reviews swiper -->
								<div class="amazing-reviews-carousel">
									<div class="swiper-container js-reviews-carousel" data-loop="false">
										<div class="swiper-wrapper">

											<!--slide-->
											<div class="swiper-slide amazing-reviews-item" data-swiper-autoplay>
												<div class="text">
													<div data-splitting>
														<p>“ Their high level of customer service <br />complemented their technical expertise. <br />They were responsive, supportive, and <br />communicative. Their dedication to <br />the project was impressive. ” </p>
													</div>
												</div>
												<h5 class="title">
													<span data-splitting> Thomas Smith </span>
												</h5>
												<div class="subtitle">
													<span data-splitting> Customer Support </span>
												</div>
												<div class="amazing-stars stars--small">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												</div>
											</div>

											<!--slide-->
											<div class="swiper-slide amazing-reviews-item" data-swiper-autoplay>
												<div class="text">
													<div data-splitting>
														<p>“ Their high level of customer service <br />complemented their technical expertise. <br />They were responsive, supportive, and <br />communicative. Their dedication to <br />the project was impressive. ” </p>
													</div>
												</div>
												<h5 class="title">
													<span data-splitting> Mike Cameron </span>
												</h5>
												<div class="subtitle">
													<span data-splitting> Code Quality </span>
												</div>
												<div class="amazing-stars stars--small">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="far fa-star"></i>
												</div>
											</div>

											<!--slide-->
											<div class="swiper-slide amazing-reviews-item" data-swiper-autoplay>
												<div class="text">
													<div data-splitting>
														<p>“ Their high level of customer service <br />complemented their technical expertise. <br />They were responsive, supportive, and <br />communicative. Their dedication to <br />the project was impressive. ” </p>
													</div>
												</div>
												<h5 class="title">
													<span data-splitting> Jessica Brown </span>
												</h5>
												<div class="subtitle">
													<span data-splitting> Design Quality </span>
												</div>
												<div class="amazing-stars stars--small">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												</div>
											</div>

										</div>
									</div>

									<!--navs-->
									<div class="js-reviews-carousel-navs">
										<div class="amazing-prev js-reviews-carousel-prev amazing-hover-2">
											<i></i>
										</div>
										<div class="amazing-next js-reviews-carousel-next amazing-hover-2">
											<i></i>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>

			<!-- amazing Video -->
			<section class="amazing-section">
				<div class="container">

					<!--video-->
					<div class="amazing-video" data-amazing-overlay data-amazing-scroll>
						<div class="image" style="background-image: url(assets/images/posts1.jpg);"></div>
						<iframe class="js-video-iframe" data-src="https://www.youtube.com/embed/Gu6z6kIukgg?showinfo=0&amp;rel=0&amp;autoplay=1"></iframe>
						<div class="play amazing-circle-text">
							<div class="arrow"></div>
							<div class="label amazing-text-black amazing-circle-text-label"> Play Video - Play Video - Play Video - </div>
						</div>
					</div>

				</div>
			</section>

			<!-- amazing Numbers -->
			<section class="amazing-section gap-top-140 gap-bottom-140">
				<div class="container">

					<!-- Numbers items -->
					<div class="row">

						<!--number item-->
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center">
							<div class="amazing-counter">
								<div class="num amazing-text-white js-counter" data-end-value="23">0</div>
								<div class="label"> Team members </div>
							</div>
						</div>

						<!--number item-->
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center">
							<div class="amazing-counter">
								<div class="num amazing-text-white js-counter" data-end-value="99">0</div>
								<div class="num-after amazing-text-white"> + </div>
								<div class="label"> Completed projects </div>
							</div>
						</div>

						<!--number item-->
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center">
							<div class="amazing-counter">
								<div class="num amazing-text-white js-counter" data-end-value="12">0</div>
								<div class="num-after amazing-text-white"> M </div>
								<div class="label"> Lines of code </div>
							</div>
						</div>

					</div>
					
				</div>
			</section>

			<!-- amazing CTA -->
			<section class="amazing-section gap-top-140 gap-bottom-140" style="background-image: url(assets/images/cta-bg-1.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

							<!-- Heading -->
							<div class="amazing-heading gap-bottom-40 amazing-text-white">
								<div class="amazing-subtitle-1">
									<span> Get in Touch </span>
								</div>
								<h2 class="amazing-title-2">
									<span> Send Us Your <br>
										<strong>Bright Ideas</strong>
									</span>
								</h2>
							</div>

							<!-- Text -->
							<div class="amazing-cta-text">
								<a href="mailto:infoname@domain.com" target="_blank">infoname@domain.com</a>
								<p>36 East 8th Street, New York, <br />NY 10003, United States. </p>
							</div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

							<!-- Social -->
							<div class="amazing-cta-social">
								<div class="image" style="background-image: url(assets/images/cta-circle2.png);">
									<div class="cta-img-circle img-circle--1"></div>
									<div class="cta-img-circle img-circle--2"></div>
									<div class="cta-img-circle img-circle--3"></div>
								</div>
								<div class="desc">
									<ul>
										<li>
											<a class="amazing-btn btn--white btn--large btn--icon amazing-hover-btn" href="http://facebook.com/" target="_blank">
												<i aria-hidden="true" class="fab fa-facebook-f"></i>
												<span> Facebook </span>
											</a>
										</li>
										<li>
											<a class="amazing-btn btn--white btn--large btn--icon amazing-hover-btn" href="http://instagram.com/" target="_blank">
												<i aria-hidden="true" class="fab fa-instagram"></i>
												<span> Instagram </span>
											</a>
										</li>
										<li>
											<a class="amazing-btn btn--white btn--large btn--icon amazing-hover-btn" href="http://twitter.com/" target="_blank">
												<i aria-hidden="true" class="fab fa-twitter"></i>
												<span> Twitter </span>
											</a>
										</li>
										<li>
											<a class="amazing-btn btn--white btn--large btn--icon amazing-hover-btn" href="http://linkedin.com/" target="_blank">
												<i aria-hidden="true" class="fab fa-linkedin-in"></i>
												<span> LinkedIn </span>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- amazing Blog -->
			<section class="amazing-section gap-top-140 gap-bottom-140">
				<div class="container">

					<!-- Heading -->
					<div class="amazing-heading align-center gap-bottom-40">
						<div class="amazing-subtitle-1">
							<span> News &amp; Blog </span>
						</div>
						<h2 class="amazing-title-2">
							<span> Insights, Thoughts, Industry <br>Trends, Marketing Tips </span>
						</h2>
					</div>

					<!-- Blog items -->
					<div class="row">
						@isset($latestBlogs)
						@foreach ($latestBlogs as $item )
						@isset($item['image'][0]['url'])
						<!--blog item-->
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<div class="amazing-blog-item">
								<div class="image" data-amazing-overlay data-amazing-scroll>
									<a href="#">
										<img decoding="async" src="/{{ $item['image'][0]['url'] }}" width="400" height="240" alt="{{  $item->name }}" />
									</a>
								</div>
								<div class="desc">
									<div class="info">
										<div class="date">{{ $item->updated_at }}</div>{{ $item->category->name ?? '' }}
									</div>
									<h5 class="title">
										<a href="#">
											<span>{{  $item->name }}</span>
										</a>
									</h5>
								</div>
							</div>
						</div>
						@endisset
						@endforeach
						@endisset
						
					</div>

					<!-- Button -->
					<div class="align-center">
						<a class="amazing-btn amazing-hover-btn" href="/">
							<i class="arrow">
								<span></span>
							</i>
							<span> View All Posts </span>
						</a>
					</div>

				</div>
			</section>

			<!-- amazing Brands -->
			<section class="amazing-section">
				<div class="container">

					<!-- Heading -->
					<div class="amazing-heading gap-bottom-40">
						<div class="amazing-subtitle-1">
							<span> Fantastic and Premium Clients </span>
						</div>
						<h2 class="amazing-title-2">
							<span> We Have Had the Pleasure of <br>Working with Some Clients </span>
						</h2>
					</div>

					<!-- Brands items -->
					<div class="row gap-row">

						@isset($ourClients)
                        @foreach ($ourClients as $item)
                            @isset($item['image'][0]['url'])
										<!--brand item-->
						<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
							<div class="amazing-brands amazing-hover-3 amazing-hover-label" data-amazing-overlay data-amazing-scroll>
									<span class="image">
										<img decoding="async" src="{{ $item['image'][0]['url'] }}" width="285" height="200" alt="Visit Website" />
									</span>
									<span class="label amazing-white-black"> {{ $item->name }} </span>
							</div>
						</div>
                            @endisset
                        @endforeach
                    @endisset
					</div>

				</div>
			</section>

		</div>
   @include('partials.footer')
<script>


</script>
