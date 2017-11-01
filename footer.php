        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-7 col-xl-6">
                        <address>
                            <h1 class="font-weight-light">
                                Pomiary elektryczne i termowizyjne
                            </h1>
                            <h4 class="font-weight-light">
                                Artur Maliszewski
                            </h4>
                            <?php 
                                $args = array( 'title' => 'Kontakt - stopka strony' );

                                $loop = new WP_Query($args);
                                while($loop -> have_posts()) : $loop -> the_post();
                                    get_template_part('template-parts/page', 'kontakt_part');
                                endwhile;
                                wp_reset_postdata();
                            ?> 
                        </address>
                    </div>
                    <div class="d-none d-sm-flex col-sm-3 col-md-3 justify-content-end align-items-start ml-auto">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/home.svg" alt="">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a href="http://www.codingserwis.pl"><small class="text-muted">www.CodingSerwis.pl</small></a>
                    </div>
                </div>
            </div>
            <?php wp_footer(); ?>
        </footer> <!-- end of footer -->
    </body> <!-- end of body -->
</html>