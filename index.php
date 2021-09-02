<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... $c = new CreditCard(..); $user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->


<?php

    require_once 'User.php';
    require_once 'Premium.php';
    require_once 'Product.php';

    //settaggio utenti
    $utente1 = new User('Danilo', 'D\'Alessandro');
    $utente2 = new Premium('Arsenio', 'Lupin');
    $utente3 = new Premium('Willy', 'Wonka');

    //settaggio prodotti
    $product1 = new Product('Lavatrice', 299);
    $product2 = new Product('Pc', 599);
    $product3 = new Product('Note 20', 999);

    

    //acquisto utenti
    $utente1->buy($product1);
    $utente1->buy($product2);

    $utente2->buy($product1);
    $utente2->buy($product2);
    $utente2->buy($product3);

    $utente3->buy($product3);

    //inserimento dati carta di credito
    try {
        $utente1->setPayment('2501469832012357', 'ciao', '402');
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }

    // $utente1->setPayment('1234567891234567', 2024, '402');
    try {
        $utente2->setPayment('4569821536214752', 2020, '825');
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }
    // $utente2->setPayment('4569821536214752', 2021, '825');

    try {
        $utente3->setPayment('3254156980012356', 2022, '710');
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }
    // $utente3->setPayment('3254156980012356', 2022, '710');

    // var_dump($utente1);
    // var_dump($utente2);
    // var_dump($utente3);
    
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
        Totale della spesa: <?php echo $utente1->totalCart() . '€'; ?>
    </p>

    <h2>
        <?php echo 'Nome Utente: ' . $utente2->getFullName(); ?>
    </h2>
    <p>
        Totale della spesa: <?php echo $utente2->totalCart() . '€'; ?>
    </p>

    <h2>
        <?php echo 'Nome Utente: ' . $utente3->getFullName(); ?>
    </h2>
    <p>
       Totale della spesa: <?php echo $utente3->totalCart() . '€'; ?>
    </p>
</body>
</html>