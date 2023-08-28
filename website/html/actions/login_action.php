<?php
include("./database.php");
session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];
$type = $_POST['type'];

$table = "";
if($type == "tutor"){
    $table = "tutors";
}elseif($type == "gurdian"){
    $table = "gurdians";
}

$result = mysqli_query($conn, "select * from $table where email='$email' and pass='$pass'");

if(mysqli_num_rows($result) > 0){
    $_SESSION["email"] = $email;
    $_SESSION["type"] = $type;
    header('location: /website/html/index.php');
}else{
    ?>
    <script>
        alert("Login faild");
        window.location.href = "/website/html/login.php"
    </script>

    <?php
}