<?php
    require_once('phpmailer/PHPMailerAutoload.php');
    $mail = new PHPMailer;
    $mail->CharSet = 'utf-8';

    // Установка настроек SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com';  // Укажите имя хоста вашего SMTP-сервера
    $mail->SMTPAuth = true;
    $mail->Username = 'astrumteam@outlook.com';  // Укажите вашу почту Gmail
    $mail->Password = 'bnh12kbn3hj';  // Укажите пароль от вашей почты Gmail
    $mail->SMTPSecure = 'Tls';
    $mail->Port = 587;  // Укажите порт вашего SMTP-сервера

    // Установка адресов отправителя и получателя
    $mail->setFrom('smtp-mail.outlook.com');
    $mail->addAddress('xsuper435@gmail.com');  // Укажите адрес получателя

    // Установка темы письма
    $mail->Subject = 'Обратная связь';

    // Установка содержимого письма
    $mailBody = "Почта отправителя: " . $_POST['email'] . "\n";
    $mailBody .= "Категория: " . $_POST['category'] . "\n";
    $mailBody .= "Сообщение:\n" . $_POST['message'];
    $mail->Body = $mailBody;

    // Отправка письма
    if ($mail->send()) {
        echo 'Письмо успешно отправлено';
    } else {
        echo 'Ошибка при отправке письма: ' . $mail->ErrorInfo;
    }
?>