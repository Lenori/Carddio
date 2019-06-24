<?php
/*
 * Template Name: Exames
 */

get_header();

$exames = $wpdb->get_results('SELECT * FROM wp_exames');

?>
</div>
</div>

<script>var page = "exames";</script>

<div class="page-content page-exame">

    <div class="container">
        <div class="row">

            <h3>Exames</h3>

            <div class="page-image">

                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>" />

            </div>

            <div class="page-exames-list">

                <?php foreach ($exames as $key => $data) : ?>

                <a href="?exame-id=<?php echo $data->id ?>"><div class="carddio-exame-page-button" data-exame="<?php echo $data->id ?>">

                    <p><span class="fas fa-plus-circle"></span><?php echo $data->nome ?></p>

                </div></a>

                <?php endforeach; ?>

            </div>

            <div class="page-exames-info">

                <!--<div class="exame-page-close-button">

                    <p class="exame-close"><span class="exame-close exame-page-close fas fa-window-close"></span>Voltar aos exames</p>

                </div>-->

                <?php foreach ($exames as $key => $data) : ?>

                    <div class="exame-info" id="exame-<?php echo $data->id ?>">

                        <div class="page-image">

                            <?php if ($data->img !== 'none') : ?>

                            <img src="<?php echo $data->img ?>" alt="carddio-sobre" />

                            <?php endif; ?>

                        </div>

                        <div class="page-text">

                            <h4><?php echo $data->nome ?></h4>

                            <p><?php echo $data->text ?></p>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </div>

</div>

<script>

    var params = (new URL(document.location)).searchParams;

    if (params.get('exame-id')) {

        $('.carddio-exame-page-button').hide();
        $('.page-exames-info').show();
        $('#exame-' + params.get('exame-id') +'').show();

    }


</script>

<?php include('includes/carddio-include-depoimentos.php') ?>

        <?php

        get_footer();

        ?>
