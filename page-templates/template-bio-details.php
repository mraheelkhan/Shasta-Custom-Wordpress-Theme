<?php
/**
 * Template Name: Template Bio Details
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
        <img class="image" src="<?= site_url() . $image_dir ?>bio-details-image.png"/>
        <div class="bio-detail-section">
            <div class="container">
            <div class="bio-back-button float-right">
                            <a href="<?= site_url() . '/shasta'; ?>" class="btn btn-primary btn-bio-back">Back</a>
                        </div>
                <div class="row">
                
                    <div class="col-md-7">
                        <div class="bio-name">
                            <h2>Jason <br/> Pressman</h2>
                            <div class="divider-person"></div>
                        </div>
                        <div class="bio-designation">
                            <p>Managing Director</p>
                        </div>

                        <div class="d-none d-lg-block" style="height:50px" ></div>

                        <div class="bio-social-media">

                            <ul style="margin:0; padding:0;">
                                <li class="social-media-item-linked-in">
                                    <a href="#">
                                        <i class="fa fa-linkedin fa-lg"></i>
                                    </a>
                                </li>
                                <li class="social-media-item-twitter">
                                    <a href="#">
                                        <i class="fa fa-twitter fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="bio-description d-none-visible d-md-block">
                            <p>
                            A company builder who played an integral role in the development of one of today’s largest online businesses, Walmart.com, Jason acts as a thought partner, advocate, and counselor to entrepreneurs looking to take their companies from initial proof of product-market fit to industry category leadership. </p>
                            <p>Jason led the firm’s investments in and currently serves on the Boards of: Zuora (NYSE: ZUO), Nextdoor, LeanPlum, Smule, and ValiMail. Jason also led the firm’s investments in companies such as Adometry (acquired by Google), Demdex (acquired by Adobe), Glint (acquired by LinkedIn), Steelbrick (acquired by Salesforce), and StrongLoop (acquired by IBM), among others.</p>
                            <p>Jason holds an M.B.A. from Stanford Graduate School of Business and a B.S. in Finance from University of Maryland. He is an avid scuba diver and a passionate supporter of shark conservation
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bio-description d-block d-sm-none">
            <p>
            A company builder who played an integral role in the development of one of today’s largest online businesses, Walmart.com, Jason acts as a thought partner, advocate, and counselor to entrepreneurs looking to take their companies from initial proof of product-market fit to industry category leadership. </p>
            <p>Jason led the firm’s investments in and currently serves on the Boards of: Zuora (NYSE: ZUO), Nextdoor, LeanPlum, Smule, and ValiMail. Jason also led the firm’s investments in companies such as Adometry (acquired by Google), Demdex (acquired by Adobe), Glint (acquired by LinkedIn), Steelbrick (acquired by Salesforce), and StrongLoop (acquired by IBM), among others.</p>
            <p>Jason holds an M.B.A. from Stanford Graduate School of Business and a B.S. in Finance from University of Maryland. He is an avid scuba diver and a passionate supporter of shark conservation
            </p>
        </div>
    </div>
</div>

<?php
get_footer();
