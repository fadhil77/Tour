@extends('layout.main')
@section('title', 'Testimoni')
@section('content')

@guest
@if ( Route::has('login') )
<section class="testimoni">
    <div class="container">
        <div class="section-title mt-3">
            <h2>REVIEW</h2>
            <span class="section-separator"></span>
            <p>Penilaian Pengguna Website Virtual Tour Wisata Fauna Di Taman Mini Indonesia Indah.  </p>
        </div>
    </div>
    {{-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, provident. --}}
    <div class="testimonials-carousel-wrap">
        <div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right" style="color: #fff"></i></div>
        <div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left" style="color: #fff"></i></div>
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
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </div>
                    @endforeach
                    <!--testi end-->

                </div>
            </div>
        </div>

        <div class="tc-pagination"></div>
    </div>
    <div class="container-riview">
        {{-- <div class="post">
          <div class="text">Thanks for rating us!</div>
          <div class="edit">EDIT</div>
        </div> --}}
        <form class="rating-wrapper">
            @csrf
            <label class="rating-label">How helpful was this?
              <div class="ratingItemList">
                <input class="rating rating-1" id="rating-1-2" type="radio" value="1" name="rating"/>
                <label class="rating rating-1" for="rating-1-2"><i class="fas fa-angry fa-lg" style="color: yellow"></i></label>
                <input class="rating rating-2" id="rating-2-2" type="radio" value="2" name="rating"/>
                <label class="rating rating-2" for="rating-2-2"><i class="fas fa-frown fa-lg" style="color: yellow"></i></label>
                <input class="rating rating-3" id="rating-3-2" type="radio" value="3" name="rating"/>
                <label class="rating rating-3" for="rating-3-2"><i class="fas fa-meh fa-lg" style="color: yellow"></i></label>
                <input class="rating rating-4" id="rating-4-2" type="radio" value="4" name="rating"/>
                <label class="rating rating-4" for="rating-4-2"><i class="far fa-laugh fa-lg" style="color: yellow"></i></label>
                <input class="rating rating-5" id="rating-5-2" type="radio" value="5" name="rating"/>
                <label class="rating rating-5" for="rating-5-2"><i class="far fa-grin-stars fa-lg" style="color: yellow"></i></label>
              </div>
            </label>
            <div class="feedback">
              <textarea placeholder="What can we do to improve?" name="komentar"></textarea>
              <input type="hidden" placeholder="Nama" name="nama" value="{{ Auth::user()->name ?? null}}"/>
              {{-- <button type="submit" class="submit">Send Your Feedback</button> --}}

              <button type="submit" class="submit">
                <a class="send" href="{{ route('login') }}">Send Your Feedback</a>
              </button>
            </div>
          </form>
    </div>

      <script>
        const btn = document.querySelector("button");
        const post = document.querySelector(".post");
        const widget = document.querySelector(".star-widget");
        const editBtn = document.querySelector(".edit");
        btn.onclick = ()=>{
          widget.style.display = "none";
          post.style.display = "block";
          editBtn.onclick = ()=>{
            widget.style.display = "block";
            post.style.display = "none";
          }
          return false;
        }
      </script>
</section>

    @endif

    @else

<section class="testimoni">
    <div class="container">
        <div class="section-title mt-3">
            <h2>REVIEW</h2>
            <span class="section-separator"></span>
            <p>Penilaian Pengguna Website Virtual Tour Wisata Fauna Di Taman Mini Indonesia Indah.  </p>
        </div>
    </div>
    <div class="testimonials-carousel-wrap">
        <div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right" style="color: #fff"></i></div>
        <div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left" style="color: #fff"></i></div>
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
                                    {{-- <i class="fa fa-star">{{ $f->rating }}</i> --}}
                                </div>
                                <p>{{ $f->komentar }}</p>
                                <a href="#" class="text-link"></a>
                                <div class="testimonials-avatar">
                                    <h3>{{ $f->nama }}</h3>
                                </div>
                            </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </div>
                    @endforeach
                    <!--testi end-->

                </div>
            </div>
        </div>

        <div class="tc-pagination"></div>
    </div>
    <div class="container-riview">
        {{-- <div class="post">
          <div class="text">Thanks for rating us!</div>
          <div class="edit">EDIT</div>
        </div> --}}
        <form class="rating-wrapper" action="{{ url('feedback') }}" method="POST">
            @csrf
            <label class="rating-label">How helpful was this?
              <div class="ratingItemList">
                <input class="rating rating-1" id="rating-1-2" type="radio" value="1" name="rating"/>
                <label class="rating rating-1" for="rating-1-2"><i class="fas fa-angry fa-lg" style="color: yellow"></i></label>
                <input class="rating rating-2" id="rating-2-2" type="radio" value="2" name="rating"/>
                <label class="rating rating-2" for="rating-2-2"><i class="fas fa-frown fa-lg" style="color: yellow"></i></label>
                <input class="rating rating-3" id="rating-3-2" type="radio" value="3" name="rating"/>
                <label class="rating rating-3" for="rating-3-2"><i class="fas fa-meh fa-lg" style="color: yellow"></i></label>
                <input class="rating rating-4" id="rating-4-2" type="radio" value="4" name="rating"/>
                <label class="rating rating-4" for="rating-4-2"><i class="far fa-laugh fa-lg" style="color: yellow"></i></label>
                <input class="rating rating-5" id="rating-5-2" type="radio" value="5" name="rating"/>
                <label class="rating rating-5" for="rating-5-2"><i class="far fa-grin-stars fa-lg" style="color: yellow"></i></label>
              </div>
            </label>
            <div class="feedback">
              <textarea placeholder="What can we do to improve?" name="komentar"></textarea>
              <input type="hidden" placeholder="Nama" name="nama" value="{{ Auth::user()->name ?? null }}"/>
              <button type="submit" class="submit">Send Your Feedback</button>
              {{-- <a href="{{ route('login') }}" class="submit">Send Your Feedback</a> --}}
            </div>
          </form>
    </div>

      <script>
        const btn = document.querySelector("button");
        const post = document.querySelector(".post");
        const widget = document.querySelector(".star-widget");
        const editBtn = document.querySelector(".edit");
        btn.onclick = ()=>{
          widget.style.display = "none";
          post.style.display = "block";
          editBtn.onclick = ()=>{
            widget.style.display = "block";
            post.style.display = "none";
          }
          return false;
        }
      </script>
</section>
@endguest

@endsection
