<?php

/**
 * Template Name: Template Founder
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

    <div class="founder-hero-banner">
        <div class="image">
            <div class="hero-headline">
                <h2><?php the_field('headline1'); ?><br /> <?php the_field('headline2'); ?></h2>
                <div class="shasta-hero-divider-xs"></div>
            </div>
        </div>
    </div>

    <div class="founder-below-banner-section">
        <div class="container">
            <div class="founder-below-banner-text">
                <p><?php the_field('description'); ?></p>
            </div>

        </div>
    </div>
	<?php $tabs = get_field('tabs'); ?>
    <div class="middle-navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                        <?php $index = 0;
                        foreach ($tabs as $tab) : ?>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($index == 0) echo 'active'; ?>" id="pills-<?php echo $index; ?>-tab" data-toggle="pill" href="#pills-<?php echo $index; ?>" role="tab" aria-controls="pills-<?php echo $index; ?>" aria-selected="true"><?php echo $tab['tab_name']; ?></a>
                            </li>
                        <?php $index++;
                        endforeach; ?>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <?php $index = 0; foreach($tabs as $tab):?>
                        <div class="tab-pane fade <?php if ($index == 0) echo 'show active'; ?>" id="pills-<?php echo $index; ?>" role="tabpanel" aria-labelledby="pills-<?php echo $index; ?>-tab">
                            <div class="saas">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-5 ">
                                            <h2 class="saas-headline"> <?php echo $tab['tab_name']; ?> </h2>
                                            <p class="saas-description"><?php echo $tab['tab_description']; ?></p>
											
                                            <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                                                <div class="">
                                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                         <?php foreach($tab['tab_links'] as $link): ?>
														
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading pl-0 pr-3 pb-3 pt-3 mb-1" role="tab" id="heading3">
                                                                <h3 class="panel-title">
                                                                    <a class="collapsed" href="<?php echo  $link['link']['url']; ?>" aria-expanded="true" aria-controls="collapse3">
                                                                      <?php echo  $link['link']['title']; ?>
                                                                    </a>
                                                                </h3>
                                                            </div>

                                                        </div>
                                                    <?php endforeach; ?>
                                                    </div>

                                                </div>
                                            </section>
                                        </div>
                                        <div class="col-md-6  offset-md-1 glint-person" style="background-image:url(<?php echo $tab['tab_image']; ?>)">
                                          
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $index++; endforeach;?>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="saas">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <div class="active-head">
                        <h2> <?php the_field('action_link_text'); ?></h2>
                        <div class="divider-active-head"></div>
                    </div>
					<div class="row">
						<div class="col-md-6">

                   <div class="categories-list">
                        <?php $action_links = get_field('action_links'); ?>
                        <ul>
                            <?php foreach($action_links as $link): ?>
                            <li>
                                <a href="<?php echo $link['link']['url']; ?>">
                                    <?php echo $link['link']['title']; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="categories-list">
                        <?php $action_links = get_field('action_links2'); ?>
                        <ul>
                            <?php foreach($action_links as $link): ?>
                            <li>
                                <a href="<?php echo $link['link']['url']; ?>">
                                    <?php echo $link['link']['title']; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
						
					</div>
					 
					
                </div>
                <div class="col-md-4 mt-5">
                    <div class="active-head">
                        <h2> Exits</h2>
                        <div class="divider-active-head"></div>
                    </div>
					<div class="categories-list">
                        <?php $action_links = get_field('action_links3'); ?>
                        <ul>
                            <?php foreach($action_links as $link): ?>
                            <li>
                                <a href="<?php echo $link['link']['url']; ?>">
                                    <?php echo $link['link']['title']; ?>
                                </a>
                                
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
get_footer();
