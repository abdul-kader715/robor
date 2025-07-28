<!--==============================
Process Area  
==============================-->
<section class="position-relative <?php echo $klass;?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="title-area text-center">
                    <div class="shadow-title style4">PROCESS</div>
                    <span class="sub-title2 text-gradient text-uppercase mb-30" data-cue="slideInUp">Work Process</span>
                    <h2 class="sec-title style2 fw-bold text-uppercase text-anim2" data-cue="slideInUp">Our 4-Step Process for Delivering AI Solutions</h2>
                </div>
            </div>
        </div>
        <div class="process-card-wrap">
            <?php
                $title = array(
                    'Discovery & Consultation',
                    'Solution Design & Development',
                    'Implementation & Integration',
                    'Monitoring & Continuous Improvement'
                );
                $img = array(
                    'assets/img/process/process_1_1.jpg',
                    'assets/img/process/process_1_2.jpg',
                    'assets/img/process/process_1_3.jpg',
                    'assets/img/process/process_1_4.jpg',
                );
                $text = array(
                    'We begin by understanding your business goals, challenges, and opportunities for AI integration. Our experts assess your current systems and identify areas.',
                    'We begin by understanding your business goals, challenges, and opportunities for AI integration. Our experts assess your current systems and identify areas.',
                    'We begin by understanding your business goals, challenges, and opportunities for AI integration. Our experts assess your current systems and identify areas.',
                    'We begin by understanding your business goals, challenges, and opportunities for AI integration. Our experts assess your current systems and identify areas.',
                );
                $num = array(
                    '1',
                    '2',
                    '3',
                    '4',
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="process-card">
                        <div class="box-thumb-wrap">
                            <h3 class="box-number"><?php echo $num[$x];?></h3>
                            <div class="box-thumb">
                                <img src="<?php echo $img[$x];?>" alt="img">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><?php echo $title[$x];?></h3>
                            <p class="box-text"><?php echo $text[$x];?></p>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</section>