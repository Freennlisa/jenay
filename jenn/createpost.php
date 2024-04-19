<?php
    include "conn.php";
    session_start();

    $e= $_SESSION['email'];

    $getname=mysqli_query($conn, "SELECT * FROM users WHERE email='$e'");
    while($row=mysqli_fetch_object($getname)){

        $name= $row -> name;
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
    <style> 

        .nav{
            background-color: black;
            overflow: hidden;
        }

        .nav a{
            float: left;
            color:white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .nav a:hover{
            background-color: red;
            color: white;
        }

        .nav a.active{
            background-color:blue;
        }
        .content{
            text-align: center;
        }
        .me{
            padding: 5px;
            padding-bottom: 10px;
            text-align: center;
            background-color: black;
            opacity: 0.9;
            border-radius: 20px;
            width: 40%;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            color: white;
        }
        .button input {
            height: 40%;
            width: 30%;
            outline: none;
            color: black;
            border-radius: 3px;
            border: none;
            font-size: 15px;
            font-weight:  bold;
            letter-spacing: 2px;
            background-color: pink;
        }
        form .button input:hover {
            background-color:green;
            color:white;
        }
    </style>
<body>
    <div class="container">
        <div class="nav">
        <a href="userhome.php"> HOME</a>
        <a href="gallery.php"> GALLERY</a>
        <a href="group.php"> GROUP PROJECT</a>
        <a class="active" href="create.php"> CREATE POST</a>
        <a href="update_profile.php"> UPDATE PROFILE</a>
        <a href="index.php"> LOGOUT</a>
    </div>

    <div class="content">
        <img src="img/langga.jpg" width="100%">
    </div>
    
    <div class="me">
        <h1>Create Post </h1>
            <form action="process.php" method="POST">

                <label>Title of your Post </label> </br>
                <input type="text" name="title" required placeholder="Add Title here..."> </p>

                <label> Select Date </label> </br>
                <input type="date" name="mydate" required> </p>

                <label>Add Description </label> </br>
                <textarea cols="50" rows="20" name="desc"></textarea> </p>

                <input type="hidden" name="posted_by" value="<?php echo $name; ?>">

                <div class="button">
                    <input type="submit" name="create_post" value="POST">
                </div>
            </form>
    </div>
</body>
</html>