<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <center>
      <h1>Registration Form</h1>

      <form action="process.php" method="POST">

            <label>Name: </label> </br>
            <input type="text" name="nm" required></p>


            <label>Email: </label> </br>
            <input type="email" name="email" required></p>


            <label>Password: </label> </br>
            <input type="password" name="pass" required></p>


            <label>Phone Number: </label> </br>
            <input type="text" name="pn" required></p>

            <input type="submit" name="reg_button" value="REGISTER">

     </form>

     <p><a href="index.php"> Click Here To Login! </a> </p>
</center>


</body>
<style>
    body{
        background-image: url("img/black.jfif");
        background-size: cover;
        padding: 40px;
        margin: 0;
    }
</style>
</html>