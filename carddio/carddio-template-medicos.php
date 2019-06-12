<?php
/*
 * Template Name: Médicos
 */

get_header();

$equipe = $wpdb->get_results('SELECT * FROM wp_equipe');

?>
</div>
</div>

<script>var page = "medicos";</script>

<div class="page-content">

    <div class="container">
        <div class="row">

            <h3>Médicos</h3>

            <div class="carddio-equipe-items">

                <?php foreach ($equipe as $key => $data) : ?>

                    <div class="equipe-item" id="equipe-item-<?php echo $data->id ?>">

                        <img src="<?php echo $data->img ?>" alt="carddio-equipe" />

                        <h3 class="page-medicos"><?php echo $data->nome ?></h3>
                        <p><?php echo $data->especialidade ?></p>
                        <span><?php echo $data->crm ?></span>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </div>

</div>

<div class="content">
    <div class="row">

        <?php

        get_footer();

        ?>
