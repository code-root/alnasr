@include('partials.header')
@include('partials.navbar')

<style>
    .body {
       background-color:  #FFF3F3 !important ;
    }
</style>

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

</div>
</div>
</div>
</div>


<div class="container">
    <div class="row">
                <h1 class="color-linear d-inline-block mb-30" style="text-align: center;position: relative;">Contact Us</h1>
                <p class="text-xl color-gray-500" style="position: relative;">
                    We are Victory, a creative and dedicated team passionate about web development nearly as much as we cherish our clients.  
                    We are an impassioned team with a mission to achieve perfection in web design.                   
                </p>
            </div>
            {{-- <div class="text-center mt-30">
              <div class="d-inline-block support text-start">+201006156944<br></div>
            </div> --}}
            @if(!session('success'))
            <form method="POST" action="{{ route('contact.store') }}">
                @csrf

                <div class="form-contact">
                    <div class="row mt-50">
                        <div class="col-lg-6">
                            <div class="form-group" style="position: relative;">
                                <input name="name" class="form-control bg-gray-850 border-gray-800 color-gray-500" type="text" placeholder="Your name *">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" style="position: relative;">
                                <input name="email" class="form-control bg-gray-850 border-gray-800 color-gray-500" type="text" placeholder="Email *">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" style="position: relative;">
                                <input name="phone" class="form-control bg-gray-850 border-gray-800 color-gray-500" type="text" placeholder="Phone number *">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" style="position: relative;">
                                <input name="subject" class="form-control bg-gray-850 border-gray-800 color-gray-500" type="text" placeholder="Subject *">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group" style="position: relative;">
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
            <img src="{{asset('assets')}}/home/caractr.png" alt="us-1" style="position: absolute;width: 100%;height: 101%;top: 82%;right: 1%;">

          </div>
        </div>
      </div>
    </div>
  </main>

  <style>
  .footer {
  display: none !important;
  }
  </style>

@include('partials.footer')
