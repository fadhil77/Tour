<!-- Jquery Library file -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>

<!-- --------- Owl-Carousel js ------------------->
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>

<!-- ------------ AOS js Library  ------------------------- -->
<script src="{{ asset('js/aos.js')}}"></script>

<!-- Custom Javascript file -->
<script src="{{ asset('js/main.js')}}"></script>
<script src="{{ asset('js/scripts.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>

 <!-- Swiper JS -->
 {{-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> --}}

<!-- Custom style css2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
{{-- feedback --}}
<script>
    $("button.submit").disabled = true; // disable button on load

// Enable button
function enable_submit() {
    $("button.submit").disabled = false;
    $("button.submit").addClass("not-disabled");
}

// Disable button
function disable_submit() {
    $("button.submit").disabled = true;
    $("button.submit").removeClass("not-disabled");
}

// Display feedback after rating
$(".rating").on("click", function () {
    var rating = this["value"];

    $(".feedback").css("display", "block");

    feedback_validate(rating);
});

// Run enable button function based on input
$(".feedback textarea").keyup(function () {
    if ($(".feedback textarea").val().length > 3) {
        enable_submit();
    }
});

// Enable or disable button by validation
function feedback_validate(val) {
    if (val <= 3) {
        disable_submit();
    } else if (val > 3) {
        enable_submit();
    }
}
// swiper image
var swiper = new Swiper(".home-slider", {
    loop:true,
    grabCursor:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

// Swiper Client
var swiper = new Swiper(".clients-slider", {
    loop:false,
    grabCursor:true,
    spaceBetween: 20,
    breakpoints: {
        0: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
    },
});
</script>
{{-- end feedback --}}
