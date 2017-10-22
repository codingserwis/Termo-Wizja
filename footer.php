        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
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
                    <div class="col-xl-6 d-flex justify-content-end align-items-start">
                        <img class="img" src="http://localhost:3000/WP-4_8_1/wp-content/themes/TermoWizja/assets/img/home.svg" alt="">
                    </div>
                </div>
            </div>
            <?php wp_footer(); ?>
        </footer> <!-- end of footer -->
    </body> <!-- end of body -->
</html>