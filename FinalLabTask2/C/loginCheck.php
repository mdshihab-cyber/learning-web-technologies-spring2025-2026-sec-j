<?php
    session_start();

    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" || $password == ""){
            echo "Null username/password!";
        } elseif(isset($_SESSION['user'])){
            $user = $_SESSION['user'];

            if($username == $user['username'] && $password == $user['password']){
                $_SESSION['status'] = true;
                
                // If "Remember Me" is checked, set a cookie
                if(isset($_REQUEST['rememberMe'])){
                    setcookie('status', 'true', time()+3600, '/');
                }

                header('location: ../D/dashboard.php');
            } else {
                echo "Invalid user!";
            }
        } else {
            echo "No user registered yet!";
        }
    } else {
        header('location: login.php');
    }
?>