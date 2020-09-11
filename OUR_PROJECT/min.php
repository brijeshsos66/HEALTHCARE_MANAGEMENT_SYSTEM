<html>
<body>
<?php
 
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// this will select the Database sample_db
mysqli_select_db($conn,"healthcare");
 
//$a='$_POST[price]'; 
//$b='$_POST[qty]';
//$result=mysqli_query($conn,$query);
//$array=mysqli_fetch_row($result);

//if($a>0)

$sql="INSERT INTO medicine () VALUES ('$_POST[mid]','$_POST[mname]','$_POST[man]','$_POST[price]','$_POST[qty]','$_POST[ed]')";
 
if ($conn->query($sql) === TRUE) 
    echo "New medicine record created successfully";
else 
    echo "Error: " . $sql . "<br>" . $conn->error;
	
mysqli_close($conn); ?>

</body>
</html>