<?php 
/**
 * Template Name: Kontakt
 */
    get_header();

?>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <?php if ( have_posts()) : the_post(); ?>
                        <h2 class="section-link font-weight-light text-center">
                            <?php the_content(); ?>
                        </h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>Pomiary elektryczne i termowizyjne</h2>
                            <h2>Artur Maliszewski</h2>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span><?php the_field('main_address_city'); ?></span> <span>ul. <?php the_field('main_address_street');?></span>
                        </div>
                    </div> 
                    <div class="row mt-4">
                        <div class="col-6">
                            <a href="tel:<?php echo str_replace(' ', '', get_field('main_address_phone')); ?>" class="btn btn-primary badge-pill px-3">
                            <i class="fa fa-phone fa-rotate-90 mr-3"></i><?php the_field('main_address_phone');?>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="mailto: <?php the_field('main_address_email');?>" class="btn btn-primary badge-pill px-3">
                            <i class="fa fa-envelope-open-o mr-2"></i><?php the_field('main_address_email');?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>