<?php
session_start();
require_once("connect.php");

$username = $_POST["username"];
$pass = $_POST["password"];

$sql = "SELECT * FROM users WHERE login='$username' AND password='$pass'";

$result = mysqli_query($conn, $sql);

if(!mysqli_num_rows($result)){
    $_SESSION["msg"] = "Nieprawidłowe dane";
    header("Location: index.php");
}else{
    $_SESSION["username"] = mysqli_fetch_array($result)["nickname"];
    header("Location: s_blog-article.php");
}
?>