<?php 
/**
 * Template Name: Oferta
 */

    get_header();
    
?>
    <section class="basic-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-7">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('page_title'); ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 offer-page">
                            <?php if ( have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="page-content">
                                    <?php the_content(); ?>
                                </div>    
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <?php if( get_field('service_pricelist')) : ?>
                                <a href="<?php the_field('service_pricelist'); ?>" target="_blank" class="btn btn-outline-primary badge-pill px-4 text-orange mt-3">
                                    <i class="fa fa-file-pdf-o mr-2" aria-hidden="true"></i> Pobierz cennik
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of section -->

<?php get_footer(); ?>