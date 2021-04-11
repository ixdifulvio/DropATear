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


<?php
function setComments($conn){
    if (isset($_POST['commentSubmit'])){
        $post_date = $_POST['post_date'];
        $user_nickname = $_POST['user_nickname']; 
        $cry_date = $_POST['cry_date'];
        $cry_comment = $_POST['cry_comment'];
        $cry_rating = $_POST['cry_rating'];
        $cry_loc = $_POST['cry_loc'];

        $sql = "INSERT INTO cryingposts (post_date, user_nickname, cry_date, cry_loc, cry_comment, cry_rating) 
        VALUES ('$post_date', '$user_nickname', '$cry_date', '$cry_loc', '$cry_comment', '$cry_rating')"; 
        $result = $conn->query($sql); 
    }
}


function getComments($conn){
    $sql = "SELECT * FROM cryingposts"; 
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        echo "<div><p>"; 
        echo $row['post_date']."<br>";
        echo $row['user_nickname']."<br>";
        echo $row['cry_date']."<br>"; 
        echo $row['cry_loc']."<br>"; 
        echo $row['cry_rating']."<br>"; 
        echo nl2br($row['cry_comment']."<br><br>");
        echo "</p></div>"; 
    }

}


