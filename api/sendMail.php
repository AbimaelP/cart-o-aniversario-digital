<?php
include_once('../phpmailer/class.phpmailer.php');
    
$dados = file_get_contents("php://input");
    
$dados_json = json_decode($dados, true);

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth   = true; 
$mail->SMTPSecure = "ssl"; 
$mail->Host       = "mail.smtp2go.com";
$mail->Username   = "rede_news3";
$mail->Password   = "zFSDAcxvzxakSADF243129128APOSPQQXX";

$mail->From = 'abimael.stack@hotmail.com';
$mail->FromName = 'abimael.stack@hotmail.com';
$mail->Subject = ('nenhum assunto');
$message = '';

if($dados_json['lista_convidados'])
{
    $contents = file_get_contents('listaConvidados.txt');

    $contents = explode(',', $contents);

    foreach($contents as $content){
        $message .= "<br/>".$content.",";
    }
}
else
{
$message = '<div>Convidado: '.$dados_json['convidado'].'</div>';

    function registrarConvidado($convidado){
        file_put_contents('listaConvidados.txt', $convidado . ",", FILE_APPEND) ;
    }

    registrarConvidado($dados_json['convidado']);
}

$mail->MsgHTML($message);
$mail->AddAddress('lyannamarquesvasconcelos@gmail.com','lyannamarquesvasconcelos@gmail.com');
$success = $mail->Send();
echo json_encode($message);
    
