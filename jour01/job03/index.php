<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>
    <?php
            $vrai = true; // variable booléen vrai (ne pas entourer par des guillement ou apostrophe)
            $faux = false; // variable booléen faux
            $val= 4;

            $str = ""; // Chaîne de caractères = string
            $val1 = 8; // Stocke le nombre 24
            $val2 = "8"; // Stocke la chaine de caractères "24"

            $str2 = "Je m'appelle Pierre"; // integer et float
            $val3 = 24; // Stocke le nombre 24
            $val4 = "24"; // Stocke la chaine de caractères "24"
            $float = 2.24; // float = chiffre a virgule            
    ?>
<header>
    <table border="10">
            <tr>
                <th>type</th>
                <th>nom</th>
                <th>valeur</th>
            </tr>
</header>
            <tr>
                <th>booléen</th>
                <th>$vrai/$faux</th>
                <th>4</th>
            </tr>
            <br>
            <tr>
                <th>string</th>
                <th>$str</th>
                <th>8</th>
            </tr>
            <br>
            <tr>
                <th>integer</th>
                <th>$str2</th>
                <th>24</th>
            </tr>
            <br>
            <tr>
                <th>float</th>
                <th>$float</th>
                <th>2.24</th>
            </tr>
</table>
<footer></footer>
</body>
</html>

