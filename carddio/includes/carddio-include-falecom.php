        </div>
    </div>

<div class="carddio-fale-com">

    <div class="carddio-fale-com-buttons">

        <h3>Fale com a Cárddio</h3>

        <p class="carddio-button-blue carddio-open-chat">Chat</p>
        <a href="tel:+556133518393"><p class="carddio-button-blue">(61) 3351-8393</p></a>
        <p class="carddio-button-blue carddio-open-form">Receba um contato da Cárddio</p>

    </div>

    <div class="carddio-ligacao">

        <h3>Receba uma ligação da Cárddio</h3>

        <form class="carddio-form" id="sform" onsubmit="enviarSolicitacao()">

            <input required type="text" name="nomeS" id="nomeS" placeholder="Nome" />
            <input required type="number" name="telefoneS" id="telefoneS" placeholder="Telefone" />

            <button id="solicitacao-enviar" class="carddio-button-blue carddio-form-submit">Enviar</button>

        </form>

        <p id="solicitacao-sucesso" class="contato-enviado"></p>

        <script>

            $("#sform").submit(function(e) {

                e.preventDefault();

            });

            function enviarSolicitacao() {

                $('#solicitacao-enviar').prop('disabled', true).text('Enviando...');

                var nome = $("#nomeS").val();
                var telefone = $("#telefoneS").val();

                $.ajax({

                    type: "POST",
                    url: "wp-content/themes/carddio/solicitacao.php",
                    data: {nome, telefone}

                }).done(function(e) {

                    $('#solicitacao-sucesso').text(e).show();

                });
            }

        </script>

    </div>

</div>

    <div class="content">
        <div class="row">