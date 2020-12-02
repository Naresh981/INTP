<?php

    $con=mysqli_connect('localhost','root','','athlete');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>