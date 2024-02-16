<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
</head>
<body>
    
    <!--<form action="index2.php" method="get">
        <label>username: </label><br>
        <input type="text" name="username"><br>
        <label>password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>-->

    <form action="index2.php" method="post">
        <label>username: </label><br>
        <input type="text" name="username"><br>
        <label>password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>

</body>
</html>

<?php
    /*echo "{$_GET["username"]} <br>";
    echo "{$_GET["password"]} <br>";*/
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?>