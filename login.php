<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>    
        <link rel="stylesheet" href="CSS/browserreset.css">
        <link rel="stylesheet" href="CSS/CSS.css">
        <link rel="stylesheet" href="CSS/enterInfo.css">
        <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
        <title>login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>     
        <h1 class="logo"> Tasty Recipes! </h1>
        <h2 class="home"> <a href ="index.php"> Home </a> </h2>
        <p class="heavytext"> Log in below </p>
        
        <?php
        if ($_GET['login'] == 'invalidUser') {
            ?>
            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span> 
                Invalid username
            </div>
            <?php }
            
            
            if ($_GET['login'] == 'WrongPassword') { ?>
            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span> 
                Wrong password
            </div>
        <?php } ?>
            
        <div class="container">
            <form method="post" action="includes/login_inc.php">  
                <label><b>Username</b></label>


                <input type="text" placeholder="Enter Username" name="uname" required>



                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pwd" required>   



                <button class ="logOrReg" type="submit" name="submit">Login!</button>  
            </form>
        </div>

    </body>
</html>
