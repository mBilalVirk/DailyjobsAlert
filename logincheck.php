<?php
require("Connection.php");

if (isset($_POST['submit'])) {
    $login = false;
    $id = $_POST['id'];
    $password =  $_POST['password'];
    $sql = "SELECT * FROM `account` WHERE `email`='$id' AND `password`='$password';";
    $q = mysqli_query($dbc, $sql);
    $row = mysqli_num_rows($q);

    if ($row == 1) {
        $login = true;
        $_SESSION['id'] = $id;
        header('location:index.php');
    } else {

        $_SESSION["error"] = $error;
        header('location:login.php');
    }
}
