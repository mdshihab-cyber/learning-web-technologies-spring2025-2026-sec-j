<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <table border="1" width="800px" cellspacing="0" align="center">
        <tr height="100px">
            <td>
                <img src="../A/logo.png" alt="xCompany" width="150px">
                <div style="float: right;">
                    <a href="../A/public_home.php">Home</a> | 
                    <a href="login.php">Login</a> | 
                    <a href="registration.php">Registration</a>
                </div>
            </td>
        </tr>

        <tr height="400px">
            <td align="center">
                <form method="post" action="regCheck.php">
                    <fieldset style="width: 500px; text-align: left;">
                        <legend><b>REGISTRATION</b></legend>
                        <table width="100%">
                            <tr>
                                <td>Name</td>
                                <td>: <input type="text" name="name"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td>Email</td>
                                <td>: <input type="email" name="email"> <b>i</b></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td>User Name</td>
                                <td>: <input type="text" name="username"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td>Password</td>
                                <td>: <input type="password" name="password"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>: <input type="password" name="confirmPassword"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male"> Male
                                        <input type="radio" name="gender" value="Female"> Female
                                        <input type="radio" name="gender" value="Other"> Other
                                    </fieldset>
                                </td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date of Birth</legend>
                                        <input type="number" name="dd" style="width: 30px;"> /
                                        <input type="number" name="mm" style="width: 30px;"> /
                                        <input type="number" name="yyyy" style="width: 50px;"> <i>(dd/mm/yyyy)</i>
                                    </fieldset>
                                </td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                        </table>
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