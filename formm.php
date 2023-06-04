<?php

$INSERT=False;
if (isset($_POST['name'])) 
{
    


$servername="localhost";
$username="root";
$password="";
$database="formm";

$conn= mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
die ("Error connecting".mysqli_connect_error());

}
else{

    // echo "Connected successfully";
}


$name=$_POST["name"];

$address=$_POST["address"];

$city=$_POST["city"];

$sql="INSERT INTO `formm`.`account`(`NAME`, `ADDRESS`, `CITY`) VALUES ('$name','$address','$city')";

$result = mysqli_query($conn,$sql);


if ($result) {
//    echo "Successfully inserted";
    $insert=true;
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
    <link rel="stylesheet" href="stt.css">
</head>

<body class="fm">

<div class="logo">

<img src="looo.webp" width="150" height="100">

<h1 style="font-size:70px;position: absolute; top: 0; right: 0; color: rgb(255, 145, 0)">PUNJAB NATIONAL BANK
</h1>
</div>



<div class="hh">
<div class="credentials">


    <table>

        <h1>
            <p1>Dashboard |</p1>
            <p2>Open A/c |</p2>
            <p3>Loan |</p3>
            <p4>Deposit </p4>
        </h1>

    </table>

</div>
</div>
<br>
<p style="text-align:center; font-size:80px;">Account Opening details</p>
<!-- <div class="bck">
<div class="out"> -->

   <!-- <div class="jjj"> -->
<!-- <img src="pnn.jpeg"> -->
</div>
    <?php

echo '<div class="whole">';
    echo '<div class="custo">';
    echo "Customer name  : ";
    echo '<div class="custo1">';
    echo $_POST["name"];
    echo "</div>";
    echo "</div>";

    echo "<br/>";

    echo '<div class="adda">';
    echo "Address  : ";
    echo '<div class="adda1">';
    echo $_POST["address"];
    echo "</div>";
    echo "</div>";
    echo "<br/>";

 echo '<div class="cty">';
    echo "City : ";
    echo '<div class="cty1">';
    echo $_POST["city"];
    
    echo "</div>";
    echo "</div>";
    echo "<br/>";

    echo "</div>";
// echo "<br>  You are logged in successfully";

// echo "<br> And your data is also inserted successfully";

?>

<!-- </div>
</div> -->
</body>

</html>

