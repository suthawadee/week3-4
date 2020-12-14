<?php
    echo "1.Condition Assignment Operators<br>";
    $status =(empty($user)) ? "anontmous" : "logged in";
    echo $status."<br>";

    $user = "Mark";
    $status =(empty($user)) ? "anonymous" : "logged in";
    echo $status."<br>";
?>

<?php
    echo "2.Null coalescing Assignment Operatoes<br>";
    $user =$_GET["user"]??:"anonymous";
    echo $user."<br>";

    $color = $color ?? "red";
    echo $color;
?>

