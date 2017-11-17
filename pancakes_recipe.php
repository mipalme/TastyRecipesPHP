<?php
include_once "includes/header.php";
$_SESSION['recipe'] = 'pancakes_recipe';
?>
<!DOCTYPE html>
<html>
    <head>         
        <title>pancakes_recipe</title>    
    </head>
    <body>          
        <p class="heavytext"> <a href ="calendar.php"> To the calendar! </a> <br/> <br/>
            Pancakes (of the Swedish variety)! <br/>
            <img class = "image" src ="images/pancakes.jpg"
                 alt = "Picture of cool pancakes"/> <br/>         
        </p>
        <h2 class="title"> The recipe (2 portions): </h2>
        <ul class="list">
            <li>4 eggs</li>
            <li>6 dl milk</li>
            <li>3 dl flour</li>
            <li>Some jam or other topping that you like</li>
        </ul>
        <p class="breadtext">
            Crack the eggs in a bowl, and mix in the milk and flour. Stir until it is well mixed. <br/>
            Pour some batter in a frying pan and flip it when the first side is done. When second side is done, the pancake is done! <br/>
            Repeat until batter is depleted. Now serve with some jam or fruit or chocolate or whatever.
        </p> 
        <p> <a href ="meatballs_recipe.php"> Check out our meatballs recipe! </a> <br/> <br/>
            <?php
            include_once "includes/comments.php";
            ?>
    </body>
</html>
