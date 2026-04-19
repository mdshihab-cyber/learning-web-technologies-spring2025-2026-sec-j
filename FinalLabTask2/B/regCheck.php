<?php
    session_start();

    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $confirmPassword = $_REQUEST['confirmPassword'];
        $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : "";
        $dob = $_REQUEST['dd']."/".$_REQUEST['mm']."/".$_REQUEST['yyyy'];

        if($name == "" || $email == "" || $username == "" || $password == "" || $confirmPassword == "" || $gender == "" || $dob == "//"){
            echo "Null submission!";
        } elseif ($password != $confirmPassword) {
            echo "Passwords do not match!";
        } else {
            // Using Session as data storage
            $_SESSION['user'] = [
                'name' => $name,
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'gender' => $gender,
                'dob' => $dob
            ];
            header('location: ../C/login.php');
        }
    } else {
        header('location: registration.php');
    }
?>