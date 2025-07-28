<?php
    $title = array(
        'Strategic Mergers and Acquisitions Advisory for Maximizing Growth',
        'Holistic Enterprise Risk Management  for Mitigating Global Business Risks',
        'End-to-End Operational Efficiency Improvement Project',
        'World consultancy services we’ve been involved in several exciting projects',
        'Discovering your creative: a journey to inspired living consultancy',
    );
    $img = array(
        'assets/img/portfolio/portfolio1-4.png',
        'assets/img/portfolio/portfolio1-1.png',
        'assets/img/portfolio/portfolio1-3.png',
        'assets/img/portfolio/portfolio1-5.png',
        'assets/img/portfolio/portfolio1-6.png',
    );
    $sub = array(
        'Creative Process',
        'Human Resources',
        'Finance Report',
        'Creative Services',
        'Consultanting',
    );
    $num = array(
        '01.',
        '02.',
        '03.',
        '04.',
        '05.',
    );
    $text = array(
        'Robor offers full range of consultancy and training for data consultation strategic ways for business consul and training methods for data consultation.',
        'Robor offers full range of consultancy and training for data consultation strategic ways for business consul and training methods for data consultation.',
        'Robor offers full range of consultancy and training for data consultation strategic ways for business consul and training methods for data consultation.',
        'Robor offers full range of consultancy and training for data consultation strategic ways for business consul and training methods for data consultation.',
        'Robor offers full range of consultancy and training for data consultation strategic ways for business consul and training methods for data consultation.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="project-card2">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="project image">
                </div>
                <div class="box-content">
                    <span class="box-number"><?php echo $num[$x];?></span>
                    <p class="box-subtitle"><?php echo $sub[$x];?></p>
                    <h3 class="box-title"><a href="project-details.html"><?php echo $title[$x];?></a></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <a href="project-details.html" class="th-btn style2 btn-sm ">Read More <i class="fas fa-plus ms-2"></i></a>
                </div>                
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>