<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "igswebdb");

if(isset($_POST['del_multiple_data'])){
    $all_id = $_POST['del_chk'];
    $seperate_all_id = implode(",", $all_id);

    $query = "DELETE FROM users WHERE id IN($seperate_all_id)";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['status'] = "User(s) deleted successfully!";
        header("Location: userProfile.php");
    }else{
        $_SESSION['status'] = "Something went wrong!";
        header("Location: userProfile.php");
    }
}