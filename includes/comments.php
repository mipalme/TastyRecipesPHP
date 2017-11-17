<p class = "heavytext" >Comments</p>
<?php
        if ($_GET['comment'] == 'deleted') {
            ?>
            <div class="notification">
                <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span> 
                Comment deleted!
            </div>
        <?php } 

        if ($_GET['comment'] == 'noAuthority') {
            ?>
            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span> 
                You can't delete that comment
            </div>
        <?php } ?>

<?php
include "dbh.php";
$recipe = $_SESSION['recipe'];
//Loop through all the comments and post them in the order of their ID.       
$sql = "SELECT comment_postID, comment_author, comment_content FROM comment WHERE comment_recipe = '$recipe'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>        
        <form method="post" action="includes/handleComment.php">
            <p class="breadtext">
                <?php echo $row["comment_author"] . ": " . $row["comment_content"]; ?>
                <?php if($_SESSION['u_uname'] == $row["comment_author"]){ ?>
                <button type="submit" class="deleteButton" name="delete" value=<?php echo $row["comment_postID"] ?>>
                    Delete comment
                </button>
                <?php } ?>
            </p>
        </form>   
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
        <textarea name="comment" placeholder="Your comment" maxLength="256" required></textarea>      
        <button type="submit" class="submitButton" name="submit">Submit</button>
    </form>
<?php } else { ?>
    <h2>Log in to leave a comment</h2>
<?php } ?>


