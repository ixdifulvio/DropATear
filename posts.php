<?php
    date_default_timezone_set('America/New_York'); 
    include 'dbh.inc.php';
    include 'comments.inc.php';
     
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Places I've Cried at W&M</title>

    <!-- Font Awesome Icons-->
    <link rel="stylesheet" href="all.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="Style.css">
    
</head>

<center>
<h1>Community Responses</h1>
</center>

<body>
    <nav class="nav">
    </nav>
    <?php  
    getComments($conn); 
    ?>

    <form action="index.html" method="POST">
        <button class="btn" type='submit' name="index_but">Return to Home</button>
    </form>

    <form action="create_post.php" method="POST">
        <button class="btn" type='submit' name="shed_tear">Drop a Tear</button>
    </form>
</body>
