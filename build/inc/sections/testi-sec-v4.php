
<!--==============================
Testimonial Area  
==============================-->
<section class="position-relative z-index-2 <?php echo $klass;?>">
    <div class="container-fluid  p-0">
        <div class="slider-area">
            <div class="swiper th-slider testi-slider4" id="testiSlide4" 
           data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"1300":{"slidesPerView":4},
            "1600":{"slidesPerView":"5.5"}},"centeredSlides":"true" }'>
                <div class="swiper-wrapper">  
                    <?php get_section('testi-v4', 'swiper-slide');?>
                </div>
                <div class="slider-pagination style3"></div>
            </div>
        </div>
    </div>
</section>
