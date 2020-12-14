<?php
    echo"1.Union Array Operators<br>";
    $x = array("a" => "red", "b"=> "green");
    $x = array("c" => "blue", "d"=> "yellow");
    print_r($x + $y);

?>
<?php
    echo"2.Equality Array Operators<br>";
    $x = array("a" => "red", "b"=> "green");
    $x = array("c" => "blue", "d"=> "yellow");
    var_dump($x == $y)
?>
<?php
    echo"3.Identity Array Operators<br>";
    $x = array("a" => "red", "b"=> "green");
    $x = array("c" => "blue", "d"=> "yellow");
    var_dump($x === $y)
?>
<?php
    echo"4.Inequality Array Operators<br>";
    $x = array("a" => "red", "b"=> "green");
    $x = array("c" => "blue", "d"=> "yellow");
    var_dump($x != $y)
?>
<?php
    echo"5.Inequality Array Operators<br>";
    $x = array("a" => "red", "b"=> "green");
    $x = array("c" => "blue", "d"=> "yellow");
    var_dump($x <> $y)
?>