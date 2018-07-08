<?php

// Custom Fields
$prelaunch_price   = get_post_meta(6, 'prelaunch_price', true);
$launch_price      = get_post_meta(6, 'launch_price', true);
$final_price       = get_post_meta(6, 'final_price', true);
$course_url        = get_post_meta(6, 'course_url', true);
$button_text       = get_post_meta(6, 'button_text', true);

?>
<!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5">
        <article>
            <div class="container clearfix">
                <div class="row">

                    <div class="col-sm-5">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
                    </div><!-- col -->

                    <div class="col-sm-7 hero-text">
                        <h1><?php bloginfo('name'); ?></h1>
                        <p class="lead"><?php bloginfo('description'); ?></p>

                        <div id="price-timeline">
                            <div class="price active">
                                <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                                <span><?= $prelaunch_price ?></span>
                            </div><!-- end price -->
                            <div class="price">
                                <h4>Launch Price <small>Coming soon!</small></h4>
                                <span><?= $launch_price ?></span>
                            </div><!-- end price -->
                            <div class="price">
                                <h4>Final Price <small>Coming soon!</small></h4>
                                <span><?= $final_price ?></span>
                            </div><!-- end price -->
                        </div><!-- price-timeline -->

                        <p><a class="btn btn-lg btn-danger" href="<?= $course_url ?>" role="button"><?= $button_text ?></a></p>
                    </div><!-- col -->

                </div><!-- row -->
            </div><!-- container -->
        </article>
    </section>