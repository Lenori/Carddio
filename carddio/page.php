<?php

get_header();

?>

<div class="main-content">

    <div class="post-img">

        <img src="<?php echo the_post_thumbnail_url(); ?>">

    </div>

    <div class="page-info">

        <div class="page-placeholder"></div>

        <div class="page-title">

            <h1><?php echo get_the_title(); ?></h1>

        </div>

    </div>

    <div class="single-post">

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

<?php

include('lapac-sidebar.php');

?>

<?php

get_footer();

?>
