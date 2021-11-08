<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
<?php
$coucou = "Hello LaPlateforme";
$couleur = "black";
function hello($coucou, $couleur) 
{
print ("<font color=\"$couleur\"> $coucou</font>");
}

hello($coucou, $couleur='black')
?>
    
</body>
</html>
