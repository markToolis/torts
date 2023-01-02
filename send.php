<!DOCTYPE html>
<html lang="en"class="rr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
             display: block;
        }
        #text{
	display: none;
    }
    *{
        margin: 0;
    }
    </style>
        <!-- <link rel="stylesheet" href="./css/t.css"> -->
    <link rel="stylesheet" href="./css/denis-style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet"
		/>
</head>
<body>
    <div class="block">
    <div class="box"><h1 class="mark__title">
        succès
    </h1>
    <img class="mark__img" src="./Groupt.png" alt="">
    <p class="mark__text">Paiement effectué avec succès! Merci d'avoir acheté le cours! Si vous avez des questions, s'il vous plaît écrivez-nous à <span class="mark__span"> Email: pastrynataly@gmail.com</span> </p></div>
    <footer class="footer">
      <div class="container">
        <div class="footer-content">
          <div class="contacts">
            <h2 class="contacts__title">Nos contacts</h2>
            <div class="contacts__socials">
              <div class="contacts__left">
                <a class="instagram">
                  <img class="contacts__images" src="./img/instagram.svg" alt="">
                  <p class="constacts__text">Abones-nous <br> sur <span class="instagram-color">Instagram</span></p>
                </a>
                <a href="https://www.whatsapp.com/?lang=ru" class="youtube">
                  <img class="contacts__images" src="./img/youtube.svg" alt="">
                  <p class="constacts__text">Abones-nous <br> sur <span class="youtube-color">Youtube</span> </p>
                </a>
              </div>
              <div class="contacts__right">
                <a class="whatapp">
                  <img class="contacts__images" src="./img/whatapp.svg" alt="">
                  <p class="constacts__text">Écrives-nous <br> à <span class="whatapp-color">Whats App</span></p>
                </a>
                <a class="email">
                  <img class="contacts__images" src="./img/email.svg" alt="">
                  <p class="constacts__text">Écrives-nous <br> <span class="email-color">Artsem@gmail.com</span></p>
                </a>
              </div>
            </div>
          </div>
          <div class="footer-menu">
            <h2 class="footer-menu__title">Menu</h2>
            <nav class="footer-nav">
              <div class="footer-nav__left">
                <a href="" class="footer-nav__link">Acheter un cours</a>
                <a href="" class="footer-nav__link footer-nav__link--margin">Nos cours</a>
                <a href="" class="footer-nav__link footer-nav__link--margin">Exemples D’oeuvre</a>
              </div>
              <div class="footer-nav__right">
                <a href="" class="footer-nav__link">Avis</a>
                <a href="" class="footer-nav__link footer-nav__link--margin">Moi-même</a>
                <a href="" class="footer-nav__link footer-nav__link--margin">Réponses aux  questions</a>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="footer-hidden">
        <div class="container">
          <h2 class="footer-hidden__title">Menu</h2>
          <nav class="footer-hidden-nav">
            <div class="footer-hidden-nav__left">
              <a href="" class="footer-hidden-nav__link">Acheter un cours</a>
              <a href="" class="footer-hidden-nav__link footer-hidden-nav__link--margin">Nos cours</a>
              <a href="" class="footer-hidden-nav__link footer-hidden-nav__link--margin">Exemples D’oeuvre</a>
            </div>
            <div class="footer-hidden-nav__right">
              <a href="" class="footer-hidden-nav__link">Avis</a>
              <a href="" class="footer-hidden-nav__link footer-hidden-nav__link--margin">Moi-même</a>
              <a href="" class="footer-hidden-nav__link footer-hidden-nav__link--margin">Réponses aux  questions</a>
            </div>
          </nav>
        </div>
      </div>
    </footer>
    </div>
</body>
</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMaile

$mail = new PHPMailer(true);

$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
// $url = 'http://www.pastrynataly.com/thank-you.html';
// $comment = $_POST['comment'];

        // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'team.lisabelkaa@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
    $mail->Password = 'xoqccqadvvyfxjbs'; // Ваш пароль от почты с которой будут отправляться письма


    // Sender and recipient settings
    $mail->setFrom('cyjovichzaxar@gmail.com', 'Sender Name');
    $mail->addAddress($_POST['email'], 'Receiver Name');
    //$mail->addReplyTo('hiksend@gmail.com', 'Sender Name'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);

    $mail->Subject = 'Заявка с тестового сайта';
    $mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$email. '<br>Почта этого пользователя: ' .$text;
    $mail->AltBody = '';

    if (!$mail->send()) {
        echo 'Error';
    } else {
        echo 'All nice';
        // header('Location: ' .$url);
    }


?>

