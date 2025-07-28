
<!--==============================
Testimonial Area  
==============================-->
<section class="testi-area-1 <?php echo $klass;?>" id="testi-sec"> 
    <div class="container">
        <div class="row gy-50 flex-row-reverse">
            <div class="col-xl-7">
                <div class="testi-thumb1-1">
                    <div class="img1" data-cue="slideInRight">
                        <img src="assets/img/testimonial/testi-thumb1-1.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="title-area">
                    <span class="sub-title style2 before-none text-anim" data-cue="slideInUp">Testimonials</span>
                    <h2 class="sec-title text-anim2" data-cue="slideInUp">What Our Clients Say About us</h2>
                </div>
                <div class="slider-area testi-slider1" data-cue="slideInUp">
                    <div class="swiper th-slider has-shadow" id="testiSlide1" data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"},"1600":{"slidesPerView":"2"}}}'>
                        <div class="swiper-wrapper">  
                            <?php get_section('testi-v1', 'swiper-slide', '5');?>
                        </div>
                        <div class="slider-pagination-wrap mt-15">
                            <button data-slider-prev="#testiSlide1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                            <div class="slider-pagination"></div>
                            <button data-slider-next="#testiSlide1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
