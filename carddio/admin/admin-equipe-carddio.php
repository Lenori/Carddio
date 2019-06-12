<?php

global $wpdb;

$membros = $wpdb->get_results('SELECT * FROM wp_equipe');

if (isset($_GET['membro_id']))
    $membroID = $_GET['membro_id'];

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

        'wp_equipe',

        array (

            'id' => $membroID

        )

    );

    echo'<script> window.location="admin.php?page=Equipe&success=del"; </script> ';

}

if (isset($_POST['action'])) {

    if ($_POST['action'] == 'cadastrar-equipe') {

        if (!function_exists('wp_handle_upload') ) {
            require_once(ABSPATH . 'wp-admin/includes/file.php');
        }

        $uploadedfile = $_FILES['membro-file'];

        $upload_overrides = array( 'test_form' => false );

        $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

        if ($movefile && !isset($movefile['error'])) {

            $wpdb->insert(

                'wp_equipe',

                array(

                    'nome' => $_POST['membro-nome'],
                    'especialidade' => $_POST['membro-especialidade'],
                    'crm' => $_POST['membro-crm'],
                    'img' => $movefile['url']

                )

            );

            echo "<div id=\"setting-error-settings_updated\" class=\"updated settings-error notice is-dismissible\">
    
                  <p><strong>Membro adicionado.</strong></p>
                  
                      <button type=\"button\" class=\"notice-dismiss\">
                        <span class=\"screen-reader-text\">Dispensar este aviso.</span>
                      </button>
                      
                  </div>";

        } else {

            echo $movefile['error'];

        }

    }

}

?>

<div class="wrap">

    <h2>Cadastrar membro da equipe</h2>

    <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="action" value="cadastrar-equipe">

        <table class="form-table">

            <tr>
                <th scope="row"><label for="membro-file">Imagem</label></th>
                <td><input required name="membro-file" type="file" id="membro-file" class="regular-text" />
            </tr>

            <tr>
                <th scope="row"><label for="membro-nome">Nome</label></th>
                <td><input required name="membro-nome" type="text" id="membro-nome" class="regular-text" />
            </tr>

            <tr>
                <th scope="row"><label for="membro-especialidade">Especialidade + resumo</label></th>
                <td><textarea style="height: 300px;" required name="membro-especialidade" id="membro-especialidade" class="regular-text"></textarea>
            </tr>

            <tr>
                <th scope="row"><label for="membro-crm">CRM</label></th>
                <td><input required name="membro-crm" type="text" id="membro-crm" class="regular-text" />
            </tr>

        </table>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Cadastrar">
        </p>

    </form>

    <br>
    <br>

    <h2>Membros ativos</h2>

    <br><br>

    <table class="wp-list-table widefat fixed striped posts">

        <thead>
        <tr>
            <th scope="col" id='title' class='manage-column column-title column-primary'><span>Nome</span></th>
            <th scope="col" id='title' class='manage-column column-title column-primary'><span>Especialidade + Resumo</span></th>
            <th scope="col" id='title' class='manage-column column-title column-primary'><span>CRM</span></th>
        </tr>
        </thead>

        <tbody id="the-list">

        <?php foreach ($membros as $key => $data) : ?>

            <tr>

                <td class="title column-title has-row-actions column-primary page-title" data-colname="Caminho">

                    <strong>
                        <?php echo $data->nome; ?>
                    </strong>

                    <div class="row-actions">
                        <span class='trash'><a href="<?php echo get_bloginfo('wpurl') ?>/wp-admin/admin.php?page=Equipe&membro_id=<?php echo $data->id; ?>&action=excluir" class="submitdelete" aria-label="Excluir">Excluir</a></span>
                    </div>

                </td>

                <td class="title column-title has-row-actions column-primary page-title" data-colname="Especialidade + Resumo">

                    <strong>
                        <?php echo $data->especialidade; ?>
                    </strong>

                </td>

                <td class="title column-title has-row-actions column-primary page-title" data-colname="CRM">

                    <strong>
                       <?php echo $data->crm; ?>
                    </strong>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>