<?php
/*
 * Template Name: Convênios
 */

get_header();

$convenios = $wpdb->get_results('SELECT * FROM wp_convenios');

$counter = 0;
$innerCounter = 0;
$number = count($convenios);
$skip = 5;
$sections = ceil($number/$skip);

?>

</div>
</div>

<script>var page = "convenios";</script>

<div class="page-content">

    <div class="container">
        <div class="row">

            <h3>Convênios</h3>

            <div class="convenios-image">

                <img src="<?php echo get_bloginfo( 'template_directory' ) ?>/img/convenio-img-01.jpg" alt="carddio-sobre" />

            </div>

            <div class="convenios-text">

                    <?php for ($x = 1; $x <= $sections; $x++) : ?>

                        <ul>

                            <?php for ($y = 1; $y <= $skip; $y++) : ?>

                                <?php

                                echo '<li>'. $convenios[$counter]->nome .'</li>';

                                $counter++;  ?>

                            <?php endfor; ?>

                        </ul>

                    <?php endfor; ?>

            </div>

        </div>
    </div>

</div>

<div class="content">
    <div class="row">

        <?php

        get_footer();

        ?>
