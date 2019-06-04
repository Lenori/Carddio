<?php
/*
 * Template Name: Páginas Cárddio
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

            <div class="page-image">

                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>" />

            </div>

            <div class="page-text">

                <p>
                    <?php

                    if (have_posts()) {

                        while (have_posts ()) {

                            the_post();
                            the_content();

                        }

                    }

                    ?>
                </p>

            </div>

        </div>
    </div>

</div>

<div class="content">
    <div class="row">

<?php

get_footer();

?>
