<?php
if(!empty($_POST) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']))
{
	require_once __DIR__ . '/inc/phpmailer.php';

	$content = "Оставлена заявка на звонок:\n";
	$content.= "Имя: ".trim(strip_tags($_POST['name']))."\n";
	$content.= "Телефон: ".trim(strip_tags($_POST['phone']))."\n";

	$mailer = new PHPMailer();
	$mailer->IsHTML(false);
	$mailer->CharSet = 'utf-8';
	$mailer->Subject = 'Multipressa.ru Заказ звонка';
	$mailer->Body = $content;
	$mailer->From = 'info@jcat.ru';
	$mailer->FromName = 'JCat';
	$mailer->AddAddress('mail@multipressa.ru', '');
	$mailer->AddAddress('info@jcat.ru', '');
	$mailer->Send();
}
