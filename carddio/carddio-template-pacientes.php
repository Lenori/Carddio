<?php
/*
 * Template Name: Paciente
 */

get_header();

?>
</div>
</div>

<script>var page = "page";</script>

<div class="page-content">

    <div class="container">
        <div class="row">

            <h3><?php echo get_the_title() ?></h3>

            <div class="carddio-paciente-content">

                <iframe

                    src="https://www.youtube.com/embed/X9ZZ6tcxArI?showinfo=0";
                    frameborder="0";
                    showinfo="0";
                    allow="accelerometer;
                    autoplay;
                    encrypted-media;
                    gyroscope;
                    picture-in-picture"
                    allowfullscreen>

                </iframe>

                <?php

                if (have_posts()) {

                    while (have_posts ()) {

                        the_post();
                        the_content();

                    }

                }

                ?>

            </div>

            <div class="carddio-paciente-menu">

                <h5>Acesso rápido</h5>

                <ul>

                    <a href="<?php echo get_site_url() ;?>/convenios"><li>Convênios<span class="fas fa-long-arrow-alt-right"></span></li></a>
                    <a href="<?php echo get_site_url() ;?>/contato"><li>Consultas<span class="fas fa-long-arrow-alt-right"></span></li></a>
                    <a href="<?php echo get_site_url() ;?>/exames"><li>Exames<span class="fas fa-long-arrow-alt-right"></span></li></a>
                    <a href="<?php echo get_site_url() ;?>/medicos"><li>Médicos<span class="fas fa-long-arrow-alt-right"></span></li></a>
                    <a href="<?php echo get_site_url() ;?>/contato"><li>Contatos<span class="fas fa-long-arrow-alt-right"></span></li></a>

                </ul>

            </div>

        </div>
    </div>

</div>

<div class="content">
    <div class="row">

        <?php

        get_footer();

        ?>
