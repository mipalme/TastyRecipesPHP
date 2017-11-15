<p class = "heavytext" >Comments</p>

<?php
include "dbh.php";
$recipe = $_SESSION['recipe'];
?><input type="hidden" name="recipe" value=<?php echo $recipe ?> /><?php

 //Loop through all the comments and post them in the order of their ID.       
$sql = "SELECT comment_postID, comment_author, comment_content FROM comment WHERE comment_recipe = '$recipe'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        ?> <p class="breadtext">
            <?php echo $row["comment_author"] . ": " . $row["comment_content"]; ?>
        <form method="post" action="includes/handleComment.php">
            <button type="submit" name="delete" value=<?php echo $row["comment_postID"] ?>>
                Delete comment
            </button>
        </form>
        </p>
        <?php
    }
} else {
    echo "There are no comments for this recipe yet";
}

//Submitting comments
if (isset($_SESSION['u_id'])) {
    ?>
    <h2>Leave a comment:</h2>
    <form method="post" action="includes/handleComment.php">  
        <textarea name="comment" placeholder="Your comment" required></textarea>      
        <input type="submit" name="submit" />
    </form>
<?php } else { ?>
    <h2>Log in to leave a comment</h2>
<?php } ?>


