<?php 
/**
 * Template name: Home page
 */
    get_header();

?>
<main>
    <section class="main-section-bcg">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 py-5">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="hero-heading-fline text-uppercase text-white m-0">
                                profesjonalne
                            </h1>
                            <h1 class="hero-heading-sline text-uppercase text-orange m-0">
                                badania
                            </h1>
                            <h1 class="hero-heading-tline text-uppercase text-orange font-weight-bold">
                                <strong>termowizyjne</strong>
                            </h1>
                        </div>
                    </div>
                    <div class="row mt-4 ml-3">
                        <div class="col-auto">
                            <p class="hero-contact text-uppercase m-0">
                                <strong>zadzwoń</strong>  
                            </p>
                            <p class="hero-contact text-uppercase m-0 text-light">
                                zapytaj o wycenę
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto mt-3">
                            <a href="tel:<?php echo str_replace(' ', '', get_field('fast_contact_phone')); ?>" class="hero-phone btn btn-primary badge badge-pill py-3 px-4 d-flex align-items-center">
                                <i class="fa fa-phone fa-rotate-90 mr-2"></i><?php the_field('fast_contact_phone'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-border termovision-bcg">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="section-main-title font-weight-light">
                                <?php the_field('termovision_title'); ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="my-4 section-content">
                                <?php the_field('termovision_content'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('termovision_link'); ?>
                            </h2>
                        </div>
                        <div class="col-xl-12 d-flex justify-content-end">
                            <a href="<?php echo bloginfo('url') . '/termowizja'; ?>" class="btn btn-outline-primary badge-pill px-4 text-orange mt-3">
                                <span>Sprawdź</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end of termovision section -->
    <section class="electrict-bcg section-border">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="section-main-title font-weight-light">
                                <?php the_field('electric_title'); ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="my-4 section-content">
                                <?php the_field('electric_content'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('electric_link'); ?>
                            </h2>
                        </div>
                        <div class="col-xl-12 d-flex justify-content-end">
                            <a href="<?php echo bloginfo('url') . '/pomiary-elektryczne/'; ?>" class="btn btn-outline-primary badge-pill px-4 text-orange mt-3">
                                <span>Sprawdź</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end of electrical section -->
    <section class="light-bcg section-border">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="section-main-title font-weight-light">
                                <?php the_field('light_title'); ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="my-4 section-content">
                                <?php the_field('light_content'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('light_link'); ?>
                            </h2>
                        </div>
                        <div class="col-xl-12 d-flex justify-content-end">
                            <a href="<?php echo bloginfo('url') . '/pomiary-oswietlenia/'; ?>" class="btn btn-outline-primary badge-pill px-4 text-orange mt-3">
                                <span>Sprawdź</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end of light mesurment section-->
    <section class="alarm-systems section-border">
        <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="row">
                            <div class="col-xl-12">
                                <h1 class="section-main-title font-weight-light">
                                    <?php the_field('security_title'); ?>
                                </h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="my-4 section-content">
                                    <?php the_field('security_content'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <h2 class="section-link font-weight-light">
                                    <?php the_field('security_link'); ?>
                                </h2>
                            </div>
                            <div class="col-xl-12 d-flex justify-content-end">
                                <a href="<?php echo bloginfo('url') . '/systemy-alarmowe/'; ?>" class="btn btn-outline-primary badge-pill px-4 text-orange mt-3">
                                    <span>Sprawdź</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> <!-- end of alarms section -->
</main>

<?php 
    get_footer();
?>