
<!--==============================
Faq Area
==============================-->
<div class="faq-wrap3">
    <div class="accordion" id="faqAccordion">
        <?php 
            $title = array( 
                'What is an AI startup, and what services do you offer?',
                'What is an AI startup, and what services do you offer?',
                'How can your AI solutions benefit small businesses?',
                'What industries do you focus on for AI integration?',
            );
            $arrlength = count($title);
            for($x = 0; $x < $arrlength ; $x++) { ?>

                <?php 
                    $active_class = '';
                    $collapse_class = 'collapsed';
                    $show_class = '';
                    $arealabel       = 'false';

                    if ($x == 0) {
                        $collapse_class = '';
                        $show_class = 'show';
                        $arealabel       = 'true';
                    }
                ?>
 
                <div class="accordion-card style2" data-cue="slideInUp">
                    <div class="accordion-header" id="collapse-item-<?php echo $x + 1;?>">
                        <button class="accordion-button <?php echo $collapse_class;?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $x + 1;?>" aria-expanded="<?php echo $arealabel;?>" aria-controls="collapse-<?php echo $x + 1;?>"><?php echo $title[$x];?></button>
                    </div>
                    <div id="collapse-<?php echo $x + 1;?>" class="accordion-collapse collapse <?php echo $show_class;?>" aria-labelledby="collapse-item-<?php echo $x + 1;?>" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p class="faq-text">An AI Software as a Service startup combines the scalability of cloud-based platforms with the power of artificial intelligence to deliver innovative, on-demand solutions. These startups cater to a wide range of industries by offering AI-driven tools and applications that solve specific business challenges, enhance efficiency,.</p>
                        </div>
                    </div>
                </div>
            <?php }
        ?>
    </div>
</div>