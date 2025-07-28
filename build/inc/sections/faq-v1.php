
<!--==============================
Faq Area
==============================-->
<div class="faq-wrap1">
    <div class="accordion" id="faqAccordion">
        <?php 
            $title = array( 
                'What is an AI startup, and what services do you offer?',
                'Do you offer pre-built AI models or create everything from scratch?',
                'What is the process for developing an AI solution for my business?',
                'What is an AI startup, and what services do you offer?',
                'How do you ensure data privacy and compliance with regulations?',
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

                <div class="accordion-card" data-cue="slideInUp">
                    <div class="accordion-header" id="collapse-item-<?php echo $x + 1;?>">
                        <button class="accordion-button <?php echo $collapse_class;?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $x + 1;?>" aria-expanded="<?php echo $arealabel;?>" aria-controls="collapse-<?php echo $x + 1;?>"><?php echo $title[$x];?></button>
                    </div>
                    <div id="collapse-<?php echo $x + 1;?>" class="accordion-collapse collapse <?php echo $show_class;?>" aria-labelledby="collapse-item-<?php echo $x + 1;?>" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p class="faq-text">An AI Software as a Service startup combines the scalability of cloud-based platforms with the power of artificial intelligence to deliver innovative, on-demand solutions. These startups cater to a wide range of industries by offering AI-driven tools and applications that solve specific business challenges, enhance efficiency, and drive data-informed decisions. The AI industry is rapidly expanding, with opportunities to disrupt traditional industries and create entirely new markets. Continuous advancements in hardware and algorithms position AI startups to play a pivotal role in shaping the future.</p>
                        </div>
                    </div>
                </div>
            <?php }
        ?>
    </div>
</div>