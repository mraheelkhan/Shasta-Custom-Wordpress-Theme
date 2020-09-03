<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="homepage">

    <div class="home-banner">
        <div class="image">
            
        </div>
    </div>
    
    <div class="below-banner-section">
        <div class="container">
            <div class="below-banner-text">
                <h2>we helped <span class="text-light-blue">tien</span></h2>
                <h2 class="h2-class">reach new heights 
                </h2>
                <div class="divider-reach"></div>
            </div>
    
        </div>
    </div>
    <div class="on-click-footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="arrow text-center">
                        <i class="fa fa-chevron-down fa-lg"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
