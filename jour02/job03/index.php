<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>42</title>
</head>
<body>
        <?php
        $x = 0;

        while($x <= 100)
        {
            if ($x <= 20)
            {
            echo '<i>'.$x.'</i><br/>';
            }
            else if ($x >= 20 && $x <= 24 )
            {
            echo $x.'<br/>';
            }
            else if ($x == 42)
            {
            echo 'La plateforme<br/>';
            }   
            else if ($x >= 25 && $x <= 50 )
            {
            echo '<u>'.$x.'</u><br/>';
            }
            else {
            echo $x.'<br/>';
            }
            $x++;
        }
    ?>
</body>
</html>