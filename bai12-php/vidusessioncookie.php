<?php
//1. Session
session_start(); //Bắt đầu session
$_SESSION['Name'] = "user";

echo "Session Name: " . $_SESSION['Name'] . "<br>";

//2. Cookie
$cookieName = "user";
$cookieValue = "Duong"; 

setcookie($cookieName, $cookieValue, time() + 86400, "/");
if(isset($_COOKIE[$cookieName])) {
    echo "cookie đã tồn tại";
} else{
    echo "cookie chưa được thiết lập!";
}
?>