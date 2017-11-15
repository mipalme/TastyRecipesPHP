<?php   
    session_start();
    
    if (isset($_POST['submit'])) {
        
        include 'dbh.php';
        
        
        $uname = filter_input(INPUT_POST,'uname');
        $pwd = filter_input(INPUT_POST,'pwd');
             
           
            $sql = "SELECT * FROM users WHERE user_uname='$uname'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck < 1){              
                header("Location: ../login.php?login=invalidUser");
                exit();
            }
            else {
                if ($row = mysqli_fetch_assoc($result)) {                  
                    if ($row['user_pwd'] != $pwd){                       
                        header("Location: ../login.php?login=WrongPassword");
                        exit();
                    } 
                    elseif ($row['user_pwd'] == $pwd){                     
                        //Log in the user
                        $_SESSION['u_id'] = $row['user_id'];
                        $_SESSION['u_uname'] = $row['user_uname'];
                        header("Location: ../index.php?login=success");                      
                        exit();
                    }
                }
            }        
        }
    
    else {
        header("Location: ../index.php?login=error");
        exit();
    }
      