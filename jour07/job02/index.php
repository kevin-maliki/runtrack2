<?php

if (isset($_COOKIE))
{
    setcookie("nbvisites", $_COOKIE["nbvisites"] +1);
}
else if (isset($_COOKIE["reset"]))
{
    setcookie("nbvisites");
}

echo $_COOKIE["nbvisites"]



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
</head>

<body>
<form action = "" method="post">
<input type="submit" value="reset" name="reset" />

</body>
</html>