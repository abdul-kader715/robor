<?php
    $title = array(
        'AI Development',
        'Data Analytics',
        'Machine Learning',
        'AI Consulting Services',
        'Automation and Process',
        'Education & Science',
        'AI Research',
        'AI in Cybersecurity',
    );
    $img = array(
        'assets/img/icon/service/service_icon_1_1.svg',
        'assets/img/icon/service/service_icon_1_2.svg',
        'assets/img/icon/service/service_icon_1_3.svg',
        'assets/img/icon/service/service_icon_1_4.svg',
        'assets/img/icon/service/service_icon_1_5.svg',
        'assets/img/icon/service/service_icon_1_6.svg',
        'assets/img/icon/service/service_icon_1_7.svg',
        'assets/img/icon/service/service_icon_1_8.svg',
    ); 
    $text = array(
        'Creating & optimizing models using proprietary or customer data. AI model tailored to specific business.',
        'Providing insights for time-sensitive decisions. Forecasting trends, risks, and opportunities.',
        'Building algorithms tailored to specific needs. Using advanced techniques to improve accuracy and efficiency.',
        'Helping businesses identify the most impactful AI applications. Evaluating a business’s preparedness.',
        'Automating repetitive tasks like data entry or invoice processing. Enhancing customer support.',
        'Diagnostic tools, patient management systems, and predictive care. Fraud detection, algorithmic trading,',
        'Automating repetitive tasks like data entry or invoice processing. Enhancing efficiency by integrating.',
        'Ensuring system integrity through AI-driven oversight. Using AI to detect anomalies and prevent.',
    ); 
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>" data-cue="slideInUp">
            <div class="service-card">
                <div class="box-icon">
                    <div class="color-masking">
                        <div class="masking-src" data-mask-src="<?php echo $img[$x];?>"></div>
                        <img src="<?php echo $img[$x];?>" alt="icon">
                    </div>
                </div>
                <h3 class="box-title"><a href="service.html"><?php echo $title[$x];?></a></h3>
                <p class="box-text"><?php echo $text[$x];?></p>
                <a href="service-details.html" class="link-btn style4">Read More <i class="fas fa-long-arrow-right ms-2"></i></a>
            </div>
        </div>
    <?php if($x == $y) {
        break;
    } }; 
?>