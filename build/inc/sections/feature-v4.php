<?php 
    $title = array(
        'GANs (Generative AdversarialNetworks)',
        'DMs (Diffusion Models) Choose Concept',
        'Transformers (e.g., DALL·E 2,Imagen)',
    );

    $text = array(
        'Two neural networks compete with each other: one generates images, the other critiques them to improve results.',
        'These gradually convert random noise into coherent, detailed images (used in tools like DALL·E, Midjourney, and Stable Diffusion).',
        'These models understand natural language and generate images from textual input using deep neural networks.',
    );
     $img = array(
        'assets/img/feature/5-1.png',
        'assets/img/feature/5-2.png',
        'assets/img/feature/5-3.png',
    );


    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) {
    ?>

        <div class="<?php echo $klass;?>" data-cue="slideInUp">
            <div class="feature-card style4">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="img">
                </div>
                <h3 class="box-title"><?php echo $title[$x];?></h3>
                <p class="box-text"><?php echo $text[$x];?></p>
            </div>
        </div>
    <?php }
?>
