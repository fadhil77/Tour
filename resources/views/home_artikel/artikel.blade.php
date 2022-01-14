@extends('layout.main')
@section('title', 'Artikel')
@section('content')

<div class="title-artikel">
    <h2>Artikels</h2>
    <span class="section-separator"></span>
    <p>Wisata Fauna Di Taman Mini Indonesia Indah. </p>
</div>
<section class="container">
    <div class="site-content">
        <div class="posts">
            @foreach ($artikel as $a)
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="post-image">
                    <div>
                        <img src="{{ asset('file/'.$a->image)  }}" class="img" alt="blog1">
                    </div>
                    <div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14, 2019</span>
                        <span>2 Commets</span>
                    </div>
                </div>
                <div class="post-title">
                    <a href="#">{{ $a->judul }}</a>
                    <p>{!! $a->konten !!}</p>
                    <br>

                    <a class="btn post-btn" href="{{ route('readmore', $a->id) }}">Read More &nbsp; <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <hr>
            @endforeach
            <div class="pagination flex-row">
                <a href="#"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="pages">1</a>
                <a href="#" class="pages">2</a>
                <a href="#" class="pages">3</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <aside class="sidebar">
            <div class="searchInputWrapper">
                <input class="searchInput" type="text" placeholder='Search'>
                <i class="searchInputIcon fa fa-search"></i>
            </div>
            <div class="category">
                <h2>Category</h2>
                <ul class="category-list">
                    <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                        <a href="#">Taman Burung</a>
                        <span>(05)</span>
                    </li>
                    <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                        <a href="#">Dunia Air Tawar</a>
                        <span>(02)</span>
                    </li>
                    <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                        <a href="#">Museum Fauna Indonesia Komodo</a>
                        <span>(07)</span>
                    </li>
                </ul>
            </div>
            <div class="popular-post">
                <h2>Popular Post</h2>
                <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                    <div class="post-image">
                        <div>
                            <img src="{{ asset('assets/Blog-post/post-1.jpg') }}" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                2019</span>
                            <span>2 Commets</span>
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">New data recording system to better analyse road accidents</a>
                    </div>
                </div>
                <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                    <div class="post-image">
                        <div>
                            <img src="{{ asset('assets/Blog-post/post-10.jpg') }}" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                2019</span>
                            <span>2 Commets</span>
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">New data recording system to better analyse road accidents</a>
                    </div>
                </div>
                <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                    <div class="post-image">
                        <div>
                            <img src="./assets/popular-post/m-blog-3.jpg" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                2019</span>
                            <span>2 Commets</span>
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">New data recording system to better analyse road accidents</a>
                    </div>
                </div>
                <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                    <div class="post-image">
                        <div>
                            <img src="./assets/popular-post/m-blog-4.jpg" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                2019</span>
                            <span>2 Commets</span>
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">New data recording system to better analyse road accidents</a>
                    </div>
                </div>
                <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                    <div class="post-image">
                        <div>
                            <img src="./assets/popular-post/m-blog-5.jpg" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                2019</span>
                            <span>2 Commets</span>
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">New data recording system to better analyse road accidents</a>
                    </div>
                </div>
            </div>
            {{-- <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                <h2>Newsletter</h2>
                <div class="form-element">
                    <input type="text" class="input-element" placeholder="Email">
                    <button class="btn form-btn">Subscribe</button>
                </div>
            </div>
            <div class="popular-tags">
                <h2>Popular Tags</h2>
                <div class="tags flex-row">
                    <span class="tag" data-aos="flip-up" data-aos-delay="100">Software</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="200">technology</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="300">travel</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="400">illustration</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="500">design</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="600">lifestyle</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="700">love</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="800">project</span>
                </div>
            </div> --}}
        </aside>
    </div>
</section>

@endsection
