<?php
/*
 * Template Name: Paciente
 */

get_header();

$posts = get_posts(array(

    'numberposts' => 0

));

?>
</div>
</div>

<script>var page = "page";</script>

<div class="page-content">

    <div class="container">
        <div class="row">

            <h3><?php echo get_the_title() ?></h3>

            <div class="carddio-paciente-content">

                <video
                autoplay
                controls>

                    <source src="<?php echo $imagens[5]->url ?>">

                </video>

                <?php foreach ($posts as $post) : ?>
				
						<img src="<?php echo get_the_post_thumbnail_url($data->ID); ?>">

                        <h1><?php echo get_the_title($post->ID) ?></h1>

                        <?php echo get_post_field('post_content', $post->ID) ?>

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
