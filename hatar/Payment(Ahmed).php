<html>
<head>
    <title>
        Payment Complete
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
                        <h1 style="color:red;font-size:40px;">Payment Complete</h1>
                    </center>
                </div>
                <div class="card-body badge-warning">
                    <div class="scrolling-wrapper">
                        <?php
                        $customername=$_POST['customername'];
                        $mobile=$_POST['mobile'];
                        $email=$_POST['email'];
                        $payment=$_POST['payment'];
                        $bkash=$_POST['bkash'];
                        $transaction=$_POST['transaction'];
                        $ubkash=$_POST['ubkash'];
                        $serverName='localhost';
                        $userName='root';
                        $password='';
                        $database='Project';
                        $connection=new mysqli($serverName,$userName,$password,$database);
                        $insert_query="INSERT INTO ahmed(customername,mobile,email,payment,bkash,transaction,ubkash) values('$customername','$mobile','$email','$payment','$bkash','$transaction','$ubkash')";
                        $result=mysqli_query($connection,$insert_query);
                        $serial=1;
                        $select_query="SELECT * FROM ahmed";
                        $result=mysqli_query($connection,$select_query);
                        ?>
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <td>#</td>
                                <td>
                                    Customer Name
                                </td>
                                <td>
                                    Customer mobile number
                                </td>
                                <td>
                                    Email
                                </td>

                                <td>
                                    Payment(20% of Monthly Rent)
                                </td>
                                <td>
                                    House owner bkash number(0181567894)
                                </td>
                                <td>
                                   bkash Transaction ID
                                </td>
                                <td>
                                    Tenants bkash number
                                </td>
                                <td>
                                    Confirmation Email
                                </td>

                            </tr>
                            <?php
                            while($row=mysqli_fetch_array($result))
                            {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $serial++;?>
                                    </td>


                                    <td>
                                        <?php echo $row['customername']?>
                                    </td>

                                    <td>
                                        <?php echo $row['mobile']?>
                                    </td>

                                    <td>
                                        <?php echo $row['email']?>
                                    </td>
                                    <td>
                                        <?php echo $row['payment']?>
                                    </td>
                                    <td>
                                        <?php echo $row['bkash']?>
                                    </td>
                                    <td>
                                        <?php echo $row['transaction']?>
                                    </td>
                                    <td>
                                        <?php echo $row['ubkash']?>
                                    </td>

                                    <td>
                                        <a target="_blank" href="https://mail.google.com/mail/u/0/#inbox" class="btn btn-primary">SENT EMAIL</a>
                                    </td>
<td>
                                        <a  class="btn btn-primary" href="delete(payahmed).php?sl=<?php echo $row['sl']?>">DELETE</a>
                                    </td>
                                </tr>



                                <?php
                            }
                            ?>
                        </table>
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