@extends('layout.main')
@section('title', 'Virtual Tour')
@section('content')

<div class="virtual_tour">
    <div class="container-virtual">
			<div class="content-virtual" style="text-align: center">
				<header><h2 style="text-align: center;font-size:30px;margin-top:40px"><strong>Virtual Tour</strong></h2></header>
				<br>
				<h3 id="vt" style="text-align: center;font-size:20px;margin-top:40px">Jelajahi Wisata Fauna Di Taman Mini Indonesia Indah dari layar gadget anda</h3>
				<br>
                <img src="{{ asset('assets/panduan.jpg') }}" alt="Nature" class="responsive" width="600" height="400" style="margin-top:30px">

			</div>
	</div>
    <div class="blog">
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

</div>
@endsection
