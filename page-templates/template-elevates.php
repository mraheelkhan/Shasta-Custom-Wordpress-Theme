<?php

/**
 * Template Name: Template Elevates
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<?php
// for the use of static content if-incase
$theme_link = "/wp-content/themes/understrap/";
$image_dir = "/wp-content/themes/understrap/img/";
?>
<div class="homepage">

    <div class="elevates-hero-banner">
        <div class="image">
            <div class="hero-headline">
                <h2><?php the_field('head_line1'); ?><br /><?php the_field('head_line2'); ?></h2>
                <div class="shasta-hero-divider-xs"></div>
            </div>
            <div class="image-pattern">
                <img src="<?= site_url() . $image_dir ?>/shasta-elevates.png" />
            </div>
        </div>
    </div>

    <div class="elevates-below-banner-section">
        <div class="container">
            <div class="elevates-below-banner-text">
                <p><?php the_field('description');?></p>
            </div>

        </div>
    </div>

    <div class="revenue">
        <div class="revenue-light-lines">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-4  mt-5">
                        <h2 class="revenue-headline"> <?php the_field('section1_healdine');?> </h2>
                        <p class="revenue-subhead">
                            <?php the_field('section1_sub_head');?>
                        </p>
                        <p class="revenue-description"> <?php the_field('section1_description');?></p>
                    </div>
                    <div class="col-md-6 offset-md-2 mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="active-head-revenue-labs">
                                    <h2> <?php the_field('section1_question_title');?> </h2>
                                    <div class="divider-revenue-head"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="revenue-icon" src="<?= site_url() . $image_dir; ?>/lines-icon-revenue.png" />
                            </div>
                        </div>

                        <section class="accordion-section clearfix mt-3 mb-3" aria-label="Question Accordions">
                            <div class="">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php $section1_quick_answers  = get_field("section1_quick_answers"); ?>
                                <?php $index = 0; ?>
                                    <?php foreach($section1_quick_answers as $quick):?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $index?>" aria-expanded="true" aria-controls="collapse<?php echo $index?>">
                                                    <?php echo $quick['headline'];?>
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse<?php echo $index;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p><?php echo $quick['description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $index++; endforeach;?>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="people-labs mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-5">
                        <h2 class="revenue-headline"> <?php the_field('section2_healdine');?> </h2>
                        <p class="revenue-subhead">
                            <?php the_field('section2_sub_head');?>
                       
                        </p>
                        <p class="revenue-description"> <?php the_field('section2_description');?></p>
    
                        <div class="row ">
                                <div class="col-md-6">
                                    <div class="active-head-revenue-labs">
                                        <h2> <?php the_field('section2_question_title');?> </h2>
                                        <div class="divider-revenue-head"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img class="revenue-icon" src="<?= site_url() . $image_dir; ?>/people-labs-icon.png" />
                                </div>
                            </div>
    
                            <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                                <div class="">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <?php $section2_quick_answers  = get_field("section2_quick_answers"); ?>
                                     <?php $index = 100; ?>
                                    <?php foreach($section2_quick_answers as $quick):?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                                <h3 class="panel-title">
                                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $index?>" aria-expanded="true" aria-controls="collapse<?php echo $index?>">
                                                    <?php echo $quick['headline'];?>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapse<?php echo $index?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                                <div class="panel-body mb-1">
                                                <p><?php echo $quick['description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $index++; endforeach;?>
    
                                    
                                    </div>
    
                                </div>
                            </section>
                    </div>
                    <div class="col-md-6 offset-md-2 p-0 woman-person">
                    </div>
                </div>
            </div>
        </div>
        <div class="infrastructure-light-lines">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-4  mt-5">
                        <h2 class="revenue-headline"> <?php the_field('section3_healdine');?> </h2>
                        <p class="revenue-subhead">
                        <?php the_field('section3_sub_head');?> 
                        </p>
                        <p class="revenue-description"> <?php the_field('section3_description');?></p>
                    </div>
                    <div class="col-md-6 offset-md-2 mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="active-head-revenue-labs">
                                    <h2> <?php the_field('section3_question_title');?> </h2>
                                    <div class="divider-revenue-head"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="revenue-icon" src="<?= site_url() . $image_dir; ?>/labs-it-icon.png" />
                            </div>
                        </div>

                        <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                            <div class="">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php $section3_quick_answers  = get_field("section3_quick_answers"); ?>
                                     <?php $index = 200; ?>
                                    <?php foreach($section3_quick_answers as $quick):?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $index?>" aria-expanded="true" aria-controls="collapse<?php echo $index?>">
                                                <?php echo $quick['headline'];?>
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse<?php echo $index?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p><?php echo $quick['description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $index++; endforeach;?>
                           
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="leadership-light-lines">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-4  mt-5">
                        <h2 class="revenue-headline"> <?php the_field('section4_healdine');?>  </h2>
                        <p class="revenue-subhead">
                        <?php the_field('section4_sub_head');?> 
                         
                        </p>
                        <p class="revenue-description"> <?php the_field('section4_description');?> </p>
                    </div>
                    <div class="col-md-6 offset-md-2  mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="active-head-revenue-labs">
                                    <h2> <?php the_field('section4_question_title');?> </h2>
                                    <div class="divider-revenue-head"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="revenue-icon" src="<?= site_url() . $image_dir; ?>/leadership-icon.png" />
                            </div>
                        </div>

                         <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                            <div class="">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php $section4_quick_answers  = get_field("section4_quick_answers"); ?>
                                     <?php $index = 400; ?>
                                    <?php foreach($section4_quick_answers as $quick):?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $index?>" aria-expanded="true" aria-controls="collapse<?php echo $index?>">
                                                <?php echo $quick['headline'];?>
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse<?php echo $index?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p><?php echo $quick['description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $index++; endforeach;?>
                           
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-md-12 pt-5">
                    <div class="arrow text-center">
                        <i class="fa fa-chevron-down fa-lg"></i>
                    </div>
                </div>
            </div> -->
        </div>
        </div>
        
    </div>

</div>

<?php
get_footer();
