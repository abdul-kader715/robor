<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-8" id="hero" data-bg-src="assets/img/hero/hero_bg_8_1.jpg">
    <div class="swiper th-slider" id="heroSlider8" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
        <div class="swiper-wrapper">
            <?php
                $title = array(
                    'Empowering Financial',
                    'Empowering Financial',
                    'Empowering Financial',
                );
                $title2 = array( 
                    'Security & Growth',
                    'Security & Growth',
                    'Security & Growth',
                );
                $sub = array(
                    'EXPERT FINANCIAL CONSULTING SERVICES',
                    'FINANCIAL MARKET ANALYSIS PRO',
                    'FINANCIAL SALES ACCELERATION',
                );
                $content = array(
                    'At Robor, we believe in the power of informed financial decisions. We partner with you to understand your unique needs and aspirations, then craft a personalized roadmap to achieve your financial goals.',
                    'At Robor, we believe in the power of informed financial decisions. We partner with you to understand your unique needs and aspirations, then craft a personalized roadmap to achieve your financial goals.',
                    'At Robor, we believe in the power of informed financial decisions. We partner with you to understand your unique needs and aspirations, then craft a personalized roadmap to achieve your financial goals.',
                );
                $img = array(
                    'assets/img/hero/hero_bg_8_1.jpg',
                    'assets/img/hero/hero_bg_8_2.jpg',
                    'assets/img/hero/hero_bg_8_3.jpg',
                );
                $img2 = array(
                    'assets/img/hero/hero_8_1.png',
                    'assets/img/hero/hero_8_2.png',
                    'assets/img/hero/hero_8_3.png',
                );
                

                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="swiper-slide" data-bg-src="<?php echo $img[$x];?>" data-overlay="black" data-opacity="8">
                        <div class="hero-bg-shape8-1" data-bg-src="assets/img/hero/hero_bg_shape8_1.jpg">
                        </div>
                        <div class="hero-inner">
                            <div class="container">
                                <div class="hero-style8 z-index-common">
                                    <span class="sub-title style4" data-ani="slideinup" data-ani-delay="0.2s"><img class="logo" src="assets/img/logo-icon.svg" alt="img"> <?php echo $sub[$x];?></span>
                                    <h1 class="hero-title text-white">
                                        <span class="title1" data-ani="slideinup" data-ani-delay="0.4s"><?php echo $title[$x];?></span>
                                        <span class="title2" data-ani="slideinup" data-ani-delay="0.5s"><?php echo $title2[$x];?></span>
                                    </h1>
                                    <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s"><?php echo $content[$x];?></p>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.7s">
                                        <a href="contact.html" class="th-btn style3">Explore Us<div class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                                        <a href="about.html" class="th-btn style2">Get Services<div class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-img-8 z-index-common" data-ani="slidebottomright" data-ani-delay="0.1s">
                                <img src="<?php echo $img2[$x];?>" alt="Image">
                            </div>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
        <div class="slider-pagination"></div>
    </div> 
    <div class="scroll-down">
        <a href="#about-sec" class="hero-8-scroll-wrap"><i class="far fa-arrow-down"></i></a>
    </div> 
</div>
<!--======== / Hero Section ========-->