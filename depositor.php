<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <!-- <link rel="stylesheet" href="stt.css"> -->
    <style>
        <?php include "stt.css" ?>
    </style>
</head>

<body class="dashing">


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
    <h1 style="font-size:70px;position: relative; top: 100px; left :550px; color:40">DASHBOARD</h1>
<?php
$fpointer = fopen("deposit.txt", "r") or exit("Unable to open read file!");
echo '<div class="tab1">';

echo '<h1>LIST OF DEPOSITORS</h1>';
echo'<table border="10" width="500" height="400">';

echo '<colgroup span="5"></colgroup>';

echo "<tr>
<th>S.no</th>
<th>Name</th>
<th>A/C No.</th>
<th>Balance</th>
<th>Details</th>
</tr>";




while (!feof($fpointer)) {
    $temp = fgets($fpointer);
    $temp = explode(",", $temp);
    if ($temp[0] != '') {
        echo "<tr> 
        <td>" . $temp[0] . "</td>
<td>" . $temp[1] . "</td> 
<td>" . $temp[2] . "</td>
 <td>" . $temp[3] . "</td>
 <td>" . $temp[4] . "</td>
 </tr>";
    }
}

echo "</table>";
echo "</div>";
fclose($fpointer);


?>
<div class="tab2">
    <h1>LIST OF BORROWERS</h1>
    <table border="10" width="500" height="400">
    
        <colgroup span="5"></colgroup>
      <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>A/C No.</th>
        <th>Balance</th>
        <th>Details</th>
      </tr>
        
    
    
        <tr>
            <td style="text-align:center;"> 1</td>
            <td>        </td>
            <td>        </td>
            <td>        </td>
            <td>  <a href="http://localhost/pnb/borrower.php"target="_blank">click to view</a>      </td>
        </tr>
        <tr>
            <td style="text-align:center;">    2   </td>
            <td>        </td>
            <td>        </td>
            <td>        </td>
            <td>        </td>
            <tr>
                <td style="text-align:center;">    3    </td>
                <td>        </td>
                <td>        </td>
                <td>        </td> 
                <td>        </td>
            </tr>
        </tr>
        <tr>
            <td style="text-align:center;">    4  </td>
            <td>        </td>
            <td>        </td>
            <td>        </td>
            <td>        </td>
        </tr>
        <tr>
            <td style="text-align:center;">    5    </td>
            <td>        </td>
            <td>        </td>
            <td>        </td>
            <td>        </td>
        </tr><tr>
            <td style="text-align:center;">    6    </td>
            <td>        </td>
            <td>        </td>
            <td>        </td>
            <td>        </td>
        </tr><tr>
            <td style="text-align:center;">    7   </td>
            <td>        </td>
            <td>        </td>
            <td>        </td>
            <td>        </td>
        </tr>
        <tr> 
            <td style="text-align:center;">
                8</td>
            
            
            <td></td> 
           
            <td> </td>
             <td> </td>
             <td>        </td>
        </tr>
    </table>
    </div>
    




</body>

</html>