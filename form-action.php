<?
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailler(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);
$mail->setFrom('vitya898989@gmail.com', 'Витек');
$mail->addAddress('vitya898989@gmail.com');
$mail->Subject = 'Заявка на услугу перевозки';
$body = '<h1>Заявка</h1>'ж
if(trim(!empty($_POST['name']))) {
	$body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>'; 
}
if(trim(!empty($_POST['telephone']))) {
	$body.='<p><strong>Телефон:</strong> '.$_POST['telephone'].'</p>'; 
}

$mail->Body = $body;

if (!$mail->send()) {
	$message = false;
} else {
	$message = true;
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>