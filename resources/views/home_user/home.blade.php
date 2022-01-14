@extends('layout/main')
@extends('layout.header')
@section('title', 'Home')
@section('content')

{{-- About Us --}}

<section class="about section-about" id="about">

    <div class="image" data-aos="fade-in" data-aos-delay="200">
        <img src="{{ asset('assets/us.jpg') }}" alt="">
    </div>

    <div class="content" data-aos="fade-in" data-aos-delay="200">
        <h3 style="text-align: left">About Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptates corrupti natus necessitatibus beatae voluptatibus, deserunt quo soluta minima libero laborum, corporis error esse vitae placeat blanditiis reiciendis vel? Minima.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dicta doloremque placeat porro, ipsam quia at beatae atque odit iste?</p>
    </div>

</section>

{{-- End About Us --}}

<!-- ---------------------- Site Content -------------------------->
<div class="blog">
    <h1 class="heading" style="text-transform: uppercase">
        <span>v</span>
        <span>i</span>
        <span>r</span>
        <span>t</span>
        <span>u</span>
        <span>a</span>
        <span>l</span>

        <span>t</span>
        <span>o</span>
        <span>u</span>
        <span>r</span>
    </h1>
    <div class="container">
        <div class="owl-carousel owl-theme blog-post">
            @foreach ($virtual as $virtual)

            <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                <img src="{{asset('file/'.$virtual->image)}}" alt="post-1">
                <div class="blog-title">
                    <h1>Virtual Tour</h1>
                    <h3>{{ $virtual->nama }}</h3>
                    <a href="{{ $virtual->link }}"><button class="btn btn-blog">Get Strated</button></a>
                    <span>100 views</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="owl-navigation">
            <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
            <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
        </div>
    </div>
</div>
<!-- -----------x---------- Site Content -------------x------------>

{{-- Testimoni --}}

<section class="testimoni">
    <div class="container">
        <div class="section-title mt-3">
            <h1 class="heading" style="text-transform: uppercase">
                <span>t</span>
                <span>e</span>
                <span>s</span>
                <span>t</span>
                <span>i</span>
                <span>m</span>
                <span>0</span>
                <span>n</span>
                <span>i</span>
            </h1>
            <span class="section-separator"></span>
            <p>Penilaian Pengguna Website Virtual Tour Wisata Fauna Di Taman Mini Indonesia Indah.  </p>
        </div>
    </div>
    {{-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, provident. --}}
    <div class="testimonials-carousel-wrap">
        {{-- <div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right" style="color: #fff"></i></div>
        <div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left" style="color: #fff"></i></div> --}}
        <div class="testimonials-carousel">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ( $feedback as $f )
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="{{ asset('assets/images/21.jpg') }}"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                            <div class="testimonials-text">
                                <div class="listing-rating">
                                    @for ($i = 0; $i < $f->rating; $i++)
                                    <i class="fa fa-star"></i>
                                    @endfor
                                </div>
                                <p>{{ $f->komentar }}</p>
                                <a href="#" class="text-link"></a>
                                <div class="testimonials-avatar">
                                    <h3>{{ $f->nama }}</h3>
                                </div>
                            </div>
                            {{-- <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> --}}
                        </div>
                    </div>
                    @endforeach
                    <!--testi end-->

                </div>
            </div>
        </div>

        <div class="tc-pagination"></div>
    </div>
</section>

{{-- EndTestimoni --}}

{{-- Newsletter --}}

<section class="newsletters section-newsletters">

    <div class="contents">
        <h1 class="headings" style="text-transform:capitalize">subscirbe now</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam ipsam repellat nostrum esse officiis unde quisquam corporis doloremque adipisci similique!</p>
        <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="emails">
            <input type="submit" value="subscirbe" class="btns">
        </form>
    </div>

</section>

{{-- End Newsletter --}}

{{-- Logo --}}

<section class="clients">

    <div class="swiper clients-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide silde"><img src="{{ asset('assets/1.png') }}" alt=""></div>
            <div class="swiper-slide silde"><img src="{{ asset('assets/2.png') }}" alt=""></div>
            <div class="swiper-slide silde"><img src="{{ asset('assets/3.png') }}" alt=""></div>
        </div>
    </div>

</section>

{{-- End Logo --}}
@endsection
