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
    $x = array (200, 204, 173, 98, 171, 404, 459);
    $y = 0;

    while (isset($x[$y]) == true)
    {

        if ($x[$y]%2 == 0)
        {
            echo "$x[$y] est paire<br/>";
        }
        else
        {
            echo "$x[$y] est impaire<br/>";
        }
        $y++;
    }

?>
</body>
</html>