
<!--==============================
Marquee Area  
==============================-->
<div class="space-bottom" data-cue="slideInUp">
    <div class="<?php echo $klass;?>">
        <div class="container-fluid p-0">
            <div class="swiper th-slider marquee-slider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"true","speed":10000,"spaceBetween":30}'>
                <div class="swiper-wrapper">
                    <?php
                        $text = array(
                            'Content Generator',
                            'AI Image Generator',
                            'AI Technology',
                            'Generate With Ease',
                            'Content Generator',
                            'AI Image Generator',
                            'AI Technology',
                            'Generate With Ease',
                        );
                        $img = array(
                            'assets/img/marquee/marquee1-1.png',
                            'assets/img/marquee/marquee1-2.png',
                            'assets/img/marquee/marquee1-3.png',
                            'assets/img/marquee/marquee1-4.png',
                            'assets/img/marquee/marquee1-1.png',
                            'assets/img/marquee/marquee1-2.png',
                            'assets/img/marquee/marquee1-3.png',
                            'assets/img/marquee/marquee1-4.png',
                        );
                        $arrlength = count($text);
    
                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div class="swiper-slide">
                                <div class="marquee-card">
                                    <div class="marquee-icon color-masking">
                                        <div class="masking-src" data-mask-src="assets/img/shape/star-shape1.png"></div>
                                        <img src="assets/img/shape/star-shape1.png" alt="img">
                                    </div>
                                    <a target="_blank" href="#">
                                        <?php echo $text[$x];?>
                                    </a>                            
                                </div>
                            </div>
                        <?php }; 
                    ?>
                    
                </div>
            </div>
    
        </div>
    </div>
</div>
