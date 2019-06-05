<?php

$equipe = $wpdb->get_results('SELECT * FROM wp_equipe');

?>

        </div>
    </div>

<div class="carddio-equipe">

    <div class="carddio-equipe-items">

        <span class="carddio-equipe-arrow equipe-arrow-left fas fa-chevron-left"></span>

        <?php foreach ($equipe as $key => $data) : ?>

            <div class="equipe-item" data-equipe-item="<?php echo $data->id ?>">

                <img src="<?php echo $data->img ?>" alt="carddio-equipe" />

                <h3><?php echo $data->nome ?></h3>
                <p><?php echo $data->especialidade ?></p>
                <span><?php echo $data->crm ?></span>

            </div>

        <?php endforeach; ?>

        <span class="carddio-equipe-arrow equipe-arrow-right fas fa-chevron-right"></span>

    </div>

    <a href="<?php echo get_site_url() ;?>/medicos"><p class="carddio-button-blue">Veja a nossa equipe <span class="fas fa-chevron-circle-right"></span></p></a>

</div>

    <div class="container">
        <div class="row">