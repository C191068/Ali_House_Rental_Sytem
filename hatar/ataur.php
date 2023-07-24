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
        Payment(ATAUR MANSION)
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
                        <h1 style="color:red;font-size:40px;">PAYMENT FOR House booking CONFIRMATION(ATAUR MANSION)</h1>
                    </center>
                </div>
<div>
                    <center>
                        <h1 style="color:red;font-size:40px;">Complete Bkash payment with given number and amount below then fill up the last two field of the table and proceed</h1>
                    </center>
                </div>
                <div class="card-body badge-warning">
                    <div class="scrolling-wrapper">
                        <iframe name="votar" style="display:none;"></iframe>
                        <form action="Payment(ataur).php" method="post" target="votar">
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            Customer Name
                                        </td>
                                        <td>
                                            <input  class="form-control" name="customername" id="customername" value="<?php echo $_SESSION['customername'];?>" readonly required autofocus placeholder="Enter your name">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="user.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Customer mobile number
                                        </td>
                                        <td>
                                            <input class="form-control" name="mobile" id="mobile" value="<?php echo $_SESSION['mobile'];?>"readonly required autofocus placeholder="Enter your Number ">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="mobile.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Email
                                        </td>
                                        <td>
                                            <input class="form-control" name="email" id="email" value="<?php echo $_SESSION['email'];?>"readonly required autofocus type="email" placeholder="Enter your email">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="gmailicon.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Payment(20% of Monthly Rent)
                                        </td>
                                        <td>
                                            <input class="form-control" name="payment" id="payment" value="1000" readonly required autofocus placeholder="Enter payment for confirmation">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="taka.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            House owner bkash number(0158963478)
                                        </td>
                                        <td>
                                            <input  class="form-control" name="bkash" id="bkash" value="0158963478" readonly required autofocus placeholder="Enter the house owner bkash number">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="bkash.jpg">
                                        </td>
                                    </tr>
 <tr>
                                        <td>
                                            bkash Transaction ID
                                        </td>
                                        <td>
                                            <input  class="form-control" name="transaction" id="transaction" placeholder="8N6T7LL5E8M">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="bkash.jpg">
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            Tenants bkash number
                                        </td>
                                        <td>
                                            <input  class="form-control" name="ubkash" id="ubkash" placeholder="017xxxxxxxxx">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="bkash.jpg">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input onclick="window.open('saveataur.php')" class="btn btn-primary" name="submitButton" type="submit" value="CONFIRM PAYMENT">
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </form>
                    </div>
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