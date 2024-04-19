<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <center>
    <h1>Welcome to Login Page! </h1>

    <form action="process.php" method="POST">

    <label> Email </label></br>
    <input type="email" name="login_email" required placeholder="Enter Email Here!..">
    </br></br>

    <label>Password</label></br>
    <input type="password" name="login_pass"  required placeholder="Enter Password Here!..">
    </br></br>


    <input type="submit" name="login" value="LOGIN">
</form>

<p><a href="reg.php"> Click Here To Register! </a> </p>
</center> 
</body>
<style>
    body{
        background-image: url("img/pink.jpg");
        background-size: cover;
        padding: 40px;
        margin: 0;
    }
</style>
</html>