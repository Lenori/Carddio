<?php

global $wpdb;

$convenios = $wpdb->get_results('SELECT * FROM wp_convenios');

if (isset($_GET['convenio_id']))
    $convenioID = $_GET['convenio_id'];

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

        'wp_convenios',

        array (

            'id' => $convenioID
        )

    );

    echo'<script> window.location="admin.php?page=Convenios&success=del"; </script> ';

}

if (isset($_POST['action'])) {

    if ($_POST['action'] == 'cadastrar-convenio') {

        $wpdb->insert(

            'wp_convenios',

            array(

                'nome' => $_POST['convenio-nome']

            )

        );

        echo "<div id=\"setting-error-settings_updated\" class=\"updated settings-error notice is-dismissible\">

              <p><strong>Convênio adicionado.</strong></p>
              
                  <button type=\"button\" class=\"notice-dismiss\">
                    <span class=\"screen-reader-text\">Dispensar este aviso.</span>
                  </button>
                  
              </div>";

    }

}

?>

<div class="wrap">

    <h2>Cadastrar convênio</h2>

    <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="action" value="cadastrar-convenio">

        <table class="form-table">

            <tr>
                <th scope="row"><label for="convenio-nome">Nome</label></th>
                <td><input required name="convenio-nome" type="text" id="convenio-nome" class="regular-text" />
            </tr>

        </table>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Cadastrar">
        </p>

    </form>

    <br>
    <br>

    <h2>Convênios ativos</h2>

    <br><br>

    <table class="wp-list-table widefat fixed striped posts">

        <thead>
        <tr>
            <th scope="col" id='title' class='manage-column column-title column-primary'><span>Nome</span></th>
        </tr>
        </thead>

        <tbody id="the-list">

        <?php foreach ($convenios as $key => $data) : ?>

            <tr>

                <td class="title column-title has-row-actions column-primary page-title" data-colname="Nome">

                    <strong>
                        <?php echo $data->nome; ?>
                    </strong>

                    <div class="row-actions">
                        <span class='trash'><a href="<?php echo get_bloginfo('wpurl') ?>/wp-admin/admin.php?page=Convenios&convenio_id=<?php echo $data->id; ?>&action=excluir" class="submitdelete" aria-label="Excluir">Excluir</a></span>
                    </div>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>