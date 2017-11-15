<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>    
        <link rel="stylesheet" href="CSS/browserreset.css">
        <link rel="stylesheet" href="CSS/CSS.css">
        <link rel="stylesheet" href="CSS/enteraccountinfo.css">
        <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
        <title>registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1 class="logo"> Tasty Recipes! </h1>
        <h2 class="home"> <a href ="index.php"> Home </a> </h2>
        <p class="heavytext"> Register below </p>
        <div class="container">
            <form action="includes/signup.php" method="POST">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pwd" required>
                     
                <button type="submit" name="submit">Register!</button>   
            </form>
        </div>
        
    </body>
</html>
