<?php
session_start();
$sl=$_REQUEST['sl'];
$serverName='localhost';
$userName='root';
$password='';
$database='Project';
$connection=new mysqli($serverName,$userName,$password,$database);
?>
<html>
<head>
    <style>
        p{
            font-size: xx-large;
        }
    </style>
<style>
        body {
            background: linear-gradient(90deg, rgba(177, 64, 200, 1) 0%,
            rgba(109, 9, 121, 1) 35%, rgba(45, 1, 62, 1) 100%);
        }
        .glow {
            font-size: 70px;
            color: #ffffff;
            text-align: center;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }
        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #eeeeee, 0 0 20px #000000, 0 0 30px #000000, 0 0 40px #000000,
                0 0 50px #9554b3, 0 0 60px #9554b3, 0 0 70px #9554b3;
            }
            to {
                text-shadow: 0 0 20px #eeeeee, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6,
                0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
            }
        }
    </style>
    <title>
        SHARIF BHABAN(TRIPLEX)
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/jquery-ui-themes-1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<link href="foot.css" rel="stylesheet">
    <script src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4/ui/jquery-ui.js"></script>
</head>
<body bgcolor="green">
<center>
    <h1 class="glow">HOUSELAND<br>A HOUSE RENTAL SYSTEM</h1>
</center>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 badge-warning" style="min-height: 500px">
            <div class="card">
                <div class="card-header bg-primary">
                    <center>
                        <h1 style="color:red;font-size:40px;"> SHARIF BHABAN(TRIPLEX)</h1>
                    </center>
                </div>
                <div class="row">
                    <div class="column">
                        <a href="detailsharif.php" ><button type="button" class="btn btn-primary"><img height="50" width="50" src="bullet2.jpeg">View House Detail</button></a>
                        <a href="about.php" ><button type="button" class="btn btn-success"><img height="50" width="50" src="Teamablaze.jpg">About Us</button></a>
                        <a href="contact.php" ><button type="button" class="btn btn-info"><img height="50" width="50" src="contact.png">Contact us</button></a>
                    </div>

                </div>
                <div class="card-body badge-warning">

                </div>
            </div>
            <div>
                <center>
                    <img style="height:300px;width:70%;" src="triplex-2(1).jpeg">
                </center>
            </div>
            <div>
                <center>
                    <p>Dear Customer, Wait for The confirmation message at your email (<?php echo $_SESSION['email'];?>). If you have perfectly completed your payment you will receive it within 24hrs otherwise not.For any problem contact us </p>
                </center>
            </div>

        </div>
    </div>
</div>
<center>
    <img src="flag.png" alt="Picture two" style="width:100%;height:100px;">
</center>
<div>
    <img class src="A5.jpeg" alt="Picture four" style="width:30%;height:200px;">
    <img class src="A6.jpeg" alt="Picture five" style="width:35%;height:200px;">
    <img class src="A7.jpeg" alt="Picture six" style="width:34%;height:200px;">
</div>
    <footer>
        <div class="footer-content">
            <h3>Develop by Team Ablaze</h3>
            <p>House rental business is a common business in our country Bangladesh. Here we gave this system an online interface. The person who wants to rent house can rent here safely and securely. In this system the house owner can get the correct and valid information of the tenants.. Moreover bachelor male and female students face problems to rent house. We have made here our best to solve these problems also.</p>
            
        </div>
        <div class="footer-bottom">
            <p>All rights reserved &copy; <a href="#">Houseland ltd</a>  </p>
            <div class="footer-menu">
                <ul class="f-menu">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
        </div>

    </footer>
</body>
</html>