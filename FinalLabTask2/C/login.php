<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <table border="1" width="800px" cellspacing="0" align="center">
        <tr height="100px">
            <td>
                <img src="../A/logo.png" alt="xCompany" width="150px">
                <div style="float: right;">
                    <a href="../A/public_home.php">Home</a> | 
                    <a href="login.php">Login</a> | 
                    <a href="../B/registration.php">Registration</a>
                </div>
            </td>
        </tr>

        <tr height="300px">
            <td align="center">
                <form method="post" action="loginCheck.php">
                    <fieldset style="width: 400px; text-align: left;">
                        <legend><b>LOGIN</b></legend>
                        <table>
                            <tr>
                                <td>User Name</td>
                                <td>: <input type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>: <input type="password" name="password"></td>
                            </tr>
                        </table>
                        <hr>
                        <input type="checkbox" name="rememberMe"> Remember Me <br><br>
                        <input type="submit" name="submit" value="Submit">
                        <a href="forgotPassword.php">Forgot Password?</a>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr height="50px">
            <td align="center">Copyright © 2017</td>
        </tr>
    </table>
</body>
</html>