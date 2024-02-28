<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loop.php" method="post">
        <label>Enter a number to count down from: </label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>

    <form action="loop.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php

    $couter = $_POST["counter"];
    for($i = 0, $i > 0, $i--){
        echo $i . "<br>";
    }

    $seconds = 0;
    $running = true;

    while($running){

        if(isset($_POST["stop"])){
            $running = false;
        }
        else{
            $seconds++;
            echo $seconds . "<br>";
        }
    }
?>