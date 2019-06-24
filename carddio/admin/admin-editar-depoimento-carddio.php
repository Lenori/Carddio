<?php

global $wpdb;

if (isset($_GET['depoimento_id']))
    $depoimentoID = $_GET['depoimento_id'];
else
    echo'<script> window.location="admin.php?page=Depoimentos"; </script> ';

$depoimentos = $wpdb->get_results('SELECT * FROM wp_depoimentos');

if (isset($_POST['action'])) {

    if ($_POST['action'] == 'editar-depoimento') {

        $wpdb->update(

            'wp_depoimentos',

            array(

                'nome' => $_POST['depoimento-nome'],
                'text' => $_POST['depoimento-text'],
                'referencia' => $_POST['depoimento-referencia']

            ),

            array(

                'id' => $depoimentoID

            )

        );

        echo'<script> window.location="admin.php?page=Depoimentos"; </script> ';

    }

}

?>

<div class="wrap">

    <h2>Editar depoimento</h2>

    <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="action" value="editar-depoimento">

        <table class="form-table">

            <?php foreach ($depoimentos as $key => $data) : ?>

                <?php if ($data->id == $depoimentoID) : ?>

                    <tr>
                        <th scope="row"><label for="depoimento-nome">Nome</label></th>
                        <td><input required name="depoimento-nome" type="text" id="depoimento-nome" value="<?php echo $data->nome ?>" class="regular-text" />
                    </tr>

                    <tr>
                        <th scope="row"><label for="depoimento-text">Depoimento</label></th>
                        <td><textarea style="height: 300px;" required name="depoimento-text" id="depoimento-text" class="regular-text"><?php echo $data->text ?></textarea>
                    </tr>

                    <tr>
                        <th scope="row"><label for="depoimento-referencia">Referência</label></th>
                        <td><input name="depoimento-referencia" type="text" id="depoimento-referencia" value="<?php echo $data->referencia ?>" class="regular-text" />
                    </tr>

                <?php endif; ?>

            <?php endforeach; ?>

        </table>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Editar">
        </p>

    </form>

</div>