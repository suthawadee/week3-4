<?php
    echo "<br>And Operators<br>";
    $x = 100;
    $y = 50;
    if($x == 100 and $y == 50){
        echo "True";
    }
?>
<?php
    echo "<br>And Operators<br>";
    $x = 100;
    $y = 50;
    if($x == 100 && $y == 50){
        echo "true";
    }
?>
<?php
    echo "<br>And Operators<br>";
    $x = 100;
    $y = 50;
    if($x == 100 && $y != 50){
        echo "true";
    }
    else{
        echo "False";
    }
?>
<?php
    echo "<br>Or Opertors<br>";
    $x = 100;
    $y = 50;
    if($x == 100 or $y == 50){
        echo "True";
    }
?>
<?php
    echo "<br>Or Opertors<br>";
    $x = 100;
    $y = 50;
    if($x == 100 or $y == 50){
        echo "True";
    }
?>
<?php
    echo "<br>Not Operators<br>";
    $x = 100;
    if($x !== 90){
        echo "True";
    }
?>
<?php
    echo "<br>Not Operators<br>";
    $x = 100;
    if($x !==100){
        echo"True";
    }
    else{
        echo "False";
    }
?>