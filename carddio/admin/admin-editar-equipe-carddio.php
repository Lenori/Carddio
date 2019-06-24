<?php

global $wpdb;

if (isset($_GET['membro_id']))
    $membroID = $_GET['membro_id'];
else
    echo'<script> window.location="admin.php?page=Equipe"; </script> ';

$membros = $wpdb->get_results('SELECT * FROM wp_equipe');

if (isset($_POST['action'])) {

    if ($_POST['action'] == 'editar-equipe') {

        $wpdb->update(

            'wp_equipe',

            array(

                'nome' => $_POST['membro-nome'],
                'especialidade' => $_POST['membro-especialidade'],
                'crm' => $_POST['membro-crm']

            ),

            array(

                'id' => $membroID

            )

        );

        if ($_FILES['membro-file']) {

            if (!function_exists('wp_handle_upload') ) {
                require_once(ABSPATH . 'wp-admin/includes/file.php');
            }

            $uploadedfile = $_FILES['membro-file'];

            $upload_overrides = array( 'test_form' => false );

            $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {

                $wpdb->update(

                    'wp_equipe',

                    array(

                        'img' => $movefile['url']

                    ),

                    array(

                        'id' => $membroID

                    )

                );

            } else {

                echo $movefile['error'];

            }

        }

        echo'<script> window.location="admin.php?page=Equipe"; </script> ';

    }

}

?>

<div class="wrap">

    <h2>Editar membro da equipe</h2>

    <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="action" value="editar-equipe">

        <table class="form-table">

            <?php foreach($membros as $key => $data) : ?>

                <?php if($data->id == $membroID) : ?>

                    <tr>
                        <th scope="row"><label for="membro-file">Imagem</label></th>
                        <td><input name="membro-file" type="file" id="membro-file" class="regular-text" />
                    </tr>

                    <img style="margin: 30px auto; max-width: 200px;" src="<?php echo $data->img ?>" alt="carddio-equipe" />

                    <tr>
                        <th scope="row"><label for="membro-nome">Nome</label></th>
                        <td><input required name="membro-nome" type="text" id="membro-nome" value="<?php echo $data->nome ?>" class="regular-text" />
                    </tr>

                    <tr>
                        <th scope="row"><label for="membro-especialidade">Especialidade + resumo</label></th>
                        <td><textarea style="height: 300px;" required name="membro-especialidade" id="membro-especialidade" class="regular-text"><?php echo $data->especialidade ?></textarea>
                    </tr>

                <?php endif; ?>

            <?php endforeach; ?>

            <tr>
                <th scope="row"><label for="membro-crm">CRM</label></th>
                <td><input required name="membro-crm" type="text" id="membro-crm" value="<?php echo $data->crm ?>" class="regular-text" />
            </tr>

        </table>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Editar">
        </p>

    </form>

</div>