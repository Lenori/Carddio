<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carddio</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/mobile-style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">

            <div class="header-logo">

                <img src="<?php echo get_bloginfo( 'template_directory' ) ?>/img/carddio-logo.jpg" alt="carddio-logo" />

            </div>

            <div class="header-menu">

                <ul>

                    <a href="#"><li>Início</li></a>
                    <a href="#"><li>A Cárddio</li></a>
                    <a href="#"><li>Serviços</li></a>
                    <a href="#"><li>Contato</li></a>

                </ul>

            </div>

            <div class="header-phone">

                <i class="fas fa-phone"></i>
                <p>(61) 3351-8393</p>

            </div>

            <div class="header-menu-toggle">

                <i class="fas fa-bars"></i>

            </div>