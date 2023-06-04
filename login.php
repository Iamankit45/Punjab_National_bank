<?php
$INSERT = false;

if (isset($_POST['Username'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bank";
    // // Create connection

    $conn = mysqli_connect($servername, $username, $password, $database);
    // // Check connection

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // echo "Connection established: <br>";
    }

    $Username = $_POST["Username"];
    $password = $_POST["Password"];

    $sql = "INSERT INTO `bank`.`login`( `Username`, `password`) VALUES ('$Username','$password')";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        $insert = true;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUNJAB NATIONAL BANK</title>
    <!-- <link rel="stylesheet" href="stt.css"> -->
    <style>
        <?php include "stt.css" ?>
    </style>
</head>

<body class="punjab">

    <!-- 
<div class="bck">
<div class="out">

   <div class="jjj">
<img src="pnn.jpeg">
</div>
     // -->
    <!-- // echo '<div class="qq">';
    // echo "WELCOME ";
    // echo $_POST["Username"];
    // echo "</div>";

// echo "<br>  You are logged in successfully";

// echo "<br> And your data is also inserted successfully"; -->


    <div class="cc">

        <img src="bbb.png" width="600" height="90">

        <h1 style="font-size:60px;position: absolute; top: 0; right: 0; color: rgb(255, 145, 0)">PUNJAB NATIONAL BANK </h1>


    </div>

    <div class="shru">

        <table>
            <thead style="font-size:35px;position: absolute;top: 1; right: 0">



                <th><a href="http://127.0.0.1:5500/pnb.html" target="_blank"> Home |</a></th>
                                <th> <a href="https://www.pnbindia.in/home.aspx#" target="_blank">About Us |</a> </th>
                <th> <a href="http://127.0.0.1:5500/loggin.html" target="_blank">Login</a></th>




            </thead>

        </table>



        <br><br><br><br><br>
    </div>

    <div>

        <h1 style="text-align: center ;font-size:60px ;height:150px ;background-color:bisque">Login details</h1>
    </div>

    <!-- <div class="mahi" style="display:flex; justify-content:center"> -->

    <?php
    echo '<div class="whol">';


    echo '<div class="cust">';
    echo "USERNAME  : ";
    echo '<div class="cust1">';

    echo $_POST["Username"];
    echo "</div>";
    echo "</div>";


    echo '<div class="pas">';
    echo '<div class="pap1">';
    echo "Password :";
    echo "</div>";

    echo '<div class="pas1">';
    echo $_POST["Password"];


    echo "</div>";
    echo "</div>";
    echo "<br/>";;
    echo "</div>";

    ?>






</body>

</html>