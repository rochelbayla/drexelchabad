<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/sass/theme.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php wp_head(); ?>
    </head>
    <body>
        <nav id="desktop">
            <div class="container">

            <div id="navlogo">
                <img src="<?php echo get_template_directory_uri();?>/img/logo_blue.png">
                <h1 style="color:#08294d;"><?php echo get_bloginfo( 'name' ); ?></h1>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'nav-menu')); ?>
            </div>
        </nav>
            <nav class="clearfix" id="mobile">
                <div class="container">

                <div id="navlogo">
                <img src="<?php echo get_template_directory_uri();?>/img/logo_blue.png">
                <h1 style="color:#08294d;"><?php echo get_bloginfo( 'name' ); ?></h1>
            </div>
                    
                <button onclick="nav();" id="burger">
                    <span></span>                    
                    <span></span>
                    <span></span>
                </button>
                <?php wp_nav_menu(array('theme_location' => 'nav-menu')); ?>
                </div>

            </nav>
