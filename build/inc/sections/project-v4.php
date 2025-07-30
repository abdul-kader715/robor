<?php
   
    $img = array(
        'assets/img/project/project4-1.jpg',
        'assets/img/project/project4-2.jpg',
        'assets/img/project/project4-3.jpg',
        'assets/img/project/project4-4.jpg',
        'assets/img/project/project4-5.jpg',
        'assets/img/project/project4-6.jpg',
        'assets/img/project/project4-7.jpg',
        'assets/img/project/project4-8.jpg',
        'assets/img/project/project4-1.jpg',
        'assets/img/project/project4-2.jpg',
        'assets/img/project/project4-3.jpg',
        'assets/img/project/project4-4.jpg',
        'assets/img/project/project4-5.jpg',
        'assets/img/project/project4-6.jpg',
        'assets/img/project/project4-7.jpg',
        'assets/img/project/project4-8.jpg',
    );
    $arrlength = count($img);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="project-card4">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="project image">
                    <a href="project-details.html" class="icon-btn"><i class="fal fa-arrow-up-right"></i></a>
                </div>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>