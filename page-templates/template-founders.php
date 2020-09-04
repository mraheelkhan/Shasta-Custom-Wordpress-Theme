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
                <h2>elevating ideas<br /> to enterprises</h2>
                <div class="shasta-hero-divider-xs"></div>
            </div>
        </div>
    </div>

    <div class="founder-below-banner-section">
        <div class="container">
            <div class="founder-below-banner-text">
                <p>After years of working with and learning from the most successful companies, we <br />know how to find founders who have turned good ideas into great businesses. <br />These are the companies we're working with right now.</p>
            </div>

        </div>
    </div>

    <div class="middle-navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Saas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Infrastructure</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cybersecurity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Data Intelligence</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Low Code</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Computer Vision</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">More</a>
                        </li>
                    </ul>
                   
                </div>
            </nav>
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
