<!DOCTYPE html>
<html lang="en"class="rr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement</title>
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
        <link rel="stylesheet" href="./css/products.css">
    <link rel="stylesheet" href="./css/denis-style.css">
    <link rel="stylesheet" href="./css/form.css">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet"
		/>
</head>
<body>
    <div class="block">
    <!-- <div class="form__box">
                <img class="img2" src="../img/1.png" alt="">
                <div class="form__container">
                    <p class="big-text">Cours Professionnel</p>
                    <p>€ 199</p>
                </div>
            </div> -->
            <div class="container-2" style="padding-top: 80px;">
              <h1 style="text-align:center">créme de couverture
“béton”<h1>
              <div class="form__container--pay">
                <p style="color: black;">€ 29</p>
            </div>
            <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=EUR" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'horizontal',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"créme de couverture\n“béton”","amount":{"currency_code":"EUR","value":29}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            actions.redirect('./thank-you.html');

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
    <footer class="footer">
			<div class="container">
			  <div class="footer-content">
				<div class="contacts">
				  <h2 class="contacts__title">Nos contacts</h2>
				  <div class="contacts__socials">
					<div class="contacts__left">
					  <a href="https://instagram.com/pastry_nataly?igshid=YmMyMTA2M2Y=" class="instagram">
						<img class="contacts__images" src="./img/instagram.svg" alt="">
						<p class="constacts__text">Abones-nous <br> sur <span class="instagram-color">Instagram</span></p>
					  </a>
					  <a href="https://youtube.com/@nataliapousaz" class="youtube">
						<img class="contacts__images" src="./img/youtube.svg" alt="">
						<p class="constacts__text">Abones-nous <br> sur <span class="youtube-color">Youtube</span> </p>
					  </a>
					</div>
					<div class="contacts__right">
					  <a href="https://wa.me/41782427393?text=Bonjour" class="whatapp">
						<img class="contacts__images" src="./img/whatapp.svg" alt="">
						<p class="constacts__text">Écrives-nous <br> à <span class="whatapp-color">Whats App</span></p>
					  </a>
					  <a href="mailto:pastrynataly@gmail.com" class="email">
						<img class="contacts__images" src="./img/email.svg" alt="">
						<p class="constacts__text">Écrives-nous <br> <span class="email-color">pastrynataly@gmail.com</span></p>
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
$cost = $_POST['cost'];
$url = 'www.pastrynataly.com/thank-you.html';
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
    $mail->setFrom('pastrynataly@gmail.com', 'electronic assistant');
    $mail->addAddress('pastrynataly@gmail.com', 'Receiver Name');
    //$mail->addReplyTo('hiksend@gmail.com', 'Sender Name'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);

    $mail->Subject = 'Заявка';
    $mail->Body    = '<br>имя: ' .$name . '<br>email: ' .$email. '<br>название курса: ' .$text. '<br>цена: ' .$cost.
    $mail->AltBody = '';

    if (!$mail->send()) {
        echo 'Error';
    } else {
      exit;
        header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WFUTMVTF3CHPA"); 
    }


?>

