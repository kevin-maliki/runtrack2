<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
</head>
<body>
<?php

$jour = true;
function bonjour($jour)
{

        if ($jour === true){
        echo "<p>bonjour</p>";
        }
        else if ($jour === false){
        echo "<p>bonsoir</p>";
        }
           
}
bonjour($jour);
bonjour($jour);
bonjour($jour);
?> 
</body>
</html>