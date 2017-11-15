<p class ="heavytext"> Comments </p>
<p class="breadtext"> Glen: Mycket äckliga köttbullar! <br/> </p>
<p class="breadtext"> Alice: värsta jag någonsin ätit <br/> </p>
<p class="breadtext"> Viktor: Usch! 0/10 <br/> </p>

<h1 class = "heavytext" >Comments</h1>
<?php
$result = mysql_query("SELECT * FROM comments WHERE postid=0");
//0 should be the current post's id
while($row = mysql_fetch_object($result))
{
?>
<div class="comment">
By: <?php echo $row->author; //Or similar in your table ?>
<p>
<?php echo $row->body; ?>
</p>
</div>
<?php
}
?>
<h1>Leave a comment:</h1>
<form action="insertcomment.php" method="post">
<!-- Here the shit they must fill out -->
<input type="hidden" name="postid" value="<?php //your posts id ?>" />
<input type="submit" />
</form>
    
