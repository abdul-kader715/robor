
<!--==============================
Counter Area  
==============================-->
<div class="counter-area-2 <?php echo $klass;?>">
    <div class="container">
        <div class="counter-wrap2">
            <?php
                $title = array(
                    'Project Completed',
                    'Creative Minds',
                    'Happy Customers',
                    'Innovative Projects',
                    'Collaborative Team',
                );
                $num = array(
                    '68',
                    '16',
                    '62',
                    '7',
                    '38',
                );
                $numAdd = array(
                    'M',
                    'k',
                    'M',
                    'k',
                    'M',
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="counter-card2 style2" data-cue="slideInUp">
                        <div class="media-body">
                            <h2 class="box-number"><span class="counter-number"><?php echo $num[$x];?></span><?php echo $numAdd[$x];?></h2>
                            <p class="box-text"><?php echo $title[$x];?></p>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</div>