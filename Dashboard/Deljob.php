<?php

    require('Connection.php');
    include('valide.php');

    $id=$_REQUEST['id'];
    $sql="DELETE FROM `jobs` WHERE `ID` = '$id'";
    $result= mysqli_query($dbc,$sql);
    if($result)
    {
        echo "<script>alert('Delete Job Seccessfully');</script>";
        header("location:jobstable.php");
    }
?>