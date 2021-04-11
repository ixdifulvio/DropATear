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

<main>
    <section class="site-title">
        <div class="site-background">
            <h1>Drop a Tear</h1>
            <h3>Fill out the form to share with the community</h2>
        </div>
    </section>
</main>


<body>
    <center>
    <nav class="nav">
    </nav>
    <?php
    echo 
    "<form method='POST' action='".setComments($conn)."'> 
        <input type='hidden' name='post_date' value='".date('Y-m-d H:i:s')."'>

        <label for='user_nickname'>Nickname: </label>
        <input type='text' id='user_nickname' name='user_nickname'><br><br>

        <label for='cry_date'>Date of the Cry: </label>
        <input type='date' id='cry_date' name='cry_date'><br><br>

        <label for='cry_loc'>Location of the Cry: </label>
        <input type='text' id='cry_loc' name='cry_loc'><br><br>

        <label for='cry_comment'>Comment: </label> 
        <textarea id= 'cry_comment' name = 'cry_comment'></textarea><br><br>

        <label for='cry_rating'>Rate your Cry: </label>
        <input type='number' id='cry_rating' name='cry_rating'><br><br>
        
        <button class='btn' type='submit' name='commentSubmit'>Submit</button>
    </form>";
    ?>

    <form action="index.html" method="POST">
        <button class="btn" type='submit' name="index_but">Return to Home</button>
    </form>

    <form action="posts.php" method="POST">
        <button class="btn" type='submit' name="see_posts">See All Tears</button>
    </form>
    </center>

</body>