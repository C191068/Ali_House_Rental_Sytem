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
                        <h1 style="color:red;font-size:40px;">FEMALE STUDENT HOUSE</h1>
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
                            <div class="cards-image female-1">
                            </div>
                            <h5>KARI MANSION<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):6000TK<br>Monthly Rent:3000TK<br>Owner:Ali Khatami<br>Cashier:Banu Akter<br>House No:1F/6F<br>Location:Halisahar,Chattogram</p>
                            <a href="kari%20h.php" class="btn btn-priamary">Click here to start booking</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image female-2">
                            </div>
                            <h5>ABANA Prasad<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):8000TK<br>Monthly Rent:4000TK<br>Owner:MD Rafidul Islam<br>Cashier:Rehana Hossain<br>House No:2F/6F<br>Location:Chawkbazar,Chattogram</p>
                            <a href="abana%20h.php" class="btn btn-priamary">Click here to start booking</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image female-3">
                            </div>
                            <h5>OBITA VILA<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):10000TK<br>Monthly Rent:5000TK<br>Owner:Ali Khatami<br>Cashier:Shamima Tasnim<br>House No:3F/6F<br>Location:AK Khan,Chattogram</p>
                            <a href="obita%20h.php" class="btn btn-priamary">Click here to start booking</a>
                        </div>
                    </section>
                </div>
                <div class="column2">
                    <section class="container">

                        <div class="cards">
                            <div class="cards-image female-4">
                            </div>
                            <h5>ANJITA BHABAN<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):9000TK<br>Monthly Rent:3000TK<br>Owner:MD Rafidul Islam<br>Cashier:Tahmina Rita<br>House No:4F/6F<br>Location:North Kattali,Chattogram</p>
                            <a href="anjita%20h.php" class="btn btn-priamary">Click here to start booking</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image female-5">
                            </div>
                            <h5>UBARNA MANSION<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):8000TK<br>Monthly Rent:4000TK<br>Owner:Ali Khatami<br>Cashier:Kulsum Akter<br>House No:5F/6F<br>Location:GEC Moore,Chattogram</p>
                            <a href="ubarna%20h.php" class="btn btn-priamary">Click here to start booking</a>
                        </div>
                        <div class="cards">
                            <div class="cards-image female-6">
                            </div>
                            <h5>ABNHAZ VILA<br>(DUPLEX)</h5>
                            <p>Advance Payment(two months):10000TK<br>Monthly Rent:5000TK<br>Owner:MD Rafidul Islam<br>Cashier:Jahanara Begum<br>House No:6F/6F<br>Location:South Khulshi,Chattogram</p>
                            <a href="abnhaz%20h.php" class="btn btn-priamary">Click here to start booking</a>
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