<!--==============================
Testimonial Area  
==============================-->
<section class="testi-area-5 <?php echo $klass;?>"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-8">
                <div class="title-area text-center">
                    <span class="sub-title style5 justify-content-center mb-30 text-anim text-black-color2" data-cue="slideInUp">Testimonials</span>
                    <h2 class="sec-title text-uppercase text-anim2 " data-cue="slideInUp">What Our Clients Say About Us?</h2>
                </div>
            </div>            
        </div>
        <div class="testi-wrap5" data-cue="slideInUp">
            <div class="testi-quote-icon">
                <img src="assets/img/icon/quote-icon.svg" alt="icon">
            </div>
            <div class="slider-area">
                <div class="swiper th-slider testi-slider5 " id="testiSlide5" data-slider-options='{"autoHeight": "true","effect": "fade"}'>
                    <div class="swiper-wrapper">  
                        <?php get_section('testi-v2.1', 'swiper-slide');?>
                    </div>
                    <div class="slider-pagination-wrap">
                        <div class="slider-pagination2"></div>
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlide5" class="slider-arrow style-border3 default"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#testiSlide5" class="slider-arrow style-border3 default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="shape-mockup  d-xl-block d-none" data-top="10%" data-right="7%">
        <img src="assets/img/normal/testi-thumb1-3.png" alt="img">
    </div>
    <div class="shape-mockup  d-xl-block d-none" data-top="0%" data-left="7%">
        <img src="assets/img/shape/bg-shape2.png" alt="img">
    </div>
</section>
