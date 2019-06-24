<?php

global $wpdb;

$exames = $wpdb->get_results('SELECT * FROM wp_exames');

if (isset($_GET['exame_id']))
    $exameID = $_GET['exame_id'];

if (isset($_GET['success'])) {

    if ($_GET['success'] == 'del') {

        echo "<div id=\"setting-error-settings_updated\" class=\"updated settings-error notice is-dismissible\">

              <p><strong>Entrada excluída.</strong></p>
              
                  <button type=\"button\" class=\"notice-dismiss\">
                    <span class=\"screen-reader-text\">Dispensar este aviso.</span>
                  </button>
                  
              </div>";

    }

}

if ($_GET['action'] == 'excluir') {

    $wpdb->delete(

        'wp_exames',

        array (

            'id' => $exameID

        )

    );

    echo'<script> window.location="admin.php?page=Exames&success=del"; </script> ';

}

if (isset($_POST['action'])) {

    if ($_POST['action'] == 'cadastrar-exame') {

        if (!isset($_FILES['exame-file'])) {

            $wpdb->insert(

                'wp_exames',

                array(

                    'nome' => $_POST['exame-nome'],
                    'text' => $_POST['exame-texto'],
                    'img' => 'none'

                )

            );

            if($wpdb->last_error !== '')
                $wpdb->print_error();

            echo "<div id=\"setting-error-settings_updated\" class=\"updated settings-error notice is-dismissible\">
    
                  <p><strong>Exame adicionado.</strong></p>
                  
                      <button type=\"button\" class=\"notice-dismiss\">
                        <span class=\"screen-reader-text\">Dispensar este aviso.</span>
                      </button>
                      
                  </div>";

        }

        else {

            if (!function_exists('wp_handle_upload') ) {
                require_once(ABSPATH . 'wp-admin/includes/file.php');
            }

            $uploadedfile = $_FILES['exame-file'];

            $upload_overrides = array( 'test_form' => false );

            $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {

                $wpdb->insert(

                    'wp_exames',

                    array(

                        'nome' => $_POST['exame-nome'],
                        'text' => $_POST['exame-texto'],
                        'img' => $movefile['url']

                    )

                );

                echo "<div id=\"setting-error-settings_updated\" class=\"updated settings-error notice is-dismissible\">
    
                  <p><strong>Exame adicionado.</strong></p>
                  
                      <button type=\"button\" class=\"notice-dismiss\">
                        <span class=\"screen-reader-text\">Dispensar este aviso.</span>
                      </button>
                      
                  </div>";

            } else {

                echo $movefile['error'];

            }

        }


    }

}

?>

<div class="wrap">

    <h2>Cadastrar exame</h2>

    <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="action" value="cadastrar-exame">

        <table class="form-table">

            <tr>
                <th scope="row"><label for="exame-file">Imagem</label></th>
                <td><input name="exame-file" type="file" id="exame-file" class="regular-text" />
            </tr>

            <tr>
                <th scope="row"><label for="exame-nome">Nome</label></th>
                <td><input required name="exame-nome" type="text" id="exame-nome" class="regular-text" />
            </tr>

            <tr>
                <th scope="row"><label for="exame-texto">Texto</label></th>
                <td><textarea style="height: 600px;" required name="exame-texto" id="exame-texto" class="regular-text"></textarea>
            </tr>

        </table>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Cadastrar">
        </p>

    </form>

    <br>
    <br>

    <h2>Exames ativos</h2>

    <br><br>

    <table class="wp-list-table widefat fixed striped posts">

        <thead>
        <tr>
            <th scope="col" id='title' class='manage-column column-title column-primary'><span>Nome</span></th>
        </tr>
        </thead>

        <tbody id="the-list">

        <?php foreach ($exames as $key => $data) : ?>

            <tr>

                <td class="title column-title has-row-actions column-primary page-title" data-colname="Nome">

                    <strong>
                        <?php echo $data->nome; ?>
                    </strong>

                    <div class="row-actions">
                        <span class='trash'><a href="<?php echo get_bloginfo('wpurl') ?>/wp-admin/admin.php?page=Exames&exame_id=<?php echo $data->id; ?>&action=excluir" class="submitdelete" aria-label="Excluir">Excluir</a></span>
                        <span><a href="<?php echo get_bloginfo('wpurl') ?>/wp-admin/admin.php?page=editar_exame&exame_id=<?php echo $data->id; ?>" aria-label="Editar">Editar</a></span>
                    </div>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>