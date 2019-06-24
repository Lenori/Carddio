<?php

global $wpdb;

$depoimentos = $wpdb->get_results('SELECT * FROM wp_depoimentos');

if (isset($_GET['depoimento_id']))
    $depoimentoID = $_GET['depoimento_id'];

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

        'wp_depoimentos',

        array (

            'id' => $depoimentoID
        )

    );

    echo'<script> window.location="admin.php?page=Depoimentos&success=del"; </script> ';

}

if (isset($_POST['action'])) {

    if ($_POST['action'] == 'cadastrar-depoimento') {

        $wpdb->insert(

            'wp_depoimentos',

            array(

                'nome' => $_POST['depoimento-nome'],
                'text' => $_POST['depoimento-text'],
                'referencia' => $_POST['depoimento-referencia']

            )

        );

        echo "<div id=\"setting-error-settings_updated\" class=\"updated settings-error notice is-dismissible\">

              <p><strong>Depoimento adicionado.</strong></p>
              
                  <button type=\"button\" class=\"notice-dismiss\">
                    <span class=\"screen-reader-text\">Dispensar este aviso.</span>
                  </button>
                  
              </div>";

    }

}

?>

<div class="wrap">

    <h2>Cadastrar depoimento</h2>

    <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="action" value="cadastrar-depoimento">

        <table class="form-table">

            <tr>
                <th scope="row"><label for="depoimento-nome">Nome</label></th>
                <td><input required name="depoimento-nome" type="text" id="depoimento-nome" class="regular-text" />
            </tr>

            <tr>
                <th scope="row"><label for="depoimento-text">Depoimento</label></th>
                <td><textarea style="height: 300px;" required name="depoimento-text" id="depoimento-text" class="regular-text"></textarea>
            </tr>

            <tr>
                <th scope="row"><label for="depoimento-referencia">Referência</label></th>
                <td><input name="depoimento-referencia" type="text" id="depoimento-referencia" class="regular-text" />
            </tr>

        </table>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Cadastrar">
        </p>

    </form>

    <br>
    <br>

    <h2>Depoimentos ativos</h2>

    <br><br>

    <table class="wp-list-table widefat fixed striped posts">

        <thead>
        <tr>
            <th scope="col" id='title' class='manage-column column-title column-primary'><span>Nome</span></th>
            <th scope="col" id='title' class='manage-column column-title column-primary'><span>Depoimento</span></th>
            <th scope="col" id='title' class='manage-column column-title column-primary'><span>Referência</span></th>
        </tr>
        </thead>

        <tbody id="the-list">

        <?php foreach ($depoimentos as $key => $data) : ?>

            <tr>

                <td class="title column-title has-row-actions column-primary page-title" data-colname="Caminho">

                    <strong>
                        <?php echo $data->nome; ?>
                    </strong>

                    <div class="row-actions">
                        <span class='trash'><a href="<?php echo get_bloginfo('wpurl') ?>/wp-admin/admin.php?page=Depoimentos&depoimento_id=<?php echo $data->id; ?>&action=excluir" class="submitdelete" aria-label="Excluir">Excluir</a></span>
                        <span><a href="<?php echo get_bloginfo('wpurl') ?>/wp-admin/admin.php?page=editar_depoimento&depoimento_id=<?php echo $data->id; ?>" aria-label="Editar">Editar</a></span>
                    </div>

                </td>

                <td class="title column-title has-row-actions column-primary page-title" data-colname="Depoimento">

                    <strong>
                        <?php echo $data->text; ?>
                    </strong>

                </td>

                <td class="title column-title has-row-actions column-primary page-title" data-colname="Referência">

                    <strong>
                        <?php echo $data->referencia; ?>
                    </strong>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>