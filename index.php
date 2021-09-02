<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... $c = new CreditCard(..); $user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->


<?php

    require_once 'User.php';
    require_once 'Premium.php';
    require_once 'Product.php';

    $utente1 = new User('Danilo', 'D\'Alessandro');
    $utente2 = new Premium('Arsenio', 'Lupin');
    $utente3 = new Premium('Willy', 'Wonka');

    $product1 = new Product('Lavatrice', 299);
    $product2 = new Product('Pc', 599);
    $product3 = new Product('Note 20', 999);

    var_dump($utente1);
    var_dump($utente2);
    var_dump($utente3);

    $utente1->buy($product1);
    $utente1->buy($product2);

    $utente2->buy($product1);
    $utente2->buy($product2);
    $utente2->buy($product3);

    $utente3->buy($product3);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php echo 'Nome Utente: ' . $utente1->getFullName(); ?>
    </h2>
    <p>
        <?php echo $utente1->totalCart() . '€'; ?>
    </p>

    <h2>
        <?php echo 'Nome Utente: ' . $utente2->getFullName(); ?>
    </h2>
    <p>
        <?php echo $utente2->totalCart() . '€'; ?>
    </p>

    <h2>
        <?php echo 'Nome Utente: ' . $utente3->getFullName(); ?>
    </h2>
    <p>
        <?php echo $utente3->totalCart() . '€'; ?>
    </p>
</body>
</html>