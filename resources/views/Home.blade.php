@extends('layouts.master')
@section('title')
@if(isset($category))
@if(!is_null($category))
{{ ucfirst($category->name_en) }} posts
@else
Home
@endif
@endif
@endsection
@section('content')
<main id="main">
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('assets/img/post-slide-1.jpg')}}');">

                                    <div class="img-bg-inner">
                                        <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                            mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                            obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem
                                            atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('assets/img/post-slide-2.jpg') }}');">
                                    <div class="img-bg-inner">
                                        <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New
                                            Haircut</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                            mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                            obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem
                                            atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('assets/img/post-slide-3.jpg') }}');">
                                    <div class="img-bg-inner">
                                        <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                            mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                            obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem
                                            atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('assets/img/post-slide-4.jpg') }}');">
                                    <div class="img-bg-inner">
                                        <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                            mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                            obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem
                                            atque.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                @if(isset($photoCategoriePremuim ,$nomCategoriePremuim ))
                <div class="col-lg-4">
                    <div class="post-entry-1 lg">
                        <a href="single-post.html"><img src="{{ $photoCategoriePremuim }}" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">{{ $nomCategoriePremuim }}</span> <span
                                class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span></div>
                        <h2><a href="single-post.html"></p>

                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="{{ asset('assets/img/person-1.jpg') }}" alt=""
                                            class="img-fluid"></div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Cameron Williamson</h3>
                                    </div>
                                </div>
                    </div>

                </div>
                @endif

                <div class="col-lg-8">
                    <div class="row g-5">
                        @if(isset($postsPremuim))
                        @foreach ($postsPremuim as $post)
                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="{{ $post->photo }}" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Sport</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="single-post.html">{{ $post->title_en }}</a></h2>
                            </div>
                        </div>
                        @endforeach
                        @endif

                        @if(isset($posts))
                        @foreach ($posts as $post)
                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="{{ route('posts.show',$post->slug) }}"><img src="{{ $post->photo }}" alt=""
                                        class="img-fluid"></a>
                                @if(session()->get('lang')==='en')
                                <div class="post-meta"><span class="date">{{$post->name_en }}</span> <span
                                        class="mx-1">&bullet;</span> <span>{{$formattedCreatedAt}}</span>
                                </div>
                                @else
                                <div class="post-meta"><span class="date">{{$post->name_fr }}</span> <span
                                    class="mx-1">&bullet;</span> <span>{{$formattedCreatedAt}}</span>
                                </div>
                                @endif
                                @if(session()->get('lang')==='en')
                                <h2><a href="single-post.html">{{ $post->title_en }}</a></h2>
                                @else
                                <h2><a href="single-post.html">{{ $post->title_fr }}</a></h2>
                                @endif

                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>

            </div> <!-- End .row -->
        </div>
    </section> <!-- End Post Grid Section -->

@if(isset($categoriesgrips))
    <section class="category-section">
        <div class="container" data-aos="fade-up">

            @foreach ($categoriesgrips as $categorie)
            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                @if(session()->get('lang')==='en')
                <h2>{{ $categorie->name_en}}</h2>
                @else
                <h2>{{ $categorie->name_fr}}</h2>
                @endif
                @if(session()->get('lang')==='en')
                <div><a href="{{ route('category.posts',$categorie) }}" class="more">See All {{ $categorie->name_en}}</a></div>
                @else
                <div><a href="{{ route('category.posts',$categorie) }}" class="more">See All {{ $categorie->name_fr}}</a></div>
                @endif

            </div>

            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="post-entry-1 lg">
                        <a href="single-post.html"><img src="{{ asset('assets/img/post-landscape-8.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span></div>
                        <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                        <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                            temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil
                            tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe
                            perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque
                            eveniet, quo, praesentium dignissimos</p>

                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="{{ asset('assets/img/person-7.jpg') }}" alt=""
                                    class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">Esther Howard</h3>
                            </div>
                        </div>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span></div>
                        <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples
                                Away)</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1">
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span></div>
                        <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should
                                Know</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="row g-5">

                        @foreach ($categorie->posts as $post)
                        <div class="col-lg-4 border-start custom-border">

                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="{{ asset('assets/img/post-landscape-6.jpg') }}"
                                        alt="" class="img-fluid"></a>

                                <div class="post-meta"><span class="date">lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>{{ $post->created_at->diffForHumans() }}</span>
                                </div>
                                @if(session()->get('lang')==='en')
                                <h2><a href="single-post.html">{{ $post->title_en }}</a></h2>
                                @else
                                <h2><a href="single-post.html">{{ $post->title_fr }}</a></h2>
                                @endif

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

    </section><!-- End Lifestyle Category Section -->
@endif
</main><!-- End #main -->
@endsection
