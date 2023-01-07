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
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
</head>
<body>
    <div class="box">
        <h1>
            Remplissez le formulaire pour effectuer l'achat
        </h1> 
        <form action="../send.php" method="POST">
            <p>Prénom</p>
            <input type="text" required name="name" id="" class="name" placeholder="Igran">
            <input type="text" required name="text" id="" class="name" value="Cours Professionnel"  placeholder="Igran" style="display: none;">
            <input type="text" required name="cost" id="" class="name" value="€ 199"  placeholder="Igran" style="display: none;">
            <p>Email</p>
            <input type="email" required name="email" id="" class="email" placeholder="exemple@gmail.com">
            <p class="text">Après avoir rempli le formulaire et le paiement vous aurez accès au cours que vous avez choisi.</p>
            <div class="form__box">
                <img src="../img/1.png" alt="">
                <div class="form__container">
                    <p class="big-text">Cours Professionnel</p>
                    <p>€ 199</p>
                </div>
            </div>
            <button class="button" type="submit">
                
                <div class="button__box">
                    <a > Payer via</a></p>
                <img src="./img/Logo.svg" alt="">
                </div>
            </button>
        </form>
        <!-- <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=CHF" data-sdk-integration-source="button-factory"></script>
        <script>
          function initPayPalButton() {
            paypal.Buttons({
              style: {
                shape: 'rect',
                color: 'gold',
                layout: 'vertical',
                label: 'paypal',
                
              },
      
              createOrder: function(data, actions) {
                return actions.order.create({
                  purchase_units: [{"description":"Pàtisserie professionnel","amount":{"currency_code":"CHF","value":199}}]
                });
              },
      
              onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                  
                  // Full available details
                  console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
      
                  // Show a success message within this page, e.g.
                  const element = document.getElementById('paypal-button-container');
                  element.innerHTML = '';
                  eactions.redirect('thank_you.html');
      
                  // Or go to another URL:  actions.redirect('thank_you.html');
                  
                });
              },
      
              onError: function(err) {
                console.log(err);
              }
            }).render('#paypal-button-container');
          }
          initPayPalButton();
        </script> -->
    </div>
</body>
</html>