<?php 
/**
 * Template name: Home page
 */
    get_header();

    $test = get_field('termovision_title');
?>
<main>
    <section>

    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">

                </div>
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
    <section>
        <div class="container">
            <div class="row">
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
                <div class="col-xl-5">
    
                </div>
            </div>
        </div>
    </section> <!-- end of electrical section -->
    <section>

    </section> <!-- end of light mesurment section-->
    <section>

    </section> <!-- end of alarms section -->
</main>

<?php 
    get_footer();
?>