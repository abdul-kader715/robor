<?php 
    $titleMonth = array(
        'Standard',
        'Professional',
        'Business',
        'Enterprise',
    );
    $priceMonth = array(
        '$35',
        '$62',
        '$86',
        '$99',
    );
    $durationMonth = array(
        '/Per Month',
        '/Per Month',
        '/Per Month',
        '/Per Month',
    );
    $active = array(
        '',
        'active',
        '',
        '',
    );
    $textMonth = array(
        'Ideal fo personal projects',
        'Ideal fo personal projects',
        'Ideal fo personal projects',
        'Ideal fo personal projects',
    );
    $listMonth = array(
        '<li><i class="fas fa-check-double"></i> Access AI tools</li>
        <li><i class="fas fa-check-double"></i> Exclusive features</li>
        <li><i class="fas fa-check-double"></i> Discord access</li>
        <li class="unavailable"><i class="fas fa-check-double"></i> 24/7 support</li>',

        '<li><i class="fas fa-check-double"></i> Access AI tools</li>
        <li><i class="fas fa-check-double"></i> Exclusive features</li>
        <li><i class="fas fa-check-double"></i> Discord access</li>
        <li><i class="fas fa-check-double"></i> 24/7 support</li>',

        '<li><i class="fas fa-check-double"></i> Access AI tools</li>
        <li><i class="fas fa-check-double"></i> Exclusive features</li>
        <li><i class="fas fa-check-double"></i> Discord access</li>
        <li><i class="fas fa-check-double"></i> 24/7 support</li>',

        '<li><i class="fas fa-check-double"></i> Access AI tools</li>
        <li><i class="fas fa-check-double"></i> Exclusive features</li>
        <li><i class="fas fa-check-double"></i> Discord access</li>
        <li><i class="fas fa-check-double"></i> 24/7 support</li>',
    );
    $monthtabId = array(
        'price-month-tab1',
        'price-month-tab2',
        'price-month-tab3',
        'price-month-tab4',
    );
    $monthtabId2 = array(
        'priceMonthTab1',
        'priceMonthTab2',
        'priceMonthTab3',
        'priceMonthTab4',
    );

    $titleAnnual = array(
        'Standard',
        'Professional',
        'Business',
        'Enterprise',
    );
    $priceAnnual = array(
        '$350',
        '$620',
        '$860',
        '$990',
    );
    $durationAnnual = array(
        '/Per Year',
        '/Per Year',
        '/Per Year',
        '/Per Year',
    );
    $textAnnual = array(
        'Ideal fo personal projects',
        'Ideal fo personal projects',
        'Ideal fo personal projects',
        'Ideal fo personal projects',
    );
    $listAnnual = array(
        '<li><i class="fas fa-check-double"></i> Access AI tools</li>
        <li><i class="fas fa-check-double"></i> Exclusive features</li>
        <li><i class="fas fa-check-double"></i> Discord access</li>
        <li class="unavailable"><i class="fas fa-check-double"></i> 24/7 support</li>',

        '<li><i class="fas fa-check-double"></i> Access AI tools</li>
        <li><i class="fas fa-check-double"></i> Exclusive features</li>
        <li><i class="fas fa-check-double"></i> Discord access</li>
        <li><i class="fas fa-check-double"></i> 24/7 support</li>',

        '<li><i class="fas fa-check-double"></i> Access AI tools</li>
        <li><i class="fas fa-check-double"></i> Exclusive features</li>
        <li><i class="fas fa-check-double"></i> Discord access</li>
        <li><i class="fas fa-check-double"></i> 24/7 support</li>',

        '<li><i class="fas fa-check-double"></i> Access AI tools</li>
        <li><i class="fas fa-check-double"></i> Exclusive features</li>
        <li><i class="fas fa-check-double"></i> Discord access</li>
        <li><i class="fas fa-check-double"></i> 24/7 support</li>',
    );
    $annualtabId = array(
        'price-annual-tab1',
        'price-annual-tab2',
        'price-annual-tab3',
        'price-annual-tab4',
    );
    $annualtabId2 = array(
        'priceAnnualTab1',
        'priceAnnualTab2',
        'priceAnnualTab3',
        'priceAnnualTab4',
    );
    $arrlength = count($titleMonth);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>" data-cue="slideInUp">
            <div class="price-card style2 <?php echo $active[$x];?>">
                <div class="card-bg-img" data-mask-src="assets/img/shape/pricing-card-shape2-1.png"></div>
                <div class="box-icon">
                    <img src="assets/img/normal/price-thumb2-1.png" alt="img">
                    <ul class="nav nav-tabs pricing-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="<?php echo $annualtabId[$x];?>" data-bs-toggle="tab" data-bs-target="#<?php echo $annualtabId2[$x];?>" type="button" role="tab" aria-controls="<?php echo $annualtabId2[$x];?>" aria-selected="false">Annual</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="<?php echo $monthtabId[$x];?>" data-bs-toggle="tab" data-bs-target="#<?php echo $monthtabId2[$x];?>" type="button" role="tab" aria-controls="<?php echo $monthtabId2[$x];?>" aria-selected="true">Monthly</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade " id="<?php echo $annualtabId2[$x];?>" role="tabpanel" aria-labelledby="<?php echo $annualtabId[$x];?>">
                        <h3 class="box-title"><?php echo $titleAnnual[$x];?></h3>
                        <p class="box-text"><?php echo $textAnnual[$x];?></p>
                        <h4 class="price-card_price"><?php echo $priceAnnual[$x];?><span class="duration"><?php echo $durationAnnual[$x];?></span>
                        </h4>
                        <div class="checklist">
                            <ul>
                                <?php echo $listAnnual[$x];?>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="<?php echo $monthtabId2[$x];?>" role="tabpanel" aria-labelledby="<?php echo $monthtabId[$x];?>">
                        <h3 class="box-title"><?php echo $titleMonth[$x];?></h3>
                        <p class="box-text"><?php echo $textMonth[$x];?></p>
                        <h4 class="price-card_price"><?php echo $priceMonth[$x];?><span class="duration"><?php echo $durationMonth[$x];?></span>
                        </h4>
                        <div class="checklist">
                            <ul>
                                <?php echo $listMonth[$x];?>
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="btn-wrap">
                    <a href="contact.html" class="th-btn style-gradient3">Choose Package</a>
                </div>
            </div>
        </div>
    <?php }
?>
