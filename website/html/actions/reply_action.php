<?php
include("./database.php");
session_start();

$post = $_POST['post'];
$reply = $_POST['reply'];
$email = $_SESSION['email'];

echo $post;
echo $reply;
echo $email;

mysqli_query($conn, "insert into replies (post, reply, email) values($post, '$reply', '$email')");

header('location: /website/html/index.php');