<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
 
/* Ваш адрес и тема сообщения */
$address = "lizkon22@mail.ru";
$sub = "Сообщение с сайта ХХХ";
 
/* Формат письма */
$mes = "Сообщение с сайта ХХХ.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email";
 
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
 header('Refresh: 5; URL=http://biznessystem.ru');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на страницу XXX</body>';}
else {
 header('Refresh: 5; URL=http://biznessystem.ru');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY</body>';}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>