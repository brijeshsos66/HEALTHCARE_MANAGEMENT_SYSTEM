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
 

// create INSERT query
 $query="SELECT M_ID FROM medicine WHERE M_ID='$_POST[mname]'";
 $result=mysqli_query($conn,$query);
 $array=mysqli_fetch_row($result);
 if($array[0]>0)
 {
$sql="INSERT INTO prescription () VALUES ('$_POST[presid]','$_POST[mq]',20,'$_POST[pname]','$_POST[mname]')";
 
if ($conn->query($sql) === TRUE) {
    echo "New prescription record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
 else
	 echo "MEDICINE NOT AVAILABLE";
mysqli_close($conn);
?>
</body>
</html>