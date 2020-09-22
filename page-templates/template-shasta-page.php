<?php
/**
 * Template Name: Template Shasta Page
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

    <div class="shasta-hero-banner">
        <div class="image">
            <div class="hero-headline">
                <?php the_field("shasta_headline"); ?>
                <div class="shasta-hero-divider-xs"></div>
            </div>
        </div>
    </div>
    
    <div class="shasta-below-banner-section">
        <div class="container">
            <div class="shasta-below-banner-text">
                <p> <?php the_field("shasta_description"); ?></p>
            </div>
    
        </div>
    </div>
    <?php 
        $bios = get_posts(array(
            'posts_per_page'	=> -1,
            'post_type'			=> 'bio'
        ));
    ?>
    <pre>
	<?= print_r($bios); ?>
	</pre>
    <div class="shasta-persons-list">
        <div class="container-fluid">
            <div class="row">
               <?php if ($bios): ?>
                <?php foreach( $bios as $bio ): ?>
                    <?php setup_postdata( $bio ); ?>
                        <div class="col-sm-6 col-md-6 col-lg-3 m-0 p-0">
                            <a href="<?= $bio->guid; ?>">
                            <img class="image_overlay" style="max-width: 100%; width:100%" src="<?php the_field('image', $bio->ID); ?>"/>
                            <div class="overlay">
                                <h2 class="overlay-text-content"><?php the_field("designations", $bio->ID); ?></h2>
                            </div>
                            <div class="person-info-detail">
                                <p>
                                <?php the_field("first_name", $bio->ID); ?> <br><?php the_field("last_name", $bio->ID); ?>
                                </p>
                                <div class="divider-person"></div>
                            </div>
                            
                            </a>
                        </div>
                    <?php wp_reset_postdata(); ?>
                <?php endforeach; ?>
                <?php endif ?>
                
                
                
                
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 m-0 p-0">
                    <div class="person-image person-founders" style="background: #00A7E1">
                        <p>
                        Founding <br>Leadership
                        </p>

                    </div>
                    
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 m-0 p-0">
                    <a href="<?= site_url() . '/bio-details';?>">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>tod.png);">
                        <p>
                        Tod <br>Francis
                        </p>
                        <div class="divider-person"></div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 m-0 p-0">
                    <a href="<?= site_url() . '/bio-details';?>">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Rob <br>Coneybeer
                        </p>
                        <div class="divider-person"></div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 m-0 p-0">
                    <a href="<?= site_url() . '/bio-details';?>">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>austin.png);">
                        <p>
                        Austin <br>Grose
                        </p>
                        <div class="divider-person"></div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-links">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer footer-1">
                        <h3>How To</h3>
                        <div class="divider-footer"></div>
                        <ul class="footer-links-list">
                            <li>TechCrunch: As Stocks recover, private investors aren’t buying the hype</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer footer-1">
                        <h3>How To</h3>
                        <div class="divider-footer"></div>
                        <ul class="footer-links-list">
                            <li>TechCrunch: As Stocks recover, private investors aren’t buying the hype</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer footer-1">
                        <h3>How To</h3>
                        <div class="divider-footer"></div>
                        <ul class="footer-links-list">
                            <li>TechCrunch: As Stocks recover, private investors aren’t buying the hype</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer footer-1">
                        <h3>How To</h3>
                        <div class="divider-footer"></div>
                        <ul class="footer-links-list">
                            <li>TechCrunch: As Stocks recover, private investors aren’t buying the hype</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
