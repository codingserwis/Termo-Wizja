<?php 
/**
 * Template for 404 page
 */
get_header();
?>
<section class="bcg-404">
    <div class="container">
        <dir class="row">
            <div class="col-xl-12 d-flex justify-content-center flex-column">
            <h1 class="">Upsss</h1>
            <h3 class="">Coś poszło nie tak, wróc na</h3>
                <div class="row">
                    <div class="col-auto">
                        <a href="<?php bloginfo('url'); ?>" class="hero-phone btn btn-primary badge badge-pill py-3 px-4 d-flex align-items-center text-uppercase">stronę główną</a>
                    </div>
                </div>
            </div>
        </dir>
    </div>
</section>

<?php get_footer(); ?>