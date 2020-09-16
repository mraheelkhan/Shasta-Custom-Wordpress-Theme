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
                <h2>reach for the<br /> next level</h2>
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
                <p>To take your company further you’ll need to go beyond product-market fit and your<br /> first sales. That’s why we created Elevate, a series of hands-on labs where our team of <br />experts work directly with founders–improving how they drive revenue, build teams,<br /> deploy technology and implement processes</p>
            </div>

        </div>
    </div>

    <div class="revenue">
        <div class="revenue-light-lines">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-4  mt-5">
                        <h2 class="revenue-headline"> REVENUE </h2>
                        <p class="revenue-subhead">
                            You got your first customers and your first $1M, now what?
                        </p>
                        <p class="revenue-description">Learn what it takes to put in all the pieces to get to $10M and beyond in our revenue labs.</p>
                    </div>
                    <div class="col-md-6 offset-md-2 mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="active-head-revenue-labs">
                                    <h2> REVENUE LABS </h2>
                                    <div class="divider-revenue-head"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="revenue-icon" src="<?= site_url() . $image_dir; ?>/lines-icon-revenue.png" />
                            </div>
                        </div>

                        <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                            <div class="">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                    Marketing
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                    Sales
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                    Customer Success
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                                    Print & Media
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                                    Business Development
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                                    Marketing Team Support Services
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>
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
                        <h2 class="revenue-headline"> People </h2>
                        <p class="revenue-subhead">
                        What does it take to find, keep your most important asset?
                        </p>
                        <p class="revenue-description">You have a great team, they're scrappy and have gotten you this far. But what will your team need to look like next year? And how will your culture evolve? Find out what will work best for you through our people labs.</p>
    
                        <div class="row ">
                                <div class="col-md-6">
                                    <div class="active-head-revenue-labs">
                                        <h2> People Labs </h2>
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
                                        <div class="panel panel-default">
                                            <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                                <h3 class="panel-title">
                                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                        Our Design
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                                <div class="panel-body mb-1">
                                                    <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="panel panel-default">
                                            <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                                <h3 class="panel-title">
                                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                                        Culture
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                                <div class="panel-body mb-1">
                                                    <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                                <h3 class="panel-title">
                                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                                        Talent Recruitment Platform
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                                <div class="panel-body mb-1">
                                                    <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
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
                        <h2 class="revenue-headline"> INFRASTRUCTURE </h2>
                        <p class="revenue-subhead">
                        Are your technology and business stacks ready for growth?   
                        </p>
                        <p class="revenue-description">Your infrastructure is solid but what happens at 10x or 100x the customers? Get prepared and plan ahead in our infrastructure labs.</p>
                    </div>
                    <div class="col-md-6 offset-md-2 mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="active-head-revenue-labs">
                                    <h2> IT LABS </h2>
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
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                    Data Architecture   
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                    Corp Security Assessment
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
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
                        <h2 class="revenue-headline"> leadership </h2>
                        <p class="revenue-subhead">
                        Get ready to take your company to new heights?   
                        </p>
                        <p class="revenue-description">You've brought the company this far, now it's time to go further. Become more than a founder and learn what it takes to be a growth leader in our leadership labs.</p>
                    </div>
                    <div class="col-md-6 offset-md-2  mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="active-head-revenue-labs">
                                    <h2> LEADERSHIP LABS </h2>
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
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                fund raising for series B   
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                board management
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                Company Management
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading pl-0 pr-2 pt-2 pb-2 mb-1" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                Coaching 
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body mb-1">
                                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-md-12 pt-5">
                <div class="arrow text-center">
                        <i class="fa fa-chevron-down fa-lg"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
    </div>

</div>

<?php
get_footer();
