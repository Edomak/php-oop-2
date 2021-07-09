
<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Aggiungete una pagina (vista) in cui creare istanze delle classi create e mostrare alcuni dati. Su cosa sia la pagina siete liberi (potrebbe essere la pagina di account dell'utente, oppure una pagina di elenco prodotti o dettaglio prodotto, con visualizzazione dello username utente in alto a destra). -->

<?php 

require __DIR__ . "/classes/Userpremium.php";
require __DIR__ . "/classes/Console.php";

$user_id = new User('Edoardo','Maccherini','edoardo.maccherini@hotmail.com','Edomak','edo_85');

// var_dump($user_id);

$user_id_premium = new UserPremium('Luca','Tassi','luca.tassi@hotmail.com','Lucataxy','luca_84','Lucataxy54321');

// var_dump($user_id_premium);

$iphone11 = new Product('Iphone11','699', 20, 1);

// var_dump($iphone11);

$play5 = new Console("Playstation 5", "499", "10", "1", "Sony", "667");

// var_dump($play5);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>php-oop-2</title>
    </head>
    <body>
        <div class="username">
            <h3>UserName: <?= $user_id_premium->getUserName() ?> </h3>
        </div>
        <div class="product">
            <h1>Product:</h1>
            <h2> 
               Name: <?= $iphone11->getName(); ?> 
            </h2>
            <p>
                Price: <?= $iphone11->getPrice() . " €"; ?>
            </p>
            <p>
                Discount: <?= $iphone11->getDiscount() . " %"; ?>
            </p>
            <p>
                Quantity: <?= $iphone11->getQuantity() . " Amount"; ?>
            </p>
        </div>
    </body>
</html>



