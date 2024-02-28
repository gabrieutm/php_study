<?php
    $temp = 25;
    $cloudy = false;

    #and
    if($temp >= 15 && $temp <= 30){
        echo"The weather is good!";
    }
    #or
    elseif($temp < 15 || $temp > 30){
        echo"The weather is bad";
    }
    elseif(!$cloudy){
        echo"It's sunny";
    }
    else{
        echo"The weather is bad";
    }
?>