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
        Information Required before booking(ATAUR MANSION)
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
                        <h1 style="color:red;font-size:40px;">Information Required before booking(Step 1)</h1>
                    </center>
                </div>
                <div class="card-body badge-warning">
                    <div class="scrolling-wrapper">
                        <iframe name="votar" style="display:none;"></iframe>
                        <form action="view%20ataur.php" method="post" target="votar">
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
                                            Name of University
                                        </td>
                                        <td>
                                            <select required class="form-control" name="university" id="university">
                                                <option>University of Dhaka</option>
                                                <option> University of Rajshahi</option>
                                                <option> Bangladesh Agricultural University</option>
                                                <option>Bangladesh University of Engineering & Technology</option>
                                                <option>University of Chittagong</option>
                                                <option>Jahangirnagar University</option>
                                                <option>Islamic University, Bangladesh</option>
                                                <option> Shahjalal University of Science & Technology</option>
                                                <option> Khulna University</option>
                                                <option>  National University</option>
                                                <option> Bangladesh Open University</option>
                                                <option> Bangabandhu Sheikh Mujib Medical University</option>
                                                <option> Bangabandhu Sheikh Mujibur Rahman Agricultural University</option>
                                                <option>  Hajee Mohammad Danesh Science & Technology University</option>
                                                <option>  Mawlana Bhashani Science & Technology University</option>
                                                <option>  Patuakhali Science And Technology University</option>
                                                <option> Sher-e-Bangla Agricultural University</option>
                                                <option>  Chittagong University of Engineering & Technology</option>
                                                <option>  Rajshahi University of Engineering & Technology</option>
                                                <option> Khulna University of Engineering & Technology</option>
                                                <option> Dhaka University of Engineering & Technology</option>
                                                <option> Noakhali Science & Technology University</option>
                                                <option> Jagannath University</option>
                                                <option>  Comilla University</option>
                                                <option>  Jatiya Kabi Kazi Nazrul Islam University</option>
                                                <option>  Chittagong Veterinary and Animal Sciences University</option>
                                                <option> Sylhet Agricultural University</option>
                                                <option>  Jessore University of Science & Technology</option>
                                                <option> Pabna University of Science and Technology</option>
                                                <option>  Begum Rokeya University, Rangpur</option>
                                                <option> Bangladesh University of Professionals</option>
                                                <option>  Bangabandhu Sheikh Mujibur Rahman Science & Technology University</option>
                                                <option>   Bangladesh University of Textiles</option>
                                                <option> University of Barisal</option>
                                                <option>  Rangamati Science and Technology University</option>
                                                <option> Bangabandhu Sheikh Mujibur Rahman Maritime University, Bangladesh</option>
                                                <option> Islamic Arabic University</option>
                                                <option> Chittagong Medical University</option>
                                                <option>  Rajshahi Medical University</option>
                                                <option> Rabindra University, Bangladesh</option>
                                                <option> Bangabandhu Sheikh Mujibur Rahman Digital University, Bangladesh</option>
                                                <option> Sheikh Hasina University</option>
                                                <option>  Khulna Agricultural University</option>
                                                <option> Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University</option>
                                                <option> Sylhet Medical University</option>
                                                <option> Bangabandhu Sheikh Mujibur Rahman Aviation And Aerospace University (BSMRAAU)</option>
                                                <option> Chandpur Science and Technology University</option>
                                                <option> Bangabandhu Sheikh Mujibur Rahman University, Kishoreganj</option>
                                                <option> Hobiganj Agricultural University</option>
                                                <option> Sheikh Hasina Medical University, Khulna</option>
                                                <option>   North South University</option>
                                                <option>  University of Science & Technology Chittagong</option>
                                                <option>  Independent University, Bangladesh</option>
                                                <option>  Central Women's University</option>
                                                <option>  International University of Business Agriculture & Technology</option>
                                                <option>  International Islamic University Chittagong</option>
                                                <option>  Ahsanullah University of Science and Technology</option>
                                                <option>  American International University-Bangladesh</option>
                                                <option>  East West University</option>
                                                <option>  University of Asia Pacific</option>
                                                <option>Gono Bishwabidyalay </option>
                                                <option>  The People's University of Bangladesh </option>
                                                <option>  Asian University of Bangladesh </option>
                                                <option>  Dhaka International University</option>
                                                <option>  Manarat International University</option>
                                                <option>  BRAC University</option>
                                                <option>    Bangladesh University </option>
                                                <option>   Leading University</option>
                                                <option> BGC Trust University Bangladesh</option>
                                                <option>   Sylhet International University </option>
                                                <option>  University of Development Alternative </option>
                                                <option>  Premier University</option>
                                                <option>  Southeast University </option>
                                                <option>  Daffodil International University</option>
                                                <option>  Stamford University Bangladesh</option>
                                                <option>  State University of Bangladesh</option>
                                                <option>  City University</option>
                                                <option>   Prime University</option>
                                                <option>  Northern University Bangladesh</option>
                                                <option>  Southern University Bangladesh </option>

                                                <option>   Green University of Bangladesh</option>
                                                <option> Pundra University of Science & Technology </option>
                                                <option>   World University of Bangladesh</option>
                                                <option> Shanto-Mariam University of Creative Technology</option>
                                                <option>  The Millennium University</option>
                                                <option>  Eastern University</option>
                                                <option>  Metropolitan University</option>
                                                <option>  Uttara University</option>
                                                <option>  United International University</option>
                                                <option>  University of South Asia</option>
                                                <option> Victoria University of Bangladesh</option>
                                                <option>  Bangladesh University of Business & Technology</option>
                                                <option> Victoria University of Bangladesh </option>
                                                <option> Presidency University</option>
                                                <option>University of Information Technology & Sciences</option>
                                                <option> Primeasia University</option>
                                                <option>   Royal University of Dhaka</option>
                                                <option>    University of Liberal Arts Bangladesh</option>
                                                <option>  Atish Dipankar University of Science & Technology</option>
                                                <option>      Bangladesh Islami University</option>
                                                <option>       ASA University Bangladesh</option>
                                                <option>     East Delta University</option>
                                                <option>    European University of Bangladesh </option>
                                                <option>    Varendra University</option>
                                                <option> Hamdard University Bangladesh</option>
                                                <option>   BGMEA University of Fashion & Technology(BUFT) </option>
                                                <option>North East University Bangladesh</option>
                                                <option> First Capital University of Bangladesh</option>
                                                <option>     Ishakha International University, Bangladesh</option>
                                                <option>       Z.H Sikder University of Science & Technology</option>
                                                <option>Exim Bank Agricultural University, Bangladesh</option>
                                                <option>    North Western University</option>
                                                <option>    Khwaja Yunus Ali University</option>
                                                <option>    Sonargaon University</option>
                                                <option>   Feni University</option>
                                                <option>  Britannia University </option>
                                                <option>  Port City International University</option>
                                                <option>   Bangladesh University of Health Sciences</option>
                                                <option>    Chittagong Independent University</option>
                                                <option>Notre Dame University Bangladesh</option>
                                                <option>    Times University, Bangladesh</option>
                                                <option>    North Bengal International University</option>
                                                <option>  Fareast International University</option>
                                                <option>   Rajshahi Science & Technology University (RSTU), Natore</option>
                                                <option>    Sheikh Fazilatunnesa Mujib University</option>
                                                <option> Cox's Bazar International University</option>
                                                <option>      Ranada Prasad Shaha University</option>
                                                <option>  German University Bangladesh</option>
                                                <option>   Global University Bangladesh</option>
                                                <option>    CCN University of Science & Technology</option>
                                                <option> Bangladesh Army University of Science and Technology(BAUST), Saidpur</option>
                                                <option> Bangladesh Army University of Engineering and Technology (BAUET), Qadirabad</option>
                                                <option>Bangladesh Army International University of Science & Technology(BAIUST) ,Comilla</option>
                                                <option>        The International University of Scholars</option>
                                                <option>      Canadian University of Bangladesh</option>
                                                <option>     N.P.I University of Bangladesh</option>
                                                <option>   Northern University of Business & Technology, Khulna</option>
                                                <option>  Rabindra Maitree University, Kushtia</option>
                                                <option>        University of Creative Technology, Chittagong</option>
                                                <option>     Central University of Science and Technology</option>
                                                <option>    Tagore University of Creative Arts, Uttara, Dhaka, Bangladesh</option>
                                                <option>     University of Global Village</option>
                                                <option>    Anwer Khan Modern University</option>
                                                <option> ZNRF University of Management Sciences</option>
                                                <option> Ahsania Mission University of Science and Technology</option>
                                                <option>Khulna Khan Bahadur Ahsanullah University</option>
                                                <option> Bandarban University</option>
                                                <option>Shah Makhdum Management University, Rajshahi</option>
                                                <option>Trust University, Barishal</option>
                                                <option>  International Standard University</option>
                                                <option>   University of Brahmanbaria</option>
                                                <option>University of Skill Enrichment and Technology</option>
                                                <option>Microland University of Science and Technology</option>
                                                <option> R.T.M Al-Kabir Technical University</option>
                                                <option>     Sheikh Hasina University of Science and Technology</option>
                                                <option>   IBAIS University </option>
                                                <option>The University of Comilla</option>
                                                <option>      Queens University</option>





                                            </select>
                                        </td>
                                        <td>
                                            <img height="40" width="50" src="univic.png">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input onclick="window.open('picataur.php')" class="btn btn-primary" name="submitButton" type="submit" value="NEXT">
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