<html>
<head><title> medi.php </title></head>
<body bgcolor="#FFB6C1">
<center>
<?php
 // Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// this will select the Database sample_db
mysqli_select_db($conn,"healthcare");
 


$query="select * from payment"; 
$result=mysqli_query($conn,$query);
?>
 
<h3> PAYMENT DETAILS </h3>
 
<table border="1">
<tr>
<th> RECIEPT NO </th>
<th> BALANCE </th>
<th> AMOUNT</th>
<th> STATUS</th>
 <th>PAYMENT DATE</th> 
 <th> PATIENT ID</th>
 <th> PAID AMOUNT</th>
 </tr>
 
<?php while($array=mysqli_fetch_row($result)){?>
<tr>
<td><?php echo $array[0];?></td>
<td><?php
$array[1]=$array[2]-$array[6];
 echo $array[1];?></td>
<td><?php echo $array[2];?></td>
<td><?php echo $array[3];?></td>
<td><?php echo $array[4];?></td>
<td><?php echo $array[5];?></td>
<td><?php echo $array[6];?></td>
</tr>


<?php }
 mysqli_free_result($result);
 mysqli_close($conn); ?>
</table>
</body>
</html>

<html>
<body>
<a href="medicine.html">ENTER MEDICINE DETAILS</a>
</body>
</html>