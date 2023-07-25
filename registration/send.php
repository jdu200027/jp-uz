<?php
    // if(!empty($_POST['name']) && !empty($_POST['pass'])){
    //     $name = $_POST['name'];
    //     $pass = $_POST['pass'];
        // $contact = mysqli_connect("localhost", "root", "root", "test");
        // $query = mysqli_query($contact, "INSERT INTO blog (name, password) VALUES ('$name', '$pass')");
    
    //     mysqli_close($contact);
    // }else{
    //     print "<p>Please enter values</p>";
    // };
    // header("location:3200");

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_number = $_POST['user_number'];
    $user_pass = $_POST['user_pass'];

    if($_POST['user_pass'] !== $_POST['user_pass_2']){
        header("location:./index.php?message=". urldecode("<span class='details'>Confirm Password is not true</span>"));
        exit();
    }else{
        $contact = mysqli_connect("localhost", "root", "root", "users_database");
        $query = mysqli_query($contact, "INSERT INTO users_info (user_name, user_email, user_number, user_password) VALUES ('$user_name', '$user_email', '$user_number', '$user_pass');");
        header("location:./JPSite/index.php?message=" .urldecode($user_name));
    }
?>