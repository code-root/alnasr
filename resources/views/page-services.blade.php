    @include('partials.header')
    @include('partials.navbar')
    <!-- Wrapper -->
    <div class="wrapper">

        <section class="amazing-section amazing-intro intro--black">
            <div class="container">
                <h1 class="amazing-title-1  amazing-text-white">
                    <span> Our Projects </span>
                    <span><span class="amazing-sep word">
                            <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                        </span></span>
                </h1>
                <div class="amazing-subtitle-2  amazing-text-white">
                    <span> Creative studio at the intersection of art, designed technology. </span>
                </div>
                <div class="amazing-breadcrums">
                    <ul>
                        <li>
                            <a href="index-2.html">Home </a>
                        </li>
                        <li class="current">
                            <span>Projects </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="amazing-section gap-top-140">
            <div class="container">

                <!-- Projects Grid -->
                <div class="amazing-portfolio">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <!-- Filter projects-->
                            <div class="amazing-filter-container">
                                <div class="amazing-filter js-amazing-filter filter--default">
                                    <div class="amazing-filter-nav-active" style="width: 169.414px; left: 172.625px;">
                                    </div>
                                    <ul>
                                        <li>
                                            <button class="amazing-filter-item  item--active" type="button" data-filter="*">
                                                <span>All Projects</span>
                                            </button>
                                        </li>
                                        @isset($category)
                                            @foreach ($category as $ca)
                                                <li>
                                                    <button class="amazing-filter-item" type="button"
                                                        data-filter=".{{ $ca->name }}">
                                                        <span>{{ $ca->name }}</span>
                                                    </button>
                                                </li>
                                            @endforeach
                                        @endisset

                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <!-- Projects items -->
                            <div class="row amazing-portfolio-items">

                                @isset($projects)
                                    @foreach ($projects as $item)
                                        @isset($item['image'][0]['url'])
                                            <!--project item-->
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-6 col-lg-6 amazing-portfolio-col {{ $item->category->name ?? '' }} ">
                                                <div class="amazing-portfolio-item">
                                                    <div class="image" data-amazing-overlay="" data-amazing-scroll="" data-scroll="in">
                                                            @if ($item['image'][0]['status'] == 'video')
                                                                <video width="100%" height="100%" controls autoplay loop
                                                                    muted
                                                                    style="position: relative;">
                                                                    <source src="/{{ $item['image'][0]['url'] }}"
                                                                        type="video/mp4">
                                                                    Your browser does not support the video tag.
                                                                </video>
                                                            @else
                                                                <a href="/{{ $item['image'][0]['status'] }}"><img src="/{{ $item['image'][0]['url'] }}" alt="{{ $item->name }}"></a>
                                                            @endif
                                                        <div class="amazing-overlay"></div>
                                                    </div>
                                                    <div class="desc">
                                                        <h5 class="title">
                                                            <a class="amazing-lnk" href="project-detail.html">
                                                                <span data-splitting="" data-amazing-scroll=""
                                                                    class="words lines splitting" data-scroll="in"><span><span
                                                                            class="word" data-word="{{ $item->category->name ?? '' }}">{{ $item->category->name ?? '' }}</span></span><span
                                                                        class="whitespace"> </span><span>
                                                            </a>
                                                        </h5>
                                                        <div class="text">
                                                            <div data-splitting="" data-amazing-scroll=""
                                                                class="words lines splitting" data-scroll="in" ><span><span><span
                                                                            class="word" data-word="{{ $item->name }}" >{{ $item->name }}</span></span>
                                                                    <em><span><span class="word" data-word=",">,</span></span></em></span>
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
            </div>
        </section>
    </div>
    @include('partials.footer')
    <script></script>
