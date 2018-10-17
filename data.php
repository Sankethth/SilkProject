<html>
<?php

echo '<h2>ADMIN PAGE</h2>';

//session_start();
//$ph_number =  $_SESSION['name'] ;
//echo $ph_number;




  $db = mysqli_connect('localhost', 'root', '', 'new_seri');

  if (isset($_POST['Display']))
 {
  $user_check_query = "SELECT * FROM form_1";
  $result = mysqli_query($db, $user_check_query);
  //$user = mysqli_fetch_assoc($result);
echo "<html> <body>";
echo "<table border='1' id= results>";
  echo "		<tr>
<th>Name</th>
<th>Registrstion Number</th>
<th>Month</th>
<th>Year</th>
<th>Lots(Variety Wise)</th>
<th>Quantity of Cocoon</th>
<th>Seed Cocoon Ratio</th>
<th>Quantity of Seed(By number)</th>
<th>Quntity of Seed(By weight)</th>
<th>Average % pairs</th>
<th>Average % Dfls</th>
<th>Loose Egg Recovery/kg</th>
<th>Seed Purchased </th>
<th>Seed Reared </th>
<th>SilkWorms Sold</th>
<th>Diseases/th>
<th>Date</th>
</tr>  ";

while ( $user = mysqli_fetch_assoc($result))
{
   echo "<tr>";

  echo "<td>" . $user['sp_name'] . "</td>";
  echo"<td>". $user['sp_regno']."</td>";
  echo"<td>". $user['sp_month']."</td>";
    
   echo"<td>". $user['year']."</td>";
   echo"<td>". $user['sp_lots']."</td>";
   echo"<td>". $user['seed_cocoon_produced']."</td>";
   echo"<td>". $user['cocoon_ratio']."</td>";
   echo"<td>". $user['seed_number']."</td>";
   echo"<td>". $user['seed_weight']."</td>";
   echo"<td>". $user['pairs']."</td>";

    echo"<td>". $user['dfls'] ."</td>";
    echo"<td>". $user['loose_egg'] ."</td>";
    echo"<td>". $user['incidence_pebrine'] ."</td>";
    echo"<td>". $user['pairs_below_norms'] ."</td>";
    
    echo "</tr>";
}
    echo "</table>";

    echo "</body> </html>";

}

if (isset($_POST['reg']))
{
  $temp=$_POST['reg_no'];
  $user_check_query = "SELECT * FROM form_1 WHERE sp_regno=$temp";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if($user)
  {
      
echo "<table border='1' id= results>";

echo "	<tr>
<th>Name</th>
<th>Registration Number</th>
<th>Month</th>
<th>Year</th>
<th>Lots(Variety Wise)</th>
<th>Seed Produced</th>
<th>Cocoon Ratio</th>
<th>Quantity of Seed(By number)</th>
<th>Quntity of Seed(By weight)</th>
<th>Average % pairs</th>
<th>Average % Dfls</th>
<th>Loose Egg Recovery/kg</th>
<th>Seed Purchased </th>
<th>Seed Reared </th>
<th>SilkWorms Sold</th>
<th>Diseases/th>
<th>Date</th>
</tr>  ";

echo "<tr>";
      
  echo "<td>" . $user['sp_name'] . "</td>";
  echo"<td>". $user['sp_regno']."</td>";
  echo"<td>". $user['sp_month']."</td>";
  echo"<td>". $user['year']."</td>";
  echo"<td>". $user['sp_lots']."</td>";
  echo"<td>". $user['seed_cocoon_produced']."</td>";
  echo"<td>". $user['cocoon_ratio']."</td>";
  echo"<td>". $user['seed_number']."</td>";
  echo"<td>". $user['seed_weight']."</td>";
  echo"<td>". $user['pairs']."</td>";
  echo"<td>". $user['dfls'] ."</td>";
  echo"<td>". $user['loose_egg'] ."</td>";
  echo"<td>". $user['incidence_pebrine'] ."</td>";
  echo"<td>". $user['pairs_below_norms'] ."</td>";
    
    echo "</tr>";

    echo "</table>";
}
else {
     echo "<script type='text/javascript'>alert('Registration number not found');</script>";
    // header('location: admin.php');
}
}

if (isset($_POST['year_check']))
{
  $application_type=$_POST['year'];
  //echo $application_type;
  $user_check_query = "SELECT * FROM form_1 WHERE sp_year='year'";
  $result = mysqli_query($db, $user_check_query);
  //$user = mysqli_fetch_assoc($result);
echo "<html> <body>";
echo "<table border='1' id= results>";
echo "		<tr>
<th>Name</th>
<th>Registration Number</th>
<th>Month</th>
<th>Year</th>
<th>Lots(Variety Wise)</th>
<th>Seed Produced</th>
<th>Cocoon Ratio</th>
<th>Quantity of Seed(By number)</th>
<th>Quntity of Seed(By weight)</th>
<th>Average % pairs</th>
<th>Average % Dfls</th>
<th>Loose Egg Recovery/kg</th>
<th>Seed Purchased </th>
<th>Seed Reared </th>
<th>SilkWorms Sold</th>
<th>Diseases/th>
<th>Date</th>
</tr>  ";

while ( $user = mysqli_fetch_assoc($result))
{
  echo "<tr>";
      
  echo "<td>" . $user['sp_name'] . "</td>";
  echo"<td>". $user['sp_regno']."</td>";
  echo"<td>". $user['sp_month']."</td>";
  echo"<td>". $user['year']."</td>";
  echo"<td>". $user['sp_lots']."</td>";
  echo"<td>". $user['seed_cocoon_produced']."</td>";
  echo"<td>". $user['cocoon_ratio']."</td>";
  echo"<td>". $user['seed_number']."</td>";
  echo"<td>". $user['seed_weight']."</td>";
  echo"<td>". $user['pairs']."</td>";
  echo"<td>". $user['dfls'] ."</td>";
  echo"<td>". $user['loose_egg'] ."</td>";
  echo"<td>". $user['incidence_pebrine'] ."</td>";
  echo"<td>". $user['pairs_below_norms'] ."</td>";
    
    echo "</tr>";

}
    echo "</table>";

    echo "</body> </html>";

}

if (isset($_POST['cocoon_variety_check']))
{
  $temp=$_POST['variety'];
  //echo $rear_house_owner;
  $user_check_query = "SELECT * FROM form_1 WHERE sp_cocoon_produced LIKE '%$temp'";
  $result = mysqli_query($db, $user_check_query);
  //$user = mysqli_fetch_assoc($result);
echo "<html> <body>";
echo "<table border='1' id= results>";
echo "		<tr>
<th>Name</th>
<th>Registration Number</th>
<th>Month</th>
<th>Year</th>
<th>Lots(Variety Wise)</th>
<th>Seed Produced</th>
<th>Cocoon Ratio</th>
<th>Quantity of Seed(By number)</th>
<th>Quntity of Seed(By weight)</th>
<th>Average % pairs</th>
<th>Average % Dfls</th>
<th>Loose Egg Recovery/kg</th>
<th>Seed Purchased </th>
<th>Seed Reared </th>
<th>SilkWorms Sold</th>
<th>Diseases/th>
<th>Date</th>
</tr>  ";

while ( $user = mysqli_fetch_assoc($result))
{
   echo "<tr>";
      
  echo "<td>" . $user['sp_name'] . "</td>";
  echo"<td>". $user['sp_regno']."</td>";
  echo"<td>". $user['sp_month']."</td>";
  echo"<td>". $user['year']."</td>";
  echo"<td>". $user['sp_lots']."</td>";
  echo"<td>". $user['seed_cocoon_produced']."</td>";
  echo"<td>". $user['cocoon_ratio']."</td>";
  echo"<td>". $user['seed_number']."</td>";
  echo"<td>". $user['seed_weight']."</td>";
  echo"<td>". $user['pairs']."</td>";
  echo"<td>". $user['dfls'] ."</td>";
  echo"<td>". $user['loose_egg'] ."</td>";
  echo"<td>". $user['incidence_pebrine'] ."</td>";
  echo"<td>". $user['pairs_below_norms'] ."</td>";
    
    echo "</tr>";
}
    echo "</table>";

    echo "</body> </html>";



if (isset($_POST['check_ratio']))
{
  $temp=$_POST['ratio'];
  //echo $rear_house_owner;
  $user_check_query = "SELECT * FROM form_1 WHERE cocoon_ratio >=$temp";
  $result = mysqli_query($db, $user_check_query);
  //$user = mysqli_fetch_assoc($result);
echo "<html> <body>";
echo "<table border='1' id= results>";
echo "		<tr>
<th>Name</th>
<th>Registration Number</th>
<th>Month</th>
<th>Year</th>
<th>Lots(Variety Wise)</th>
<th>Seed Produced</th>
<th>Cocoon Ratio</th>
<th>Quantity of Seed(By number)</th>
<th>Quntity of Seed(By weight)</th>
<th>Average % pairs</th>
<th>Average % Dfls</th>
<th>Loose Egg Recovery/kg</th>
<th>Seed Purchased </th>
<th>Seed Reared </th>
<th>SilkWorms Sold</th>
<th>Diseases/th>
<th>Date</th>
</tr>  ";


while ( $user = mysqli_fetch_assoc($result))
{
  echo "<tr>";
      
  echo "<td>" . $user['sp_name'] . "</td>";
  echo"<td>". $user['sp_regno']."</td>";
  echo"<td>". $user['sp_month']."</td>";
  echo"<td>". $user['year']."</td>";
  echo"<td>". $user['sp_lots']."</td>";
  echo"<td>". $user['seed_cocoon_produced']."</td>";
  echo"<td>". $user['cocoon_ratio']."</td>";
  echo"<td>". $user['seed_number']."</td>";
  echo"<td>". $user['seed_weight']."</td>";
  echo"<td>". $user['pairs']."</td>";
  echo"<td>". $user['dfls'] ."</td>";
  echo"<td>". $user['loose_egg'] ."</td>";
  echo"<td>". $user['incidence_pebrine'] ."</td>";
  echo"<td>". $user['pairs_below_norms'] ."</td>";
    
    echo "</tr>";
}
    echo "</table>";

    echo "</body> </html>";

}



if (isset($_POST['check_avg_pair']))
{
  $temp = $_POST['avg'];
  echo $date_q;
  $user_check_query = "SELECT * FROM producer WHERE pairs >=$temp ";
  $result = mysqli_query($db, $user_check_query);
  //$user = mysqli_fetch_assoc($result);
echo "<html> <body>";
echo "<table border='1' id= results>";
echo "		<tr>
<th>Name</th>
<th>Registration Number</th>
<th>Month</th>
<th>Year</th>
<th>Lots(Variety Wise)</th>
<th>Seed Produced</th>
<th>Cocoon Ratio</th>
<th>Quantity of Seed(By number)</th>
<th>Quntity of Seed(By weight)</th>
<th>Average % pairs</th>
<th>Average % Dfls</th>
<th>Loose Egg Recovery/kg</th>
<th>Seed Purchased </th>
<th>Seed Reared </th>
<th>SilkWorms Sold</th>
<th>Diseases/th>
<th>Date</th>
</tr>  ";
;
while ( $user = mysqli_fetch_assoc($result))
{
   echo "<tr>";
      
  echo "<td>" . $user['sp_name'] . "</td>";
  echo"<td>". $user['sp_regno']."</td>";
  echo"<td>". $user['sp_month']."</td>";
  echo"<td>". $user['year']."</td>";
  echo"<td>". $user['sp_lots']."</td>";
  echo"<td>". $user['seed_cocoon_produced']."</td>";
  echo"<td>". $user['cocoon_ratio']."</td>";
  echo"<td>". $user['seed_number']."</td>";
  echo"<td>". $user['seed_weight']."</td>";
  echo"<td>". $user['pairs']."</td>";
  echo"<td>". $user['dfls'] ."</td>";
  echo"<td>". $user['loose_egg'] ."</td>";
  echo"<td>". $user['incidence_pebrine'] ."</td>";
  echo"<td>". $user['pairs_below_norms'] ."</td>";
    
    echo "</tr>";
}
    
    echo "</table>";

    echo "</body> </html>";

}

}



?>

</html>
