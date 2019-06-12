<?php

$nome		= $_POST["nome"];
$telefone	= $_POST["telefone"];

$msg 		= "Nome: $nome\n\n
               Telefone: $telefone\n";

require_once("mail/class.phpmailer.php");

define('GUSER', 'emailcarddio@gmail.com');
define('GPWD', 'carddio010203');

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) {
    global $error;
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = GUSER;
    $mail->Password = GPWD;
    $mail->SetFrom($de, $de_nome);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;
    $mail->AddAddress($para);
    if(!$mail->Send()) {
        $error = 'Erro: '.$mail->ErrorInfo;
        return false;
    } else {

        return true;

    }
}

if (smtpmailer('leolenori@gmail.com', 'emailcarddio@gmail.com', 'Carddio Website', 'Carddio | Contato solicitado por '. $nome .'', $msg)) {

    echo "Contato solicitado com sucesso!";

}
if (!empty($error))
    echo $error;

?>