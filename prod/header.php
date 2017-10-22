<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <?php echo '<header class="' . (is_page_template( 'prod/home.php' ) ? 'header' : 'header white') . '">'; ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                        <?php 
                            wp_nav_menu( array(
                                'menu' => 'header_menu',
                                'theme_location' => 'header_menu',
                                'menu_id' => 'main-menu',
                                'container' => 'nav',
                                'container_class' => 'main-navbar',
                                'menu_class' => 'menu'
                            ));
                        ?>
                </div>
            </div>
        </div>
    </header><!-- end of header -->