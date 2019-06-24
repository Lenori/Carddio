<?php

global $wpdb;

if (isset($_POST['action'])) {

    if ($_POST['action'] == 'editar-imagens') {

        if (isset($_FILES['home-cover'])) {

            if (!function_exists('wp_handle_upload') ) {
                require_once(ABSPATH . 'wp-admin/includes/file.php');
            }

            $uploadedfile = $_FILES['home-cover'];

            $upload_overrides = array( 'test_form' => false );

            $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {

                $wpdb->update(

                    'wp_images',

                    array(

                        'url' => $movefile['url']

                    ), array(

                        'id' => $_POST['home-cover-id']

                    )

                );

            if($wpdb->last_error !== '')
                $wpdb->print_error();

            }

        }

        if (isset($_FILES['home-link-01'])) {

            if (!function_exists('wp_handle_upload') ) {
                require_once(ABSPATH . 'wp-admin/includes/file.php');
            }

            $uploadedfile = $_FILES['home-link-01'];

            $upload_overrides = array( 'test_form' => false );

            $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {

                $wpdb->update(

                    'wp_images',

                    array(

                        'url' => $movefile['url']

                    ), array(

                        'id' => $_POST['home-link-01-id']

                    )

                );

                if($wpdb->last_error !== '')
                    $wpdb->print_error();

            }

        }

        if (isset($_FILES['home-link-02'])) {

            if (!function_exists('wp_handle_upload') ) {
                require_once(ABSPATH . 'wp-admin/includes/file.php');
            }

            $uploadedfile = $_FILES['home-link-02'];

            $upload_overrides = array( 'test_form' => false );

            $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {

                $wpdb->update(

                    'wp_images',

                    array(

                        'url' => $movefile['url']

                    ), array(

                        'id' => $_POST['home-link-02-id']

                    )

                );

                if($wpdb->last_error !== '')
                    $wpdb->print_error();

            }

        }

        if (isset($_FILES['home-link-03'])) {

            if (!function_exists('wp_handle_upload') ) {
                require_once(ABSPATH . 'wp-admin/includes/file.php');
            }

            $uploadedfile = $_FILES['home-link-03'];

            $upload_overrides = array( 'test_form' => false );

            $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {

                $wpdb->update(

                    'wp_images',

                    array(

                        'url' => $movefile['url']

                    ), array(

                        'id' => $_POST['home-link-03-id']

                    )

                );

                if($wpdb->last_error !== '')
                    $wpdb->print_error();

            }

        }

        if (isset($_FILES['home-link-04'])) {

            if (!function_exists('wp_handle_upload') ) {
                require_once(ABSPATH . 'wp-admin/includes/file.php');
            }

            $uploadedfile = $_FILES['home-link-04'];

            $upload_overrides = array( 'test_form' => false );

            $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {

                $wpdb->update(

                    'wp_images',

                    array(

                        'url' => $movefile['url']

                    ), array(

                        'id' => $_POST['home-link-04-id']

                    )

                );

                if($wpdb->last_error !== '')
                    $wpdb->print_error();

            }

        }

        if (isset($_FILES['pacientes-video-01'])) {

            if (!function_exists('wp_handle_upload') ) {
                require_once(ABSPATH . 'wp-admin/includes/file.php');
            }

            $uploadedfile = $_FILES['pacientes-video-01'];

            $upload_overrides = array( 'test_form' => false );

            $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {

                $wpdb->update(

                    'wp_images',

                    array(

                        'url' => $movefile['url']

                    ), array(

                        'id' => $_POST['pacientes-video-01-id']

                    )

                );

                if($wpdb->last_error !== '')
                    $wpdb->print_error();

            }

        }

        echo "<div id=\"setting-error-settings_updated\" class=\"updated settings-error notice is-dismissible\">
    
                  <p><strong>Imagem editada.</strong></p>
                  
                      <button type=\"button\" class=\"notice-dismiss\">
                        <span class=\"screen-reader-text\">Dispensar este aviso.</span>
                      </button>
                      
                  </div>";

    }

}

$imagens = $wpdb->get_results('SELECT * FROM wp_images');

?>

<div class="wrap">

    <h2>Editar imagens</h2>

    <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="action" value="editar-imagens">

        <?php foreach ($imagens as $key => $data) : ?>

            <h2><?php echo $data->title ?></h2>

            <?php if ($data->id == 6) : ?>

                <video width="300" height="auto" controls>

                    <source src="<?php echo $data->url ?>">

                </video>

            <?php else : ?>

                <img style="max-width: 300px;" src="<?php echo $data->url ?>" alt="carddio-<?php echo $data->nome ?>" />

            <?php endif; ?>

            <table class="form-table">

                <tr style="border-bottom: 3px solid #b9b9b9;">

                    <th scope="row"><label for="<?php echo $data->nome ?>"><?php echo $data->title ?></label></th>
                    <td><input name="<?php echo $data->nome ?>" type="file" id="<?php echo $data->nome ?>" class="regular-text" />

                    <input type="hidden" name="<?php echo $data->nome ?>-id" value="<?php echo $data->id ?>">
                </tr>

            </table>

        <?php endforeach; ?>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Salvar imagens">
        </p>

    </form>

</div>