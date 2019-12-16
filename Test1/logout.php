<?php
    session_start();
    session_destroy();
    if(isset($_COOKIE['user']) && isset($_COOKIE['pass'])){
        setcookie('user',$_COOKIE['user'],time()-1);
        setcookie('pass',$_COOKIE['pass'],time()-1);
    }
    echo "You have successfully logged out";
    header("location: login.php")
?>

