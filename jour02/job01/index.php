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

        while($x <= 1337){
            echo $x. '<br>';
            $x++;
            if ($x == 42)
                echo '<b><u>' .$x. '</b></u><br/>';
        
        }
    ?>
</body>
</html>