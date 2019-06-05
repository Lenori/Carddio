<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

global $wpdb;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo get_bloginfo('name') ?></title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/mobile-style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo get_bloginfo( 'template_directory' );?>/favicon.png" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">

            <div class="header-logo">

                <a href="<?php echo get_site_url() ;?>/"><img src="<?php echo get_bloginfo( 'template_directory' ) ?>/img/carddio-logo.jpg" alt="carddio-logo" /></a>

            </div>

            <div class="header-menu">

                <span class="header-menu-close fas fa-times-circle"></span>

                <ul>

                    <a href="<?php echo get_site_url() ;?>/"><li>Home</li></a>

                    <span class="header-menu-wrapper" data-menu="01">

                        <li>A Cárddio</li>

                            <div class="header-sub-menu" id="menu-01">

                                <a href="<?php echo get_site_url() ;?>/paciente"><p>Pacientes</p></a>
                                <a href="<?php echo get_site_url() ;?>/medicos"><p>Médicos</p></a>
                                <a href="<?php echo get_site_url() ;?>/cardiologia-geral-e-pediatrica/"><p>Cardiologia Geral e Pediátrica</p></a>
                                <a href="<?php echo get_site_url() ;?>/sobre-a-carddio"><p>História</p></a>

                            </div>

                    </span>

                    <span class="header-menu-wrapper" data-menu="02">

                        <li>Serviços</li>

                            <div class="header-sub-menu" id="menu-02">

                                <a href="<?php echo get_site_url() ;?>/exames"><p>Exames</p></a>
                                <p>Consultas</p>
                                <a href="<?php echo get_site_url() ;?>/convenios"><p>Convênios</p></a>

                            </div>

                    </span>

                    <span class="header-menu-wrapper" data-menu="03">

                        <li>Contato</li>

                            <div class="header-sub-menu" id="menu-03">

                                <a href="<?php echo get_site_url() ;?>/contato"><p>Contato</p></a>
                                <a href="<?php echo get_site_url() ;?>/contato"><p>Localização</p></a>

                            </div>

                    </span>

                </ul>

            </div>

            <div class="header-phone">

                <i class="fas fa-phone"></i>
                <p>(61) 3351-8393</p>

            </div>

            <div class="header-menu-toggle">

                <i class="fas fa-bars"></i>

            </div>