<?php 
session_start();
if(isset($_POST["submit-signin"])){
    $email = $_POST["mail"];
    $pass = $_POST["pass"];
    if( !empty($email) || !empty($pass)){
        if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
            header("location:index.php?mssg=Enter valid email address");
        }else{
            if(strlen($pass)<6){
                header("location:index.php?mssg=Password should be greater than 6 characters");
            }else{ 
                
                    $con = mysqli_connect('localhost','root','','athlete');
                    $s = " select * from signin where email ='$email'";
                    $result = mysqli_query($con, $s);               
                    $num = mysqli_num_rows($result);
                    if($num == 1){
                        header("location:index.php?mssg=email already registered");
                        $_SESSION["email"]= $email;
                    }else{
                        $reg = "insert into signin(email,password) values('$email','$pass')";
                        $result = mysqli_query($con,$reg);
                        if($result){
                            
                            $_SESSION["email"]= $email;
                            header("location:homepage.php?mssg=welcome");
                            
                        }
                        else{echo('error');
                        }
                    }  
                    mysqli_close($con);
                                
                
            }
        }    
    }else{
        
        header("location:index.php?mssg=All fields are required");
    }
}else{
    header("location:index.php");
}
?>