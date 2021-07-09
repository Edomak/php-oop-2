
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

$user_code = new User('Edoardo','Maccherini','edoardo.maccherini@hotmail.com','Edomak','edo_85');

// var_dump($user_code);

$user_code_premium = new UserPremium('Luca','Tassi','luca.tassi@hotmail.com','Lucataxy','luca_84','Lucataxy54321');

// var_dump($user_code_premium);

$iphone11 = new Product('Iphone11','699', 20, 1);

// var_dump($iphone11);

$play5 = new Console("Playstation 5", "499", "10", "1", "Sony", "667");

// var_dump($play5);


?>

