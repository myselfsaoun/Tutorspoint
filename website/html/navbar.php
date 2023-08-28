<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/student.css" />
</head>

<?php
    session_start();
    $type = isset($_SESSION['type']) && $_SESSION['type'];
?>

<body>
    <div class="wrapper">
        <nav class="navi">
            <a href="Index.php"><img class="img" src="../image/logo1.png" alt="logo"></a>
            <ul>

                <li><a class="index" href="Index.php">Home</a></li>
                <li><a class="job" href="account.php">Account</a></li>
                <?php if($type == 'gurdian'){ ?>
                    <li><a class="job" href="replies.php">Replies</a></li>
                    <li><a class="job" href="create-post.php">Create Post</a></li>
                <?php } ?>
                <li><a class="services" href="services.php">services</a></li>
                <li><a class="about" href="about.php">about</a></li>
                <li><a class="contact" href="contact.php">contact</a></li>
                <li><a class="feedback" href="feedback.php">Privacy & Policy</a></li>
                <?php if(isset($_SESSION['email'])){ ?>
                    <li><a class="feedback" href="actions/logout.php">Logout</a></li>
                <?php } ?>
            </ul>
        </nav>