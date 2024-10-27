@include('partials.header')
@include('partials.navbar')
<!-- Wrapper -->
<div class="wrapper">

  <style>
   .ddddd { font-size: 10px;
    display: flex;
    margin: 7px;
   }
  </style>
  <!-- Onovo Intro -->
  <section class="amazing-section amazing-intro intro--black">
      <div class="container">
          <h1 class="amazing-title-1 amazing-text-white">
              <span>Page About</span>
              <span class="amazing-sep word">
                  <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
              </span>
          </h1>
          <div class="amazing-subtitle-2 amazing-text-white">
              <span>Our values vaulted us to the top of our industry.</span>
          </div>
          <div class="amazing-breadcrums">
              <ul>
                  <li><a href="/about">Page About</a></li>
                  <li class="current"><span>Services</span></li>
              </ul>
          </div>
      </div>
  </section>

  <div class="amazing-blog gap-top-140">
    <div class="container">

      <!-- Blog items -->
      <div class="row">
    
        @isset($blog)
        @foreach ($blog as $item )
     
        @isset($item['image'][0]['url'])
        <!--blog item-->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
          <div class="amazing-blog-item">
            <div class="image" data-amazing-overlay="" data-amazing-scroll="" data-scroll="in">
              <a href="blog-detail/{{  $item->name }}">
                <img src="/{{ $item['image'][0]['url'] }}" alt="Usability Secrets to Create Interfaces">
              </a>
            <div class="amazing-overlay"></div></div>
            <div class="desc">
              <div class="ddddd">
             {{ $item->updated_at }} {{ $item->category->name ?? '' }}</div>
              <h5 class="title">
                <a href="blog-detail/{{  $item->name }}">
                  <span>{{  $item->name }}</span>
                </a>
              </h5>
              <div class="amazing-text">
                <div>
                  {{-- <p>{{  $item->title }}<br> --}}
                    <a href="blog-detail/{{  $item->name }}" class="amazing-btn amazing-hover-btn">
                      <span>Read more</span>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endisset
        @endforeach
        @endisset
      

      </div>
    </div>
  </div>




</div>


  @include('partials.footer')
