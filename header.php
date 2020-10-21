<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="bg-white">
        <?php if(has_nav_menu( 'topbar' )) :
        wp_nav_menu( array( 'theme_location' => 'topbar', 'container' => 'nav', 'container_class' => 'navbar', 'menu_class' => 'navbar') );
        endif; ?>
        <div class="container mt-3">
            <div class="row">
                <div class="brand">
                    <h1><?php bloginfo(); ?>.</h1>
                </div>
                <div class="menu"></div>
            </div>
        </div>
    </header>
    <div class="clearfix"></div>