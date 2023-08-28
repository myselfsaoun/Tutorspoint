<?php
include("./database.php");
session_start();

$title = $_POST['title'];
$body = $_POST['body'];
$email = $_SESSION['email'];

mysqli_query($conn, "insert into posts(email, title, body) values('$email', '$title', '$body')");

header('location: /website/html/index.php');