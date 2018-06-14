<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo get_bloginfo("name"); ?>WebForce Phone</title>
        <meta name="description" content="The revolutionary phone">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Police Lato -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        
        <!-- Chargement Normalize -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/normalize.min.css">
        <!-- Chargement FontAwesome pour les icones -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/font-awesome.css" />
        <!-- Chargement de notre feuille de style -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/main.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- En tête de ma page -->
        <header>
            <nav>
                <a href="index.html" id="homeLink">
                    <span class="logo"></span>
                </a>
                <?php
                    wp_nav_menu(array(
                        "theme_location" => "menu-header"
                    ));
                ?>
                
                <!-- 
                les ul li ici peuvent être supprimer, l'appel php ci-dessous créer automatique ul et li pour afficher le menu avce les titres créés sur wp    
                <ul id="menu">
                   <li>
                        <a href="index.html">WebForce Phone</a>
                    </li>
                    <li>
                        <a href="index.html">Store</a>
                    </li>
                    <li>
                        <a href="index.html">Support</a>
                    </li>
                    <li>
                        <a href="index.html">Community</a>
                    </li> 
                 </ul> -->
                <ul>
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </li>
                    <li>
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </li>
                </ul>
                <!-- On "casse" la flotaison introduit en css -->
                <div class="clearfix"></div>
            </nav>
        </header>