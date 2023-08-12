<?php
$con=mysqli_connect('localhost','root','','mystore');
if(!$con){
    die(mysql_error($con));
}
?>

<!--     skip-grant-tables = TRUE
} -->