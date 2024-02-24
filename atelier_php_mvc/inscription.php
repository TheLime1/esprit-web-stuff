<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Controller/verification.php" method="POST">
        <table>
            <tr>
                <td><label for="">First Name</label></td>
                <td><input type="text" name="firstname" id="firstname"></td>
            </tr>
            <tr>
                <td><label for="">Last Name</label></td>
                <td><input type="text" name="lastname" id="lastname"></td>
            </tr>
            <tr>
                <td><label for="">Phone</label></td>
                <td><input type="text" name="phone" id="phone"></td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="">Date of Birth</label></td>
                <td><input type="date" name="dob" id="dob"></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="password" name="pass1" id="pass1"></td>
            </tr>
            <tr>
                <td><label for="">Confirm Password</label></td>
                <td><input type="password" name="pass2" id="pass2"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    <p style="color: red; font-weight: bold">WARNING: DO NOT INPUT YOUR REAL DATA, IT MAY BE STORED IN AN INSECURE DATABASE.</p>
    <p>Because GitHub Pages doesn\'t support dynamic content, I redirected you to my own server 😎</p>
</body>

</html>