
<?php 
require_once('connection.php');
session_start();
$email = $_POST["login-mail"];
$pass = $_POST["login-pass"];

    if(isset($_POST['login-php']))
    {
       if(empty($_POST['login-mail']) || empty($_POST['login-pass']))
       {
            header("location:index.php?Empty= please input details");
       }
       else
       {
           if($email === 'admin@gmail.com' || $pass === 'admin'){
                header("location:admin.php?");
            }else{
                $query="select * from signin where email='".$_POST['login-mail']."' and password='".$_POST['login-pass']."'";
                $result=mysqli_query($con,$query);

                if(mysqli_fetch_assoc($result))
                {
                    $_SESSION['email']=$_POST['login-mail'];
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)){
                        $_SESSION["id"] = $row['ID']; 
                        }  
                    }header("location:homepage.php");
                }
                else
                {
                    header("location:index.php?Invalid= Please Enter Correct details ");
                }
            }
        }
    }
    else
    {
        header("location:index.php");
    }

?>