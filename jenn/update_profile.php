<?php
    include "conn.php";
    session_start();

    $e=$_SESSION['email'];

    $getname=mysqli_query($conn, "SELECT * FROM users WHERE email='$e'");
    while($row=mysqli_fetch_object($getname)){

        $id = $row -> id;
        $name = $row -> name;
        $email = $row -> email;
        $password = $row -> password;
        $pn = $row -> phone_number;


    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>
</head>
<body>

    <a href="userhome.php"> HOME </a>
    <a href="gallery.php"> GALLERY </a>
    <a href="group.php"> GROUP PROJECT </a>
    <a href="createpst.php"> CREATE POST </a>
    <a href="update_profile.php"> UPDATE PROFILE </a>
    <a href="index.php"> LOGOUT </a>



    <center>
    <div class= "now">
    <h1>UPDATE PROFILE</h1>

    <div class= "login-form">

    <form action="process.php?id=<?php echo $id;?>" method="POST">
    
        <label> Name </label> </br>
        <input type="text" name="up_name" value="<?php echo $name;?>" required> </p>

        <label> Email </label> </br>
        <input type="email" name="up_email" value="<?php echo $email;?>" required> </p>

        <label> Password </label> </br>
        <input type="password" name="up_pass" value="<?php echo $pass;?>" required> </p>

        <label> Phone Number </label> </br>
        <input type="text" name="up_pn" value="<?php echo $pn;?>" required> </p>

        <input type="submit" value="UPDATE" name="update_account">



    </form>
</center>
</div>
</body>

<style>
    body{
    background-image: url("img/lisa.jpeg");
    background-size: cover;
    padding: 40px;
    margin: 0;
}

.now{
    font-size: 20px;
    font-weight: bold;
    color: white;
    font-family: georgia italic;
}

.login-form{
    padding: 40px;
    background-color: black;
    border-radius: 20px;
    opacity: 0.5;
    width: 200px;
    color: white;
}

.login-form input{
    font-size: 10px;
    width: 100%;
    padding: 10px 10px;
    border: 0;
    outline: none;
    border-radius: 5px;
   
}

.login-form button{
    font-size: 30px;
    font-weight: bold;
    margin: 20px 0;
    width: 30%;
    border-radius: 5px;
    border: 0;
    padding: 10px 10px;
}

</style>

</html>