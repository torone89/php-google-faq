<?php
// ARRAY ASSOCIATIVO
$faqs = [
    [
        'domanda' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
        'risposta' => 'Michele Papagni',

    ],
    [
        'domanda' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
        'risposta' => 'Michele Papagni',
    ]
]
?>
<!DOCTYPE html>
<html lang=“en”>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-google-faq</title>
    <!-- IMPORT BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<main>

    <body>
        <main>
            <div class="container text-center my-5">


                <!-- Il costrutto dopo la parola chiave foreach include all'interno delle parentesi tonde tre elementi:
array da ciclare
la parola chiave as
la variabile che contiene il valore dell'indice corrente -->
                <?php foreach ($faqs as $value) : ?>
                    <h3 class="text-danger"><?= $value['domanda'] ?></h3>
                    <p><?= $value['risposta'] ?></p>


                <?php endforeach; ?>


            </div>

</html>
</main