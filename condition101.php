<?php   
    echo "1.The if Statement<br>";
    $t = date("H");
    echo $t."<br>";
    if($t < "20"){
        echo "Have a good day!";
    }
?>
<?php
    echo "<br>2.The if else Statement<br>";
    $t = date("H");
    echo $t."<br>";
    if($t < "20"){
        echo "Have a good day!";
    }
    else if(){
        echo "Have a good day!";
    }
    else{
        echo "Have a good night!";
    }
?>

<?php
    echo "<br>3..The if elseif Statement<br>";
    $t = date("H");
    echo $t."<br>";
    if($t < "20"){
        echo "Have a good day!";
    }
    else if(){
        echo "Have a good day!";
    }
    else{
        echo "Have a good night!";
    }
?>
<?php
    echo "<br>4.The Switch Statement<br>";
    $favcolor = "red";
    switch($favcolor){
        case"red":
            echo"Your favorite color is $favcolor";
        break;
        case "blue";
            echo"Your Your favorite color is $favcolor";
        break;
        default:
        echo"Your Favorite color is ??";
    }
?>