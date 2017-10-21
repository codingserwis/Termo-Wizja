<?php 
/**
 * Template name: Home page
 */
    get_header();

?>
<main>
    <section class="main-section-bcg" style="min-height: 75vh; height: 75vh;">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="text-uppercase text-white">
                                profesjonalne
                            </h1>
                            <h1 class="text-uppercase text-orange">
                                badania
                            </h1>
                            <h1 class="text-uppercase text-orange font-weight-bold">
                                <strong>termowizyjne</strong>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            zadzwoń zapytaj o wycenę
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            666 666 666
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="row">
                        <div class="col-xl-12">
                            <img class="img-fluid" src="localhost:3000/WP-4_8_1/wp-content/themes/TermoWizja/assets/img/main-termo-bcg.png" alt="">
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
                        <div class="col-xl-12">
                            <p class="my-4 section-content">
                                <?php the_field('electric_content'); ?>
                            </p>
                        </div>
                        <div class="col-xl-12">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('electric_link'); ?>
                            </h2>
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
                        <div class="col-xl-12">
                            <p class="my-4 section-content">
                                <?php the_field('light_content'); ?>
                            </p>
                        </div>
                        <div class="col-xl-12">
                            <h2 class="section-link font-weight-light">
                                <?php the_field('light_link'); ?>
                            </h2>
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
                            <div class="col-xl-12">
                                <p class="my-4 section-content">
                                    <?php the_field('security_content'); ?>
                                </p>
                            </div>
                            <div class="col-xl-12">
                                <h2 class="section-link font-weight-light">
                                    <?php the_field('security_link'); ?>
                                </h2>
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