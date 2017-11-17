<?php   
    session_start();
?>
<html>
    <head> 
        <link rel="stylesheet" href="CSS/browserreset.css">
        <link rel="stylesheet" href="CSS/CSS.css">
        <link rel="stylesheet" href="CSS/enterInfo.css">
        <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
        <title>header</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php  if (isset($_SESSION['u_id'])) { ?>   
         <p class ="loginOrRegister"> <a href ="includes/logout.php"> Log out </a> </p>
         <p class ="loginOrRegister"> Logged in as: <?php echo $_SESSION['u_uname'] ?> </p>
        <?php } elseif (!isset($_SESSION['u_id'])) { ?>
         <p class ="loginOrRegister"> <a href ="login.php"> Log in </a> </p>
         <p class ="loginOrRegister"> <a href ="registration.php"> Register here </a> </p>
        <?php } ?>     
         <h1 class="logo"> Tasty Recipes! </h1>
         <h2 class="home"> <a href ="index.php"> Home </a> </h2>
    </body>
</html>