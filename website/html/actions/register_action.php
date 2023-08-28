<?php

use function PHPSTORM_META\type;

extract($_POST);
include("database.php");

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$type = $_POST['type'];

$table = "";
if($type == "tutor"){
    $table = "tutors";
}elseif($type == "gurdian"){
    $table = "gurdians";
}

echo ("registering");
$sql=mysqli_query($conn,"SELECT * FROM $table where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else{

    $query="INSERT INTO $table(name, email, pass) VALUES ('$name', '$email', '$pass')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
    header("Location: /website/html/login.php");
}

?>