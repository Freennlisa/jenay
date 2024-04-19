<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>

<style>
    *{
        box-sizing: border-box;
    }

    body{
        margin:0;
        background-color: lightpink;
    }
    .row{
        padding:100px;
    }
    .col1{
         width:25%;
         padding:10px 10px 20px 10px;
         border: 2px solid gray;
         background-color:white;
         box-shadow:10px 10px 5px gray;
         float:left;-ms-transform:rotate(7deg);
         -ms-transform: rotate(7deg);
         -webkit-transform:totate(7deg);
         transform:rotate(7deg);
    }

    .col1 span{
        font-weight:bold;
        font-size:25px;
    }

    .col1:hover{
        transform: rotate(0deg);
    }



    .col2{
        width:25%;
        padding:10px 10px 20px;
        border:2px solid gray;
        background-color:white;
        box-shadow: 10px 10px 5px gray;
        float:left;
        -ms-transform: rotate(-8deg);
         -webkit-transform:totate(-8deg);
         transform:rotate(-8deg);
    }

.col2 span{
    font-weight:bold;
    font-size:25px;
}

.col2:hover{
    transform:rotate(0deg);
}


 </style>


</head>

<body>
<div class="container">
        <div class="nav">
        <a href="userhome.php"> HOME</a>
        <a href="gallery.php"> GALLERY</a>
        <a href="group.php"> GROUP PROJECT</a>
        <a class="active" href="createpost.php"> CREATE POST</a>
        <a href="update_profile.php"> UPDATE PROFILE</a>
        <a href="index.php"> LOGOUT</a>
    </div>

   <div class="row">

        <div class="col1">
            <img src="img/jisoo.jpg" width="100">
            <span>BLACKPINK</span>
            <p class="desc1">Blackpink is a South Korean girl group formed
                 by YG Entertainment and consisting of members Jisoo, Jennie, Rosé, and Lisa.  </p>

        </div>

<div class="col2">
            <img src="img/jen.jpg" width="100">
            <span>BLACKPINK</span>
            <p class="desc2">Cited as the "biggest girl group in the world", they are considered the most successful Korean girl group internationally and a leading force in the Korean Wave.
                 They are stylistically associated with the "girl crush" concept in K-pop—exploring themes of self-confidence and female empowerment. </p>


        </div>
<!-- -->
<div class="col1">
            <img src="img/rose.jpg" width="100">
            <span>BLACKPINK</span>
            <p class="desc1"> Blackpink debuted in August 2016 with their single album Square One, which featured "Whistle" and "Boombayah",
                 their first number-one entries on South Korea's Gaon Digital Chart and the US Billboard World Digital Songs chart, respectively. </p>
        </div>

<div class="col2">
            <img src="img/jennie.jpg" width="100">
            <span>BLACKPINK</span>
            <p class="desc2"> It was followed by the single album Square Two in November, whose song "Playing with Fire" was the first by a Korean girl group to enter the Billboard Canadian Hot 100.</p>
        </div>


    </div>
</body>
</html>