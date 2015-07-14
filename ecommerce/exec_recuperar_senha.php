<?php

require_once "config/init.php";

$email = $_POST['email'];

$cliente = new Cliente($conn);
$cliente->consultaEspecifica(array('email' => $email));

$resultado = $cliente->pegaUm();
if($resultado == FALSE)
{
	echo 'Cliente não encontrado';
}else{

	$id = $resultado['id'];
	$h = md5($resultado['email'].date('Ymd'));

	$mail = new PHPMailer;

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.mandrillapp.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'contato@viniciuscruz.com';                 // SMTP username
	$mail->Password = 'nKVIdqPCtLnJDC4vrj8tIg';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->From = 'contato@viniciuscruz.com';
	$mail->FromName = 'Venda mais';
	$mail->addAddress( $resultado['email'] );

	$mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    )
	);

	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Recuperar senha';
	$mail->Body    = 'Clique aqui para redefinir senha <a href="http://192.168.55.121/course/TurmaPhp/ecommerce/redefinir_senha.php?h=$h&id=$id"></a>';

	echo 'Senha enviada';
}