<?php

session_start();
if (isset($_POST["reset"]))
{
    $_SESSION["nbvisites"]= 0;
}
else if (isset($_SESSION["nbvisites"]))
{
$_SESSION["nbvisites"]= $_SESSION["nbvisites"] +1;
}
echo $_SESSION["nbvisites"]



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>

<body>
<form action = "" method="post">
<input type="submit" value="reset" name="reset" />

</body>
</html>