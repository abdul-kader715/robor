<?php
    $img = array(
        'assets/img/gallery/gallery_1_1.jpg',
        'assets/img/gallery/gallery_1_2.jpg',
        'assets/img/gallery/gallery_1_3.jpg',
        'assets/img/gallery/gallery_1_4.jpg',
        'assets/img/gallery/gallery_1_5.jpg',
        'assets/img/gallery/gallery_1_6.jpg',
        'assets/img/gallery/gallery_1_7.jpg',
        'assets/img/gallery/gallery_1_8.jpg',
        'assets/img/gallery/gallery_1_9.jpg',
        'assets/img/gallery/gallery_1_10.jpg',
        'assets/img/gallery/gallery_1_11.jpg',
    );

    $arrlength = count($img);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="<?php echo $img[$x];?>" alt="img">
                    <a href="<?php echo $img[$x];?>" class="icon-btn popup-image"><i class="far fa-plus"></i></a>
                </div>
            </div>
        </div>
    <?php }; 
?>