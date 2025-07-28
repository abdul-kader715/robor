<!--==============================
Project Area  
==============================-->
<section class="<?php echo $klass;?>" id="project-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-8">
                <div class="title-area text-center">
                    <div class="shadow-title style2">Case</div>
                    <span class="sub-title text-anim" data-cue="slideInUp">Case Study</span>
                    <h2 class="sec-title text-anim2" data-cue="slideInUp">AI Projects Case Study</h2>
                    <p class="sec-text" data-cue="slideInUp">An AI agency is a specialized organization dedicated to helping businesses and organizations leverage artificial intelligence to achieve their goals.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container th-container">
        <div class="slider-area">
            <div class="swiper th-slider project-slider1" id="projectSlider1" data-slider-options='{"paginationType":"progressbar","breakpoints":{"0":{"slidesPerView":1},"1000":{"slidesPerView":"2"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('project-v1', 'swiper-slide'); ?>
                </div>
                <!-- pagination -->
                <div class="slider-pagination-wrap mt-60">
                    <div class="slider-pagination2"></div>
                    <div class="slider-pagination"></div>
                    <div class="icon-box">
                        <button data-slider-prev="#projectSlider1" class="slider-arrow style2 default"><i class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#projectSlider1" class="slider-arrow style2 default"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>