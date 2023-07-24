<?php

session_start();

$sl=$_REQUEST['sl'];
$serverName='localhost';
$userName='root';
$password='';
$database='Project';
$connection=new mysqli($serverName,$userName,$password,$database);

if (isset($_POST['name']) && isset($_POST['password'])) {

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }

    $name = validate($_POST['name']);

    $password = validate($_POST['password']);

    if (empty($name)) {

        echo "Required Admin Name!";

    }else if(empty($password)){

        echo "Required Password!";
    }else{

        $sql = "SELECT * FROM ali WHERE name='$name' AND password='$password'";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['name'] === $name && $row['password'] === $password) {

                echo '<script type ="text/JavaScript">';  
echo 'alert("Logged in!")';  
echo '</script>';  

                $_SESSION['name'] = $row['name'];
                echo "<script> location.href='http://localhost/xampp/hatar/Payment(obita).php'; </script>";


            }else{

                echo '<script type ="text/JavaScript">';  
echo 'alert("Wrong Information!")';  
echo '</script>';
                echo "<script> location.href='http://localhost/xampp/hatar/alilogin9.php'; </script>";
            }

        }else{

            echo '<script type ="text/JavaScript">';  
echo 'alert("Wrong Information!")';  
echo '</script>';
            echo "<script> location.href='http://localhost/xampp/hatar/alilogin9.php'; </script>";

        }

    }

}


