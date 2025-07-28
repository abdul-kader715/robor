<?php 
    $title = array(
        'Alex Javed',
        'Jenny William',
        'Daniel Thomas',
        'Jessica Lauren',
        'Alex Joseph',
    );
    $img = array(
        'assets/img/team/team_1_1.png',
        'assets/img/team/team_1_2.png',
        'assets/img/team/team_1_3.png',
        'assets/img/team/team_1_4.png',
        'assets/img/team/team_1_5.png',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>
        <div class="<?php echo $klass;?>">
            <div class="th-team team-card" data-cue="slideInUp">
                <div class="team-img">
                    <img src="<?php echo $img[$x];?>" alt="Team">
                </div>
                <div class="team-card-content">
                    <h3 class="box-title"><a href="team-details.html"><?php echo $title[$x];?></a></h3>                    
                </div>
                <div class="th-social">
                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>