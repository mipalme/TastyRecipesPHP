<?php   
    if (isset($_POST['submit'])) {
       
       include_once 'dbh.php';
        
       $uname = filter_input(INPUT_POST,'uname');
       $pwd = filter_input(INPUT_POST,'pwd');
           
        
        //Check if input is valid
        
            if(!preg_match("/^[a-zA-Z]*$/", $uname) || !preg_match("/^[a-zA-Z]*$/", $pwd)){
        
            header("Location: ../registration.php?registration=invalid");
            exit();
            }                       
            //Insert user into database
            else {
                $sql = "INSERT INTO users (user_uname,user_pwd) VALUES ('$uname','$pwd')";
                $result = mysqli_query($conn,$sql);             
                if($result == true){                 
                header("Location: ../registration.php?registration=success");
                exit();
                }
                else{
                    echo "Error: " . $sql . "<br>" . $conn->error; 
                }
            }
        }              
     
    else {
        header("Location: ../registration.php");
        exit();
    }

