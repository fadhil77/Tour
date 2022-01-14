 <!------------------------ Site Title ---------------------->
@section('header')

{{-- <section class="site-title">
   <div class="site-background" data-aos="fade-up" data-aos-delay="100">
       <img src="{{ asset('assets/bg2.png') }}" alt="Nature" class="responsive" width="800" height="600">
   </div>
</section> --}}

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="{{ asset('assets/bg.png') }}" alt="Nature" class="responsive" width="100%" height="80%">
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second">
                    <img src="{{ asset('assets/bg3.png') }}" alt="Nature" class="responsive" width="800" height="600">
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box third">
                    <img src="{{ asset('assets/bg4.png') }}" alt="Nature" class="responsive" width="800" height="600">
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>


</section>

@endsection

<!------------x----------- Site Title ----------x----------->
