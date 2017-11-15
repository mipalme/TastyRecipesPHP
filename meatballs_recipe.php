<!DOCTYPE html>
<?php
include_once "includes/header.php";
session_start();
$_SESSION['recipe'] = 'meatballs_recipe';
?>
<html>
    <head>         
        <title>meatballs_recipe</title>    
    </head>
    <body>        
        <p class="heavytext"> <a href ="calendar.php"> To the calendar! </a> <br/> <br/>
            Meatballs (of the Swedish variety)! <br/>
            <img class= "image" src ="images/meatballs.jpg"
                 alt = "Picture of cool meatballs"/> <br/>         
        </p>
        <h2 class="title"> The recipe (1 portion): </h2>
        <ul class="list">
            <li>7 meatballs</li>
            <li>Some pasta or rice or potatoes (optional!)</li>
            <li>Ketchup or gravy or jam (depending on preference)</li>
        </ul>
        <p class="breadtext">
            Take the meatballs out of the packaging. Now, cook them on medium to high heat for ten minutes. <br/>
            Cook some side dish if you want (but no vegetables!!!). <br/>
            Serve with ketchup or gravy or jam, and enjoy.
        </p> 
        <p> <a href ="pancakes_recipe.php"> Check out our pancakes recipe! </a> <br/> <br/>
            <?php
            include_once "includes/comments.php";         
            ?>
    </body>
</html>
