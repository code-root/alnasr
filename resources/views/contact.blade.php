@include('partials.header')
@include('partials.navbar')


<main class="main">
    <div class="cover-home3">
      <div class="container">
        <div class="row">
          <div class="col-xl-10 col-lg-12 m-auto">
            <div class="text-center mt-70">
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

                <h1 class="color-linear d-inline-block mb-30">Contact Us</h1>
                <p class="text-xl color-gray-500">We are Victory, a creative and dedicated team passionate about web development nearly as much as we cherish our clients. We are an impassioned team with a mission to achieve perfection in web design. Every design is crafted with love, aiming for pixel-perfect precision and excellent coding quality. Speed, security, and SEO-friendliness are always at the forefront of our minds.</p>
            </div>
            <div class="text-center mt-30">
              <div class="d-inline-block support text-start">+201006156944<br></div>
            </div>
            @if(!session('success'))
            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="form-contact">
                    <div class="row mt-50">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" class="form-control bg-gray-850 border-gray-800 color-gray-500" type="text" placeholder="Your name *">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" class="form-control bg-gray-850 border-gray-800 color-gray-500" type="text" placeholder="Email *">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" class="form-control bg-gray-850 border-gray-800 color-gray-500" type="text" placeholder="Phone number *">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="subject" class="form-control bg-gray-850 border-gray-800 color-gray-500" type="text" placeholder="Subject *">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control bg-gray-850 border-gray-800 color-gray-500" rows="5" placeholder="Message *"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-linear btn-load-more btn-radius-8 hover-up">
                                Send Message <i class="fi-rr-arrow-small-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            @endif

          </div>
        </div>
      </div>
    </div>
  </main>


@include('partials.footer')
