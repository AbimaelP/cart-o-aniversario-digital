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
$message = '<div>Convidado: '.$dados_json['convidado'].'</div>';

if($dados_json['acompanhantes']){
    $message .= '<div>Acompanhantes: </div>';
    $message .= implode(", ", $dados_json['acompanhantes']);
}

$mail->MsgHTML($message);
$mail->AddAddress('a.bimael2000@hotmail.com','a.bimael2000@hotmail.com');
$success = $mail->Send();
echo json_encode($success);
    
