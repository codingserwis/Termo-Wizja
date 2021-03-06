<?php 
/**
 * Template name: Home page
 * 
 */
    get_header();

?>
<main>
    <section class="main-section-bcg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-7 py-5">
                    <div class="row">
                        <div class="col-12">
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
                    <div class="row mt-2">
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
                            <a href="tel:<?php echo str_replace(' ', '', get_field('fast_contact_phone')); ?>" class="hero-phone btn btn-primary badge badge-pill py-3 px-4 d-flex align-items-center" id="tel-link">
                                <i class="fa fa-phone fa-rotate-90 mr-2"></i><?php the_field('fast_contact_phone'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end of main section -->
    <section class="section-border termovision-bcg">
        <div class="container">
            <div class="row rwd-margin justify-content-sm-end">
                <div class="col-12 col-sm-10 col-md-8 col-xl-7">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="section-main-title font-weight-light">
                                <?php the_field('termovision_title'); ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="my-4 section-content">
                                <?php the_field('termovision_content'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('termovision_link'); ?>
                            </h2>
                        </div>
                        <div class="col-xl-12 d-flex justify-content-center justify-content-sm-end">
                            <a href="<?php echo bloginfo('url') . '/termowizja'; ?>" class="btn btn-outline-primary badge-pill px-4 text-orange mt-3">
                                <span>Sprawdź</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!-- end of termovision section -->
    <section class="electrict-bcg section-border">
        <div class="container">
            <div class="row rwd-margin">
                <div class="col-12 col-sm-10 col-md-8 col-xl-7">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="section-main-title font-weight-light">
                                <?php the_field('electric_title'); ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="my-4 section-content">
                                <?php the_field('electric_content'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('electric_link'); ?>
                            </h2>
                        </div>
                        <div class="col-12 d-flex justify-content-center justify-content-sm-end">
                            <a href="<?php echo bloginfo('url') . '/pomiary-elektryczne/'; ?>" class="btn btn-outline-primary badge-pill px-4 text-orange mt-3">
                                <span>Sprawdź</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!-- end of electrical section -->
    <section class="light-bcg section-border">
        <div class="container">
            <div class="row rwd-margin justify-content-sm-end">
                <div class="col-12 col-sm-10 col-md-8 col-xl-7">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="section-main-title font-weight-light">
                                <?php the_field('light_title'); ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="my-4 section-content">
                                <?php the_field('light_content'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('light_link'); ?>
                            </h2>
                        </div>
                        <div class="col-12 d-flex justify-content-center justify-content-sm-end">
                            <a href="<?php echo bloginfo('url') . '/pomiary-oswietlenia/'; ?>" class="btn btn-outline-primary badge-pill px-4 text-orange mt-3">
                                <span>Sprawdź</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!-- end of light mesurment section -->
    <section class="alarm-systems section-border">
        <div class="container">
            <div class="row rwd-margin">
                <div class="col-12 col-sm-10 col-md-8 col-xl-7">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="section-main-title font-weight-light">
                                <?php the_field('security_title'); ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="my-4 section-content">
                                <?php the_field('security_content'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('security_link'); ?>
                            </h2>
                        </div>
                        <div class="col-12 d-flex justify-content-center justify-content-sm-end">
                            <a href="<?php echo bloginfo('url') . '/systemy-alarmowe/'; ?>" class="btn btn-outline-primary badge-pill px-4 text-orange mt-3">
                                <span>Sprawdź</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end of alarms section -->
    <section class="rental-bcg section-border">
        <div class="container">
            <div class="row rwd-margin justify-content-sm-end">
                <div class="col-12 col-sm-10 col-md-8 col-xl-7">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="section-main-title font-weight-light">
                                <?php the_field('rental_title'); ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="my-4 section-content">
                                <?php the_field('rental_content'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('rental_link'); ?>
                            </h2>
                        </div>
                        <div class="col-12 d-flex justify-content-center justify-content-sm-end">
                            <a href="<?php echo bloginfo('url') . '/wypozyczalnia/'; ?>" class="btn btn-outline-primary badge-pill px-4 text-orange mt-3">
                                <span>Sprawdź</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!-- /rental section -->
</main>

<?php 
    get_footer();
?>