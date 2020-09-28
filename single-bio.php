<?php
/**
 * Template Name: Default Template Bio Details
 * Template Post Type: bio
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<?php 
    // for the use of static content if-incase
    $theme_link = "/wp-content/themes/understrap/";
    $image_dir = "/wp-content/themes/understrap/img/";
?>
<div class="homepage">

    <div class="bio-banner">
        
        <img class="image" src="<?php the_field('banner_image', $bio->ID); ?>"/>
        
        <div class="bio-detail-section">
        <div class="container-fluid">
                    <div class="bio-back-button float-right">
                        <a href="<?= site_url() . '/shasta'; ?>" class="btn btn-primary btn-bio-back">Back</a>
                    </div>
            </div>
            <div class="container">
            
                <div class="row">
                
                    <div class="col-md-7">
                        <div class="bio-name">
                            <h2><?php the_field("first_name"); ?> <br/> <?php the_field("last_name"); ?></h2>
                            <div class="divider-person"></div>
                        </div>
                        <div class="bio-designation">
                            <p><?php the_field("designations"); ?></p>
                        </div>

                        <div class="d-none d-lg-block" style="height:50px" ></div>

                        <div class="bio-social-media">

                            <ul style="margin:0; padding:0;">
                                <li class="social-media-item-linked-in">
                                    <a href="<?php the_field("linked-in"); ?>">
                                        <i class="fa fa-linkedin fa-lg"></i>
                                    </a>
                                </li>
                                <li class="social-media-item-twitter">
                                    <a href="<?php the_field("twitter"); ?>">
                                        <i class="fa fa-twitter fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="bio-description d-none-visible d-md-block">
                            <p>
                            <?php the_field("details"); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="bio-description d-block d-sm-none">
            <p>
           <?php the_field("details"); ?>
            </p>
        </div>
    </div>
</div>

<?php
get_footer();
