<?php
    $title = array(
        'AI Machine Learning',
        'Speech recognizer using deep learning',
        'AI Machine Learning',
        'Speech recognizer using deep learning',
    );
    $img = array(
        'assets/img/project/project1-1.jpg',
        'assets/img/project/project1-2.jpg',
        'assets/img/project/project1-1.jpg',
        'assets/img/project/project1-2.jpg',
        'assets/img/project/project1-1.jpg',
        'assets/img/project/project1-2.jpg',
    );
    $sub = array(
        'Robotics, Program',
        'User Research',
        'Robotics, Program',
        'User Research',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="project-card">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="project image">
                </div>
                <div class="box-content">
                    <p class="box-subtitle"><?php echo $sub[$x];?></p>
                    <h3 class="box-title"><a href="project-details.html"><?php echo $title[$x];?></a></h3>
                </div>                
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>