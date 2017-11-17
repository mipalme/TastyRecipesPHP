<?php
include_once "includes/header.php";
include_once "XML/simpleXML.php";
$_SESSION['recipe'] = 'meatballs_recipe';
$cookbook = $xmlstr;
$recipeNumber = 0;
?>
<!DOCTYPE html>
<html>
    <head>         
        <title>meatballs_recipe</title>    
    </head>
    <body>        
        <p class="heavytext"> <a href ="calendar.php"> To the calendar! </a> <br/> <br/>
            <?php echo $cookbook->recipe[$recipeNumber]->title; ?> <br/>
            <img class= "image" src ="<?php echo $cookbook->recipe[$recipeNumber]->imagepath; ?>"
                 alt = "<?php echo $cookbook->recipe[$recipeNumber]->title; ?>"/> <br/>         
        </p>
        <h2 class="title"> The recipe (<?php echo $cookbook->recipe[$recipeNumber]->quantity; ?>): </h2>
        <ul class="list">
            <?php foreach ($cookbook->recipe[$recipeNumber]->ingredient->li as $li) {
                echo "<li>$li</li>";            
            }
            ?>
        </ul>
        <ul class="breadtext">
            <?php foreach ($cookbook->recipe[$recipeNumber]->description->li as $li) {
                echo "<li>$li</li>";            
            }
            ?>
        </ul> 
        <p> <a href ="pancakes_recipe.php"> Check out our pancakes recipe! </a> <br/> <br/>
            <?php
            include_once "includes/comments.php";
            ?>
    </body>
</html>
