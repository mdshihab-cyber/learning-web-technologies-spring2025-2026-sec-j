<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Public Home</title>
</head>
<body>
    <table border="1" width="800px" cellspacing="0" align="center">
        <tr height="100px">
            <td>
                <img src="logo.png" alt="xCompany" width="150px">
                <div style="float: right;">
                    <a href="public_home.php">Home</a> | 
                    <?php if(isset($_SESSION['status'])): ?>
                        <a href="../D/dashboard.php">Dashboard</a> | 
                        <a href="../C/logout.php">Logout</a>
                    <?php else: ?>
                        <a href="../C/login.php">Login</a> | 
                        <a href="../B/registration.php">Registration</a>
                    <?php endif; ?>
                </div>
            </td>
        </tr>
        <tr height="250px">
            <td><h3>&nbsp;&nbsp;Welcome to xCompany</h3></td>
        </tr>
        <tr height="50px">
            <td align="center">Copyright © 2017</td>
        </tr>
    </table>
</body>
</html>