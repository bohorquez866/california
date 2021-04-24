<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, , user-scalable=no">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <nav class="navbar">
            <a href="#" class="logo">
                <img 
                src="<?php echo get_template_directory_uri(); ?>/templates/src/assets/img/Group.jpg" alt="logo">
            </a>
            <ul class="navbar__list">
                <li><a href="#" target="_blank">Home</a></li>
                <li><a href="#" target="_blank">Birthday</a></li>
                <li><a href="#" target="_blank">Romance</a> </li>
                <li><a href="#" target="_blank">New Baby</a> </li>
                <li><a href="#" target="_blank"> Get Well</a></li>
                <li><a href="#" target="_blank">Sympathy</a> </li>
                <li><a href="#" target="_blank">Wine</a> </li>
                <li><a href="#" target="_blank">Bouquets</a></li>
                <li><a href="#" target="_blank">Others</a></li>

                <ul class="navbar__tags">
                    <li class="icon-tag"></li>
                    <li class="icon-user"></li>
                    <li class="icon-cart"></li>
                </ul>
            </ul>
        </nav>
    </header>
    <main class="main_site ">