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
        Male Student House
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
                    <a href="myprofile.php"><button type="button" class="btn btn-danger"><img height="50" width="50" src="<?php echo $_SESSION['picture'];?>"><?php echo $_SESSION['customername'];?></button></a>
                    <a href="homepage.php"><button type="button" class="btn btn-primary"><img height="50" width="50" src="bullet.png">Homepage</button></a>
 <a href="about.php" ><button type="button" class="btn btn-success"><img height="50" width="50" src="Teamablaze.jpg">About Us</button></a>
                            <a href="contact.php" ><button type="button" class="btn btn-info"><img height="50" width="50" src="contact.png">Contact us</button></a>
                </div>

                <div class="card-body badge-warning">
                    <h4>Here one unit of a house can be booked by eight bachelor.<br>Advance Payment(two months) must be cash in hand to the mentioned cashiers at mentioned locations after booking the house</h4>

                </div>
            </div>
            <div class="rows">
                <div class="column1">
                    <section class="container">

                        <div class="cards">
                            <div class="cards-image male-1">
                            </div>
                            <h5>AZZAK MANSION<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):8000TK<br>Monthly rent:4000TK<br>Owner:Ali Khatami<br>Cashier:Jashim Ali<br>House No:1M/6M<br>Location:Halisahar,Chattogram</p>
                            <a href="AZZAK%20h.php" class="btn btn-priamary">Click here to start booking</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image male-2">
                            </div>
                            <h5>PARAJ VILA<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):10000TK<br>Monthly rent:5000TK<br>Owner:MD Rafidul Islam<br>Cashier:Ilias Hossain<br>House No:2M/6M<br>Location:Chawkbazar,Chattogram</p>
                            <a href="PARAJ%20h.php" class="btn btn-priamary">Click here to start booking</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image male-3">
                            </div>
                            <h5>MANSHAH VILA<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):12000TK<br>Amount:6000TK(per month)<br>Owner:Ali Khatami<br>Cashier:Mahmud Khan<br>House No:3M/6M<br>Location:AK Khan,Chattogram</p>
                            <a href="manshah%20h.php" class="btn btn-priamary">Click here to start booking</a>
                        </div>
                    </section>
                </div>
                <div class="column2">
                    <section class="container">

                        <div class="cards">
                            <div class="cards-image male-4">
                            </div>
                            <h5>MITSAN BHABAN<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):8000TK<br>Amount:4000TK(per month)<br>Owner:MD Rafidul Islam<br>Cashier:Anwar Hamid<br>House No:4M/6M<br>Location:North Kattali,Chattogram</p>
                            <a href="mitsan%20h.php" class="btn btn-priamary">Click here to start booking</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image male-5">
                            </div>
                            <h5>ATAUR MANSION<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):10000TK<br>Amount:5000TK(per month)<br>Owner:Ali Khatami<br>Cashier:Ferdous Hakim<br>House No:5M/6M<br>Location:GEC Moore,Chattogram</p>
                            <a href="ataur%20h.php" class="btn btn-priamary">Click here to start booking</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image male-6">
                            </div>
                            <h5>ANWAR VILA<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):12000TK<br>Amount:6000TK(per month)<br>Owner:MD Rafidul Islam<br>Cashier:Mahfuz Rahman<br>House No:6M/6M<br>Location:South Khulshi,Chattogram</p>
                            <a href="anwar%20h.php" class="btn btn-priamary">Click here to start booking</a>
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