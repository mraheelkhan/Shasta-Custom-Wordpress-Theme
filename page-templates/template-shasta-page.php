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
                <h2>the expert in <br/> early-stage <br/>enterprise SAAS</h2>
                <div class="shasta-hero-divider-xs"></div>
            </div>
        </div>
    </div>
    
    <div class="shasta-below-banner-section">
        <div class="container">
            <div class="shasta-below-banner-text">
                <p>Challenging times are when innovative ideas, founders, and businesses create <br/>unprecedented value. That's why we elevate the most promising founders of <br/> early-stage enterprise SaaS companies with the capital and expertise to become the <br/>biggest successes in the sector that provides the biggest returns.</p>
            </div>
    
        </div>
    </div>
    <div class="shasta-persons-list">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                <?php $image = get_field("image") ?>
                    <div class="person-image person-image-1" style='background-image: url("<?= $image['url']?>");''>
                        <p>
                        
                        <?= the_field("first_name") ?><br>
                        <?= the_field("last_name") ?>
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="person-image person-founders" style="background: #00A7E1">
                        <p>
                        Founding <br>Leadership
                        </p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="person-image person-image-1" style="background-image: url(<?php echo site_url() . $image_dir ?>person1.png);">
                        <p>
                        Avery <br>Cannon
                        </p>
                        <div class="divider-person"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-links">
        <div class="container">
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
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
