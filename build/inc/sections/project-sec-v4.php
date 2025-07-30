<!--==============================
Project Area  
==============================-->
<section class="<?php echo $klass;?>" id="project-sec">
    <div class="container-fluid p-0">
        <div class="slider-area slider-drag-wrap">
            <div class="swiper th-slider project-slider4" id="projectSlider4" 
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":2},"992":{"slidesPerView":3},"1200":{"slidesPerView":4},
                "1600":{"slidesPerView":"4.5"}},"centeredSlides":"true" }'>
                <div class="swiper-wrapper">
                    <?php get_section('project-v4', 'swiper-slide'); ?>
                </div>

            </div>
        </div>
    </div> 
    <div class="shape-mockup projectr-bg-shape1-1 d-xl-block d-none" data-top="0%" data-left="0%">
        <img src="assets/img/shape/projectr-bg-shape1_1.png" alt="img">
    </div>  
    <div class="shape-mockup projectr-bg-shape1-2 d-xl-block d-none" data-bottom="0%" data-left="0%">
        <img src="assets/img/shape/projectr-bg-shape1_2.png" alt="img">
    </div>
    
</section>