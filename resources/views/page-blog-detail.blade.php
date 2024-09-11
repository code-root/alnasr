@include('partials.header')
@include('partials.navbar')
<!-- Wrapper -->
<div class="wrapper">

  <!-- Onovo Intro -->
  <section class="amazing-section amazing-intro intro--black">
      <div class="container">
          <h1 class="amazing-title-1 amazing-text-white">
              <span>Page blog Detail</span>
              <span class="amazing-sep word">
                  <i class="sep-img" style="background-image: url('/{{ $blog['image'][0]['url'] }}');"></i>
              </span>
          </h1>
          <div class="amazing-subtitle-2 amazing-text-white">
              <span>{{ $blog->title  }}</span>
          </div>
          <div class="amazing-breadcrums">
              <ul>
                  <li><a href="/">Home</a></li>
                  <li class="current"><span>{{ $blog->name }}</span></li>
              </ul>
          </div>
      </div>
  </section>

  <section class="amazing-section amazing-post gap-top-140">
    <div class="container">

      <!-- Image -->
      <div class="amazing-post-pic" data-amazing-overlay="" data-amazing-scroll="" data-scroll="in">
        <img src="assets/images/posts3.jpg" alt="Usability Secrets to Create Interfaces">
      <div class="amazing-overlay"></div></div>

      <!-- Post-->
      <div class="amazing-post-wrapper">
        <div class="amazing-post-content">

          <!-- Date -->
          <div class="amazing-post-date">
            <span class="date">{{ $blog->updated_at }}</span> by <a href="#">{{ $blog->users->name  ?? '' }}</a>
          </div>

          <!-- Content -->
          <div class="amazing-post-text">
            <div class="post-content">
              <h2>{{ $blog->name }}</h2>
              <p>{{ $blog->title  }}</p>
              {!! $blog->description !!}
            </div>
          </div>

          <!-- Info -->
          <div class="amazing-post-bottom">
            <div class="amazing-post-bottom-content">

              <!-- Categories -->
              <div class="amazing-post-categories amazing-lnk lnk--white">
                <span>Posted in: </span>
                <a href="#">{{ $blog->category->name ?? '' }}</a>
              </div>
              <!-- Tags -->
              <div class="amazing-post-tags">
                <span>Tags: </span>
                <a href="#">branding</a>
                <a href="#">design</a>
                <a href="#">development</a>
                <a href="#">web</a>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

</div>


  @include('partials.footer')
