<?php 
/**
 * Template Name: Ogólna
 */
get_header(); ?>
    <section class="basic-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-xl-8">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('page_title'); ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-8 offer-page">
                            <?php if ( have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="page-content">
                                    <?php the_content(); ?>
                                </div>    
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <a href="<?php bloginfo('url'); ?>" class="hero-phone btn btn-primary badge badge-pill py-3 px-4 d-flex align-items-center text-uppercase">wróć</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of section -->
<?php 

get_footer();

?>