@include('partials.header')
@include('partials.navbar')

<div class="cover-home3">

    <div class="container">
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10 col-lg-12">
                <!-- بداية إضافة البيانات المسترجعة -->
                <div class="pt-30 border-bottom border-gray-800 pb-20">
                    <!-- عنوان المدونة -->
                    <div class="box-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a class="home" href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('blog-archive') }}">Blog</a></li>
                            <li><span>{{ $blog->name }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-50 align-items-end">
                    <!-- تفاصيل المدونة -->
                    <div class="col-lg-9 col-md-8">
                        <h2 class="color-linear mb-30">{{ $blog->name }}</h2>
                        <!-- تفاصيل المؤلف وتاريخ النشر -->
                        <div class="box-author mb-20">
                            <!-- اسم المؤلف -->
                            <img src="https://ui-avatars.com/api/?name={{ $blog->users->name ?? ''  }}" alt="{{ $blog->users->name  ?? '' }}">
                            <div class="author-info">
                                <h6 class="color-gray-700">{{ $blog->users->name  ?? '' }}</h6>
                                <span class="color-gray-700 text-sm mr-30">{{ $blog->updated_at }}</span>
                                <span class="color-gray-700 text-sm">3 mins to read</span>
                            </div>
                        </div>
                    </div>
                    <!-- شارك المدونة -->
                    <div class="col-lg-3 col-md-4">
                        <!-- أزرار مشاركة -->
                        <div class="box-share border-gray-800">
                            <h6 class="d-inline-block color-gray-500 mr-10">Share</h6>
                            <!-- أزرار المشاركة -->
                            <!-- يمكنك ربط هذه الأزرار بوظائف مشاركة -->
                            <a class="icon-media icon-fb" href="#"></a>
                            <a class="icon-media icon-tw" href="#"></a>
                            <a class="icon-media icon-printest" href="#"></a>
                        </div>
                    </div>
                </div>

          <div class="row mt-50">
            <div class="col-lg-8">
              <div class="content-detail border-gray-800">
                <p class="text-xl color-gray-500">{{ $blog->title  }} </p>
                <div class="mt-20 mb-20"><img class="img-bdrd-16" src="/{{ $blog['image'][0]['url'] }}" alt="Genz"></div>

            </div>
            <p>{!! $blog->description !!}</p>
        </div>

            <div class="col-lg-4">
              <div class="sidebar">
                <div class="box-sidebar bg-gray-850 border-gray-800">
                    <div class="head-sidebar">
                        <h5 class="line-bottom">Categories</h5>
                    </div>
                    <div class="content-sidebar">
                        <div class="list-cats">
                            @foreach($categories as $category)
                            @isset($category['image'][0]['url'])
                            {{-- @if(file_exists(public_path($category['image'][0]['url']))) --}}
                            <div class="item-cats border-gray-800 wow animate__animated animate__fadeIn">
                                <div class="cat-left">
                                    <div class="image-cat"><a href="{{ route('blog-archive', ['category' => $category->id]) }}"><img src="/{{ $category['image'][0]['url'] }}" alt="Genz"></a></div>
                                    <div class="info-cat"><a class="color-gray-500 text-xl" href="/c/{{ $category->name }}">{{ $category->name }}</a></div>
                                </div>
                                <div class="cat-right"><a class="btn btn-small text-sm color-gray-500 bg-gray-800" href="{{ route('blog-archive', ['category' => $category->id]) }}">{{ $category->blog()->count() }} posts</a></div>
                            </div>
                            {{-- @endif --}}
                            @endisset
                            @endforeach
                        </div>
                    </div>
                    </div>
                    <div class="box-sidebar bg-gray-850 border-gray-800">
                        <div class="head-sidebar wow animate__animated animate__fadeIn">
                            <h5 class="line-bottom">Popular Posts</h5>
                        </div>
                        <div class="content-sidebar">
                            <div class="list-posts">
                                @foreach($popularPosts as $post)
                                @isset($post['image'][0]['url'])
                                {{-- @if(file_exists(public_path($post['image'][0]['url']))) --}}
                                <div class="item-post wow animate__animated animate__fadeIn">
                                    <div class="image-post"><a href="{{ route('blog-archive', ['post' => $post->id]) }}"><img src="/{{ $post['image'][0]['url'] }}" alt="Genz"></a></div>
                                    <div class="info-post border-gray-800"><a href="{{ route('blog-archive', ['post' => $post->name]) }}">
                                        <h6 class="color-white">{{ $post->title }}</h6></a><span class="color-gray-700">15 mins read</span>
                                        <ul class="d-inline-block">
                                            <li class="color-gray-700">{{ $post->created_at->format('d F Y') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- @endif --}}
                                @endisset
                                @endforeach
                            </div>
                        </div>
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
