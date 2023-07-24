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
    <title>
        Female Student House
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/jquery-ui-themes-1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4/ui/jquery-ui.js"></script>
    <style>
        .scrolling-wrapper {
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;
        .card {
            display: inline-block;
        }
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
                        <h1 style="color:red;font-size:40px;">MALE STUDENT HOUSE</h1>
                    </center>
                   
                </div>

                <div class="card-body badge-warning">


                </div>
            </div>
            <div class="rows">
                <div class="column1">
                    <section class="container">

                        <div class="cards">
                            <div class="cards-image female-1">
                            </div>
                            <h3>KARI MANSION<br>(Only For Female)</h3>
                            <p>Amount:3000TK(per month)<br>Owner:Ali Khatami<br>House No:1F/6F<br>Location:Halisahar,Chattogram</p>
                            <a href="alilogin8.php" class="btn btn-priamary">CLICK HERE</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image female-2">
                            </div>
                            <h3>ABANA Prasad<br>(Only For Female)</h3>
                            <p>Amount:4000TK(per month)<br>Owner:MD Rafidul Islam<br>House No:2F/6F<br>Location:Chawkbazar,Chattogram</p>
                            <a href="rafilogin8.php" class="btn btn-priamary">CLICK HERE</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image female-3">
                            </div>
                            <h3>OBITA VILA<br>(Only For Female)</h3>
                            <p>Amount:5000TK(per month)<br>Owner:Ali Khatami<br>House No:3F/6F<br>Location:AK Khan,Chattogram</p>
                            <a href="alilogin9.php" class="btn btn-priamary">CLICK HERE</a>
                        </div>
                    </section>
                </div>
                <div class="column2">
                    <section class="container">

                        <div class="cards">
                            <div class="cards-image female-4">
                            </div>
                            <h3>ANJITA BHABAN<br>(Only For Female)</h3>
                            <p>Amount:3000TK(per month)<br>Owner:MD Rafidul Islam<br>House No:4F/6F<br>Location:North Kattali,Chattogram</p>
                            <a href="rafilogin9.php" class="btn btn-priamary">CLICK HERE</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image female-5">
                            </div>
                            <h3>UBARNA MANSION<br>(Only For Female)</h3>
                            <p>Amount:4000TK(per month)<br>Owner:Ali Khatami<br>House No:5F/6F<br>Location:GEC Moore,Chattogram</p>
                            <a href="alilogin10.php" class="btn btn-priamary">CLICK HERE</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image female-6">
                            </div>
                            <h3>ABNHAZ VILA<br>(Only For Male)</h3>
                            <p>Amount:5000TK(per month)<br>Owner:MD Rafidul Islam<br>House No:6F/6F<br>Location:South Khulshi,Chattogram</p>
                            <a href="rafilogin10.php" class="btn btn-priamary">CLICK HERE</a>
                        </div>
                    </section>
                </div>
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