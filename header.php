<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AboutGames</title>
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <?php
    
    wp_head();
    ?>
</head>

<body>
    <header class="header" id="header">
        <div class="logo"><a href="main.html">AboutGames</a></div>
        <nav>
            <a href="main.html">Home</a>

            <a href="<?php echo get_permalink( get_page_by_title( 'page1' )->ID ); ?>">About</a>
            <a href="<?php echo get_permalink( get_page_by_title( 'page1' )->ID ); ?>">Contact</a>
        </nav>

    </header>
