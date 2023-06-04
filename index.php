<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bank";




// // Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// // Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connection established: <br>";
}

$sql="INSERT INTO `login`( `Username`, `password`) VALUES ('[value-2]','[value-3]')";
$result = mysqli_query($conn,$sql);

// $sql = "INSERT INTO `hero` (`firstname`, `lastname`, `email)
// VALUES ('[John]', '[Doe]', '[john@example.com]')";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// // echo "jjfjgdjgjfg";
// mysqli_close($conn);

if ($result) {
    echo "New record created successfully";
} else {
   echo "Error: " . mysqli_error($conn);
}



?>