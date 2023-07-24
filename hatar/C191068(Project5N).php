<html>
<head>
    <title>
        Sign up
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
    <style>
        .buttons {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .buttons:hover {background-color: #3e8e41}

        .buttons:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
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
                        <h1 style="color:red;font-size:40px;">SIGN UP HERE</h1>
                    </center>
                </div>
                <center>
                    <div class="row">
                        <div class="column">
                            <a href="login.php" target="_blank"><button type="button" class="btn btn-primary"><img height="50" width="50" src="icon.jpeg">SIGN IN</button></a>
                            <a href="about.php" ><button type="button" class="btn btn-success"><img height="50" width="50" src="icon.jpeg">About Us</button></a>
                            <a href="contact.php" ><button type="button" class="btn btn-info"><img height="50" width="50" src="icon.jpeg">Contact us</button></a>
                        </div>

                    </div>
            </div>
                </center>
                <div class="card-body badge-warning">
                    <div class="scrolling-wrapper">
                        <iframe name="votar" style="display:none;"></iframe>
                        <form action="insert(2).php" method="post" target="votar">
                            <center>
                                <table>
                                    <tr>
                                        <td>
                                            Customer Name
                                        </td>
                                        <td>
                                            <input required class="form-control" name="customername" id="customername" placeholder="Enter your name">
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
                                            <input required class="form-control" name="mobile" id="mobile" placeholder="Enter your Number ">
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
                                            <input required class="form-control" name="email" id="email" type="email" placeholder="Enter your email">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="gmailicon.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Password
                                        </td>
                                        <td>
                                            <input required class="form-control" name="password" id="password" type="password" placeholder="Enter your password">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="password.png">
                                        </td>
<td>
<input type="checkbox" onclick="myFunction()">Show Password
</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Gender
                                        </td>
                                        <td>
                                            <select required class="form-control" name="gender" id="gender">
                                                <option>MALE</option>
                                                <option>FEMALE</option>
                                            </select>
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="gender.png">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            Date of Birth
                                        </td>
                                        <td>
                                            <input required class="form-control datepicker" name="dateofBirth" id="dateofBirth" type="text" placeholder="Enter your birthdate">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="birthday.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Profile photo
                                        </td>
                                        <td>
                                            <input required class="form-control" name="picture" id="picture" type="file">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="profile.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Address
                                        </td>
                                        <td>
                                            <input required class="form-control" name="address" id="address" placeholder="Enter your address">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="location.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Postal code
                                        </td>
                                        <td>
                                            <input required class="form-control" name="postalcode" id="postalcode" placeholder="Enter your postal code">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="postal.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           Religion
                                        </td>
                                        <td>
                                            <select required class="form-control" name="religion" id="religion">
                                                <option>ISLAM</option>
                                                <option>CHRISTIANITY</option>
                                                <option>BUDDHISM</option>
                                                <option>HINDUISM</option>
                                                <option>SIKHISM</option>
                                            </select>
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="religion.jpeg">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           Nationality
                                        </td>
                                        <td>
                                            <input required class="form-control" name="national" id="national" placeholder="Enter your Nationality">
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="nation.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input onclick="window.open('savesign.php')"  class="buttons" name="submitButton" type="submit" value="SUBMIT">
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
<script>
    $(function() {
        $( "#dateofBirth" ).datepicker();
    });
</script>
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>