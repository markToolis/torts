<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet"
		/>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="box">
        <h1>
            Remplissez le formulaire pour effectuer l'achat
        </h1> 
        <form action="../send.php" method="POST">
            <p>Prénom</p>
            <input type="text" required name="name" id="" class="name" placeholder="Igran">
            <p>Email</p>
            <input type="email" required name="email" id="" class="email" placeholder="exemple@gmail.com">
            <p class="text">Après avoir rempli le formulaire et le paiement vous aurez accès au cours que vous avez choisi.</p>
            <div class="form__box">
                <img src="../img/5.png" alt="">
                <div class="form__container">
                    <p class="big-text">créme de couverture
                        “béton”</p>
                    <p>€ 29</p>
                </div>
            </div>
            <button class="" type="submit">
                <div class="button__box">
                    <p>Payer via</p>
                <img src="./img/Logo.svg" alt="">
                </div>
            </button>
        </form>
    </div>
</body>
</html>