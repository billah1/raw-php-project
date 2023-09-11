<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">logo</a>
        <ul class="navbar-nav mx-auto">
            <?php if (isset($_SESSION['id'])) { ?>
            <li class="nav-item"><a href="route.php?page=home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="route.php?page=full-name-page" class="nav-link">Full Name</a></li>
            <li class="nav-item"><a href="route.php?page=calculator-form" class="nav-link">Calculator</a></li>
            <li class="nav-item"><a href="route.php?page=series-form" class="nav-link">Series</a></li>
            <li class="nav-item"><a href="route.php?page=student-info-form" class="nav-link">Student</a></li>
            <li class="nav-item"><a href="route.php?page=OddEvenSeries-info-form" class="nav-link">OddEvenSeries</a></li>
            <li class="nav-item"><a href="route.php?page=prime-info-form" class="nav-link">Prime</a></li>
            <li class="nav-item"><a href="route.php?page=temperature-info-form" class="nav-link">Temperature</a></li>
            <li class="nav-item"><a href="route.php?page=logout" class="nav-link">Logout</a></li>


            <?php } ?>

        </ul>
    </div>
</nav>