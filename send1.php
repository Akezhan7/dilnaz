<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['email'])) {$mailsd = $_POST['email'];}
if (isset($_POST['message'])) {$msgs = $_POST['message'];}
 
/* Сюда впишите свою эл. почту */
$myaddres  = "dilnaz.byrzhan@mail.ru"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ сайта!\nПочта: $mailsd\nСообщение: $msgs";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='Заказ сайта'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо! Мы свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1 style="text-align:center">Спасибо! Мы свяжемся с вами!</h1>
</body>
</html>