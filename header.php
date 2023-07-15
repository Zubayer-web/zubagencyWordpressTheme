<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title><?php bloginfo( 'name' ); ?> ~ <?php bloginfo( 'description' ); ?></title>
  
    <?php wp_head(); ?>
</head>

<body>
    <!-- top header Area Start -->
        <?php get_template_part( 'template/header/top-header' ); ?>
    <!-- top header Area ended -->

    <!-- Header Area Started -->
        <?php get_template_part( 'template/header/header' ); ?>   
    <!-- Header Area Start -->