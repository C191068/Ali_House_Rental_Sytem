<html>
<head>
    <title>
        VIEW TENANTS
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/jquery-ui-themes-1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <link href="foot.css" rel="stylesheet">
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
                        <h1 style="color:red;font-size:40px;">Verify the customers by the following information</h1>
                    </center>
                </div>
                <div>
                    <center>

                    </center>
                </div>
                <div class="card-body badge-warning">
                    <div class="scrolling-wrapper">
                        <?php
                        $customername=$_POST['customername'];
                        $memberpic=$_POST['memberpic'];
                        $occupationplace=$_POST['occupationplace'];
                        $serverName='localhost';
                        $userName='root';
                        $password='';
                        $database='Project';
                        $connection=new mysqli($serverName,$userName,$password,$database);
                        $insert_query="INSERT INTO eprasad(customername,memberpic,occupationplace) values('$customername','$memberpic','$occupationplace')";
                        $result=mysqli_query($connection,$insert_query);
                        $serial=1;
                        $select_query="SELECT * FROM eprasad";
                        $result=mysqli_query($connection,$select_query);
                        ?>
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <td>#</td>
                                <td>
                                    Customer Name
                                </td>
                                <td>
                                    Member photo
                                </td>
                                <td>
                                    Place of Occupation
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
                                        <?php echo $row['memberpic']?>
                                    </td>
                                    <td>
                                        <?php echo $row['occupationplace']?>
                                    </td>
<td>
                                        <a  class="btn btn-primary" href="delete(vprasad).php?sl=<?php echo $row['sl']?>">DELETE</a>
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