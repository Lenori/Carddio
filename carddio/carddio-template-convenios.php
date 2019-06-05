<?php
/*
 * Template Name: Convênios
 */

get_header();

$convenios = $wpdb->get_results('SELECT * FROM wp_convenios');

$ab = ['a', 'b'];
$cd = ['c', 'd'];
$ei = ['e', 'f', 'g', 'h', 'i'];
$jp = ['j', 'k', 'l', 'm', 'n', 'o', 'p'];
$qs = ['q', 'r', 's'];
$tz = ['t', 'u', 'v', 'w', 'x', 'y', 'z'];

?>

</div>
</div>

<script>var page = "convenios";</script>

<div class="page-content">

    <div class="container">
        <div class="row">

            <h3>Convênios</h3>

            <div class="convenios-image">

                <img src="<?php echo get_bloginfo( 'template_directory' ) ?>/img/carddio-sobre-01.jpg" alt="carddio-sobre" />

            </div>

            <div class="convenios-text">

                <ul>

                    <p>a-b</p>

                    <?php foreach ($convenios as $key => $data) {

                    $convenio = strtolower($data->nome);
                    $letra = substr($convenio, 0, 1);

                    echo (in_array($letra, $ab) ? '<li>'. $data->nome .'</li>' : '');

                    }

                    ?>

                </ul>

                <ul>

                    <p>c-d</p>

                    <?php foreach ($convenios as $key => $data) {

                        $convenio = strtolower($data->nome);
                        $letra = substr($convenio, 0, 1);

                        echo (in_array($letra, $cd) ? '<li>'. $data->nome .'</li>' : '');

                    }

                    ?>

                </ul>

                <ul>

                    <p>e-i</p>

                    <?php foreach ($convenios as $key => $data) {

                        $convenio = strtolower($data->nome);
                        $letra = substr($convenio, 0, 1);

                        echo (in_array($letra, $ei) ? '<li>'. $data->nome .'</li>' : '');

                    }

                    ?>

                </ul>

                <ul>

                    <p>j-p</p>

                    <?php foreach ($convenios as $key => $data) {

                        $convenio = strtolower($data->nome);
                        $letra = substr($convenio, 0, 1);

                        echo (in_array($letra, $jp) ? '<li>'. $data->nome .'</li>' : '');

                    }

                    ?>

                </ul>

                <ul>

                    <p>q-s</p>

                    <?php foreach ($convenios as $key => $data) {

                        $convenio = strtolower($data->nome);
                        $letra = substr($convenio, 0, 1);

                        echo (in_array($letra, $qs) ? '<li>'. $data->nome .'</li>' : '');

                    }

                    ?>

                </ul>

                <ul>

                    <p>t-z</p>

                    <?php foreach ($convenios as $key => $data) {

                        $convenio = strtolower($data->nome);
                        $letra = substr($convenio, 0, 1);

                        echo (in_array($letra, $tz) ? '<li>'. $data->nome .'</li>' : '');

                    }

                    ?>

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
