<?php
session_start();
$con = mysqli_connect ("localhost",'root','','athlete');
    $change=$_SESSION['email'];
if (isset($_POST['profilesub'])){

    // $name = $_POST['edit-name'];
    $email = $_POST['edit-email'];
    $password = $_POST['edit-pass'];

    $sql="UPDATE signin SET email = '$email' , password = '$password' WHERE email = '".$change."'";
    $result = mysqli_query($con,$sql);
    if($result){
        header( 'Location: homepage.php?update=your information has been updated' ) ;

    }else{echo('couldnt update');
    }
}else{
    echo 'isset error';
}


if (isset($_POST['delete'])){

    $sql = "DELETE FROM signin WHERE email = '".$change."'";
    $result = mysqli_query($con,$sql);
    if($result){
        header( 'Location: index.php?update=account has been deleted' ) ;

    }else{echo('couldnt delete');
    }
}else{
    echo 'isset error';
}





?>
