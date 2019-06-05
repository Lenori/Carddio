<?php

$depoimentos = $wpdb->get_results('SELECT * FROM wp_depoimentos');

?>

        </div>
    </div>

<div class="carddio-depoimentos">

    <div class="depoimentos-wrapper">

        <?php foreach ($depoimentos as $key => $data) : ?>

            <div class="carddio-depoimento">

                <div class="depoimento-quote">

                    <i class="fas fa-quote-left"></i>

                </div>

                <div class="depoimento-text">

                    <p><?php echo $data->text ?></p>

                    <div class="depoimento-divisor"></div>

                    <span class="depoimento-nome"><?php echo $data->nome ?></span>

                    <span class="depoimento-since"><?php echo $data->referencia ?></span>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<script>

    $(document).ready(function(){

        randomDepoimentos();

    });

</script>

    <div class="container">
        <div class="row">