<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['password'];

if(empty(trim($user)) && empty(trim($pass))){
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;
    $_SESSION['err_messg'] = "Inserte los datos";
    header("Location: index.php");
}else{
    $_SESSION['usernamee'] = $user;
    $_SESSION['passwordd'] = $pass;
    header("Location: home.php");
}
 

?>