<?php 
session_start(); 

include 'navbar.html'; 
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
    <title>Latest Movie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body> 
      

 <?php

    $sql = "SELECT DISTINCT moviename FROM rating ORDER BY rating DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    echo '<table class="table table-hover" style="margin-left:5em;">
    <tr>
       <th style="font-size:48px; font-weight:bold; color:rgb(100,100,155);">Top Rated Movie</th>
    </tr> ';
    while($row = mysqli_fetch_assoc($result)) {
$mname = $row["moviename"];
          echo " <tr>";
                    echo "<td style='font-size:24px; color:rgb(76, 75, 75);'>";
                    echo "<b>" .$row["moviename"] . "</b>";
                    echo "</td>";
					
       }
       
    
    echo " </table>";
} else {
    echo "0 results";
}

mysqli_close($conn);


?>
   <footer>
       
       <div class="container">
     
  <h4 style="text-align: center; background-color: lightgrey; width: 100%;"> &copy; Studio Ghibli</h4>
       </div>
   </footer>
 </body>

 </html>