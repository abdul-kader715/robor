<?php 
    $title = array(
        'Basic Plan',
        'Pro Plan',
        'Enterprise Plan',
    );
   
    $price = array(
        '$5.99',
        '$14.99',
        '$49.99',
    );
    $duration = array(
        '/ Month',
        '/ Month',
        '/ Month',
    );
   
    $text = array(
        '15 days free trail image generate.',
        '30 days free trial for advanced features.',
        'Custom trial period tailored for teams.',
    );
    $list = array(
        '<li> 599 credits/month Fast Mode</li>
        <li> Access all styles & regular updates</li>
        <li> User-friendly online design tools</li>
        <li> Optional credit top-ups</li>',

        '<li> 1499 credits/month Ultra Mode</li>
        <li> Priority access to new styles & updates</li>
        <li> Enhanced collaboration tools</li>
        <li> 24/7 customer support</li>',

        '<li> Unlimited credits/month Premium Modep</li>
        <li> Dedicated account manager and training</li>
        <li> Advanced analytics and reporting tools</li>
        <li> Custom integrations available</li>',

    );
    
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>">
            <div class="price-card style4" >
                <div>
                    <h3 class="box-title text-white"><?php echo $title[$x];?></h3>
                    <p class="box-subtitle text-white"><?php echo $text[$x];?></p>
                </div>
                <span class='line1'></span>
                <div class="checklist">
                    <ul>
                        <?php echo $list[$x];?>
                    </ul>
                </div>
                <span class='line2'></span>
                <div class="btn-wrap">
                    <h4 class="price-card_price"><?php echo $price[$x];?><span class="duration"><?php echo $duration[$x];?></span>
                    </h4>
                    <a href="contact.html" class="th-btn style-gradient4">Get Started Now <i class="far fa-long-arrow-right ms-2"></i></a>
                </div>
                
            </div>
        </div>
    <?php }
?>
