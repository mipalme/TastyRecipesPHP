<!DOCTYPE html>
<?php
include_once "includes/header.php";
session_start();
?>
<html>
    <head>         
        <title>index</title>    
    </head>
    <body>
        <?php
        if ($_GET['login'] == 'success') {
            ?>
            <div class="notification">
                <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span> 
                Login successful!
            </div>
        <?php }


        if ($_GET['login'] == 'error') {
            ?>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span> 
            Error
        </div>
        <?php } ?>
        <p class="heavytext"> <a href ="calendar.php"> Calendar </a> <br/> <br/>
            Welcome to Tasty Recipes, where we have 2 very nice recipes!! <br/> <br/>
            We have <a href ="meatballs_recipe.php"> meatballs </a> <br>
            And also <a href ="pancakes_recipe.php"> pancakes </a> <br/>                 
        </p>           
    </body>
</html>
