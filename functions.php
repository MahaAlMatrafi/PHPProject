<?php


    function add($x, $y){
        return $x + $y;

    }

    echo add(5, 10);
    echo "<br>";

 function hello($x){
    $user = $x;

    if($user=== "Maha"){
        echo "Hello ". $user;
    }else{
        echo "Bye " . $user;
    }

 }

 hello("Maha");
 echo "<br>";
 hello("Maha");

?>