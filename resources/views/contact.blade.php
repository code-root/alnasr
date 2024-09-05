@include('partials.header')
@include('partials.navbar')
<!-- Wrapper -->
<div class="wrapper">

    <!-- Onovo Intro -->
    <section class="amazing-section amazing-intro intro--black">
        <div class="container">
            <h1 class="amazing-title-1  amazing-text-white">
                <span> Contact Us </span>
                <span class="amazing-sep word">
                    <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                </span>
            </h1>
            <div class="amazing-subtitle-2  amazing-text-white">
                <span> Have ideas for your business? Let’s build something awesome together. </span>
            </div>
            <div class="amazing-breadcrums">
                <ul>
                    <li>
                        <a href="index.html">Home </a>
                    </li>
                    <li class="current">
                        <span>Contact Us</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Onovo Contact Info -->
    <section class="amazing-section gap-top-140">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                    <!-- Heading -->
                    <div class="amazing-text gap-bottom-40">
                        <h4>Send Us A Message</h4>
                        We are Victory, a creative and dedicated team passionate about web development nearly as much as we cherish our clients.  
                        We are an impassioned team with a mission to achieve perfection in web design.  
                    </div>

                    <!-- Form -->
                    <div class="amazing-form">
                        @if(!session('success'))
                        <form method="POST"  class="cform"  action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <input placeholder="Full Name" type="text" name="name" />
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <input placeholder="subject " type="text" name="subject" />
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <input placeholder="Email Address" type="email" name="email" />
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <input placeholder="Phone Number" type="phone" name="tephonel" />
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <textarea placeholder="message" name="message"></textarea>
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        <button type="submit" class="amazing-btn amazing-hover-btn">
                                            <span>Send Message</span>
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </form>
                            @else
                        <div class="alert-success" style="display: none;"><h5>Thanks, your message is sent successfully.</h5></div>
                        @endif
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">

                    <!-- Contact Info -->
                    <div class="amazing-contact-info amazing-text-white">
                        <ul>
                            <li>
                                <h5>Contact Info</h5>
                                <a href="tel:+201098551128" class="amazing-lnk lnk--white" target="_blank">+ 20 (010) 9855 1128</a><br>
                                <a href="mailto:alnasrcom43@gmail.com" class="amazing-lnk lnk--white" target="_blank">alnasrcom43@gmail.com</a>
                                <div class="amazing-social-1 amazing-social-active" style="margin-top: 10px;">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/profile.php?id=61555548246249" class="amazing-social-link amazing-hover-2" target="_blank">
                                                <i class="icon fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://wa.me/201098551128" class="amazing-social-link amazing-hover-2" target="_blank">
                                                <i class="icon fab fa-whatsapp"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com" class="amazing-social-link amazing-hover-2" target="_blank">
                                                <i class="icon fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <h5>Our Address</h5>
                                <div>شارع البحر، أعلى قبانى للأثاث، الدور 11، Tanta, Egypt</div>
                            </li>
                            <li>
                                <h5>Website</h5>
                                <a href="http://allnasr.com" class="amazing-lnk lnk--white" target="_blank">allnasr.com</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

@include('partials.footer')
