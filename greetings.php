<?php 
    $parola = $_GET["parola"]; #Salva la parola da censurare
    $testo = $_GET["testo"]; #Salva il testo
    $testo_censurato = str_replace($parola, 'Censored' , $testo); #Rimpiazzamento parola censurata
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <h1>Parola inviata: </h1>
    <h3>Parola da censurare: <?php echo $parola?> </h3> 
    <p> <div>Il testo è lungo <?php echo strlen($testo) ?> caratteri: </div>
         <?php echo $testo ?>
    </p>
    <br>
    <h1>Testo Censurato:</h1>
    <br>
    <p>
        <div>Il testo è lungo <?php echo strlen($testo_censurato) ?></div>
        <?php echo $testo_censurato ?>
    </p>
</body>
</html>