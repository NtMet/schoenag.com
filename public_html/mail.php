<?php
require_once(__DIR__ . '/../home/lib/autoload.php');
require_once(__DIR__ . '/../home/lib/3rd-party/smarty/libs/Smarty.class.php');
session_start();
$mC = new \controller\MailController();
$to      = 'tiziano.meier@nintu.ch';
$subject = 'Marktstudie ';
$message = "Kontaktanfrage von nintu.ch: \n
Kontakt E-Mail: " . $_POST['email'] . "\n"
    . 'Firmenname: ' . $_POST['company'] . "\n"
    . 'Nachname: ' . $_POST['name'] . "\n"
    . 'Vornahme: ' . $_POST['firstName'] . "\n\n"

    . 'Text: ' . $_POST['text'] ;
$headers = 'From: nintu@nintu.com' . "\r\n" .
    'Reply-To: nintu@nintu.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    "Content-type: text/plain; charset=utf-8";
if(isset($_SESSION['lang'])) {
	$_POST['lang'] = $_SESSION['lang'];
}
//session_write_close();
if($_POST['email'] == null || $_POST['email'] == '' && (($_POST['name'] == null || $_POST['name'] == '') && ($_POST['firstName'] == null || $_POST['firstName'] == ''))) {
    $mC->handleRequest($_POST);
} else {
//    mail($to, $subject, $message, $headers);
    $mC->handleRequest($_POST);
}
