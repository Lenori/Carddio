<div class="carddio-pre-agendamento" id="pre-agendamento">

    <div class="pre-agendamento-text">

        <h3>Pré-agendamento</h3>

        <p>Nos mande uma mensagem para agendar um horário ou tirar dúvidas!</p>

    </div>

    <div class="pre-agendamento-form">

        <form class="carddio-form" id="cform" onsubmit="enviarMsg()">

            <input required type="text" name="nome" id="nome" placeholder="Nome" />
            <input required class="carddio-input-half" type="email" name="email" id="email" placeholder="E-mail" />
            <input required class="carddio-input-half" type="number" name="telefone" id="telefone" placeholder="Telefone" />
            <input type="text" name="medico" id="medico" placeholder="Médico (a)" />

            <textarea required name="mensagem" id="mensagem">Mensagem</textarea>

            <button class="carddio-button-blue carddio-form-submit">Enviar</button>

        </form>

        <script>

            $("#cform").submit(function(e) {

                e.preventDefault();

            });

            function enviarMsg() {

                var nome = $("#nome").val();
                var email = $("#email").val();
                var telefone = $("#telefone").val();
                var medico = $("#medico").val();
                var mensagem = $("#mensagem").val();

                $.ajax({

                    type: "POST",
                    url: "wp-content/themes/carddio/contato.php",
                    data: {nome, email, telefone, medico, mensagem}

                }).done(function(e) {

                    alert(e);

                });
            }

        </script>

    </div>

</div>