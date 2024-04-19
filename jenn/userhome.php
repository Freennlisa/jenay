<?php
  include "conn.php";
  session_start();

  $e=$_SESSION['email'];
  
  $getname=mysqli_query($conn, "SELECT * FROM users WHERE email='$e'");
  while($row=mysqli_fetch_object($getname)){

      $id = $row -> id;
      $name = $row -> name;
      $Email = $row -> email;
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
  

      <a href="userhome.php">HOME</a>
      <a href="gallery.php">GALLERY</a>
      <a href="group.php">GROUP PROJECT</a>
      <a href="createpost.php">CREATE POST</a>
      <a href="update_profile.php">UPDATE PROFILE</a>
      <a href="index.php"> LOGOUT</a>

      <hr> </hr>

      <h1>This is Your Post</h1>

      <?php

      $getpost = mysqli_query($conn, "SELECT * FROM post WHERE posted_by='$name'");
      while($row1=mysqli_fetch_array($getpost)){

        ?>

        <h2> Title: <?php echo $row1['title'];?> </h2>
        <h2> Date: <?php echo $row1['mydate'];?> </h2>
        <h2> Description: <?php echo $row1['description'];?> </h2>
        <h2> Posted By: <?php echo $row1['posted_by'];?> </h2>

        <hr> </hr>
        <?php

      }



      ?>

</body>
</html>