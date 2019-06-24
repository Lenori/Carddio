<?php

global $wpdb;

$exames = $wpdb->get_results('SELECT * FROM wp_exames');

if (isset($_GET['exame_id']))
    $exameID = $_GET['exame_id'];
else
    echo'<script> window.location="admin.php?page=Exames"; </script> ';

if (isset($_GET['remove_pic'])) {

    $wpdb->update(

        'wp_exames',

        array(

            'img' => 'none'

        ),

        array(

            'id' => $exameID

        )

    );

    echo'<script> window.location="admin.php?page=Exames"; </script> ';

}

if (isset($_POST['action'])) {

    if ($_POST['action'] == 'editar-exame') {

        $wpdb->update(

            'wp_exames',

            array(

                'nome' => $_POST['exame-nome'],
                'text' => $_POST['exame-texto']

            ),

            array(

                'id' => $exameID

            )

        );

        if (isset($_FILES['exame-file'])) {

            if (!function_exists('wp_handle_upload') ) {
                require_once(ABSPATH . 'wp-admin/includes/file.php');
            }

            $uploadedfile = $_FILES['exame-file'];

            $upload_overrides = array( 'test_form' => false );

            $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

            if ($movefile && !isset($movefile['error'])) {

                $wpdb->update(

                    'wp_exames',

                    array(

                        'img' => $movefile['url']

                    ),

                    array (

                        'id' => $exameID

                    )

                );

            }

        }

        echo'<script> window.location="admin.php?page=Exames"; </script> ';

    }

}

?>

<div class="wrap">

    <h2>Editar exame</h2>

    <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="action" value="editar-exame">

        <table class="form-table">

            <?php foreach ($exames as $key => $data) : ?>

                <?php if ($data->id == $exameID) : ?>

                    <tr>
                        <th scope="row"><label for="exame-file">Imagem</label></th>
                        <td><input name="exame-file" type="file" id="exame-file" class="regular-text" />
                    </tr>

                    <?php if ($data->img <> 'none') : ?>

                        <img style="margin: 30px auto; max-width: 200px;" src="<?php echo $data->img ?>" alt="carddio-exame" />

                        <a href="admin.php?page=editar_exame&exame_id=<?php echo $data->id ?>&remove_pic=true">Remover imagem</a>

                    <?php endif; ?>

                    <tr>
                        <th scope="row"><label for="exame-nome">Nome</label></th>
                        <td><input required name="exame-nome" type="text" id="exame-nome" value="<?php echo $data->nome ?>" class="regular-text" />
                    </tr>

                    <tr>
                        <th scope="row"><label for="exame-texto">Texto</label></th>
                        <td><textarea style="height: 600px;" required name="exame-texto" id="exame-texto" class="regular-text"><?php echo $data->text ?></textarea>
                    </tr>

                <?php endif; ?>

            <?php endforeach; ?>

        </table>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Editar">
        </p>

    </form>

</div>