<?php
    $title = array(
        'Tech support',
        'Robo Genius',
        'Image Generation',
        'Chatbots',
    );
    $icon = array(
        'assets/img/icon/feature-icon1-1.svg',
        'assets/img/icon/feature-icon1-2.svg',
        'assets/img/icon/feature-icon1-3.svg',
        'assets/img/icon/feature-icon1-4.svg',
    );
    $text = array(
        'To empower businesses with intelligent, scalable, and impactful solutions that drive progress',
        'To empower businesses with intelligent, scalable, and impactful solutions that drive progress',
        'To empower businesses with intelligent, scalable, and impactful solutions that drive progress',
        'To empower businesses with intelligent, scalable, and impactful solutions that drive progress',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="feature-card">
                <div class="feature-card-details">
                    <div class="box-icon">
                        <img src="<?php echo $icon[$x];?>" alt="icon">
                    </div>
                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                </div>
            </div>
        </div>
    <?php }; 
?>