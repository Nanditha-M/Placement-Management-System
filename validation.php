<?php

session_start();

$con = mysqli_connect('localhost','root','vaishabhi@99','userregistration');



$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location:select.php');
}
else{
    header('location:login.php');
 
}

?>