<!-- creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti es. antipulci avranno la caratteristica che saranno disponibili solo in un periodo particolare es. da maggio ad agosto. -->


<?php

require_once __DIR__.'/Classes/User.php';
require_once __DIR__.'/Classes/Product.php';
require_once __DIR__.'/Classes/Registered.php';


//Lista prodotti

$products = [
    [
        'type' => 'Crocchette per Gatti',
        'price' => 5,
        'description' => 'Crocchette per gatti ricche di proteine!',
    ],
    [
        'type' => 'Tiragraffi per gatti',
        'price' => 50,
        'description' => 'I gatti hanno bisogno di affilare gli artigli! La miglior soluzione è scegliere per il tuo piccolo felino il giusto tiragraffi, su cui potrà sfogare il suo istinto, allungando la vita ai tuoi arredi!',
    ],
    [
        'type' => 'Doppia Ciotola',
        'price' => 10,
        'description' => 'Doppia ciotola dotata di supporto metallico rialzato, con piedini in gomma, in ceramica lavabili in lavastoviglie.',
    ],
    [
        'type' => 'Lettiera Agglomerante',
        'price' => 25,
        'description' => 'Lettiera agglomerante Classic a base di granulato naturale, assorbe in fretta ed è poco polverosa.',
    ],
];

//Utenti

$user1 = new User('Matteo', 'Rossi', 'mrossi@outlook.com', 12345678, '12/2028');
$user2 = new User('John', 'Wick', 'johnwick@outlook.com', 12345678, '12/2028');

//Utenti registrati

$registeredUser1 = new Registered('Flavia', 'Bianchi', 'fbianchi@gmail.com', 12345678, '12/2028');
$registeredUser2 = new Registered('Denzel', 'Washington', 'dwashington@gmail.com', 12345678, '12/2028');

var_dump($user1);
var_dump($registeredUser2); 

//
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Pet Shop Online</title>
</head>
<body>
    <header class="text-center">
        <h1>Pet Shop Online</h1>
    </header>

    <main>
<h1>Prodotti per animali:</h1>


<?php foreach ($products as $key => $value) {

$product = new Product($value['type'], $value['price'], $value['description']);

echo '<div>
<h2>' .$product->getType().'</h2>
<h5>Prezzo: '.$product->getPrice().'</h5>
<h5>Descrizione: '.$product->getDescription().'</h5>
</div>';

}
?>



    </main>
</body>
</html> 