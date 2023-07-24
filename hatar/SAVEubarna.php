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
    <title>
        UBARNA MANSION
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/jquery-ui-themes-1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4/ui/jquery-ui.js"></script>
</head>
<body bgcolor="green">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 badge-warning" style="min-height: 500px">
            <div class="card">
                <div class="card-header bg-primary">
                    <center>
                        <h1 style="color:red;font-size:40px;"> UBARNA MANSION</h1>
                    </center>
                </div>
                <div class="row">
                    <div class="column">
                        <a href="detailubarna.php" ><button type="button" class="btn btn-primary"><img height="50" width="50" src="bullet2.jpeg">View House Detail</button></a>
                        <a href="about.php" ><button type="button" class="btn btn-success"><img height="50" width="50" src="Teamablaze.jpg">About Us</button></a>
                        <a href="contact.php" ><button type="button" class="btn btn-info"><img height="50" width="50" src="contact.png">Contact us</button></a>
                    </div>

                </div>
                <div class="card-body badge-warning">

                </div>
            </div>
            <div>
                <center>
                    <img style="height:300px;width:70%;" src="bachelor(female5)(1).jpg">
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
<footer>
    <img class src="A5.jpeg" alt="Picture four" style="width:30%;height:200px;">
    <img class src="A6.jpeg" alt="Picture five" style="width:35%;height:200px;">
    <img class src="A7.jpeg" alt="Picture six" style="width:34%;height:200px;">
</footer>
</body>
</html>