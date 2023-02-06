<?php
$word = $_GET['word'];
$phrase = $_GET['phrase'];

$phrase_trim = trim($phrase);
$phrase_length = strlen($phrase_trim);

$phrase_censured = str_replace($word , '***', $phrase);

$phrase_censured_trim = trim($phrase_censured);
$phrase_censured_length = strlen($phrase_censured_trim);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP-CENSURED</title>
</head>
<body>
    <div class="container text-center py-5 my-5">
        <h2 class="text-danger py-3">Frase Originale</h2>
        <h4><?= $phrase ?> </h4>
        <h6 class="text-secondary">la lunghezza della frase originale è di <?= $phrase_length ?> caratteri</h6>
        <hr>
        <h2 class="text-danger py-3">Frase Censurata</h2>
        <h4><?= $phrase_censured ?> </h4>
        <h6 class="text-secondary">la lunghezza della frase censurata è di <?= $phrase_censured_length ?> caratteri</h6>
    </div>
</body>
</html>