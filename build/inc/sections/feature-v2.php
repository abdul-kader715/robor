<?php
    $title = array(
        'Natural Language Processing (NLP)',
        'Data Integration and Management',
        'Customization and API Integration',
    );
    $img = array(
        'assets/img/feature/2-1.png',
        'assets/img/feature/2-2.png',
        'assets/img/feature/2-3.png',
    );
    $text = array(
        'Features: Chatbots, virtual assistants, sentiment analysis, and language translation. Enables understanding, generation, and interaction using human language.',
        'Features: Chatbots, virtual assistants, sentiment analysis, and language translation. Enables understanding, generation, and interaction using human language.',
        'Features: Chatbots, virtual assistants, sentiment analysis, and language translation. Enables understanding, generation, and interaction using human language.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>" data-cue="slideInUp">
            <div class="feature-card style2">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="icon">
                </div>
                <h3 class="box-title"><?php echo $title[$x];?></h3>
                <p class="box-text"><?php echo $text[$x];?></p>
            </div>
        </div>
    <?php }; 
?>