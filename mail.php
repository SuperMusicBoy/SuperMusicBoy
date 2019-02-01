<?php
//Принимаем постовые данные
$username=$_POST['name'];
$email=$_POST['mail'];
$user_message=$_POST['message'];

//Тут указываем на какой ящик посылать письмо
$to = "bunin-sasha95@mail.ru";
//Далее идет тема письма и само сообщение
// Тема письма
$subject = "От сайта Minto";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Email:".htmlspecialchars($mail)."<br />
Сообщение:".htmlspecialchars($message);
// Отправляем письмо при помощи функции mail();
$headers = "From: Minto.sl <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>