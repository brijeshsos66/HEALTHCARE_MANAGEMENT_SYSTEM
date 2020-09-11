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
$query="SELECT P_SSN FROM patient WHERE P_SSN='$_POST[p]'";
 $result=mysqli_query($conn,$query);
 $array=mysqli_fetch_row($result);
 if($array[0]>0)
 {
 
$sql="UPDATE patient SET P_NAME ='$_POST[pid1]' WHERE P_NAME='$_POST[pid]' AND P_SSN='$_POST[p]'";
 
if ($conn->query($sql) === TRUE) {
    echo " Patient record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
 else
 {
	  echo "INVALID PATIENT ID";
 }

mysqli_close($conn);
?>
</body>
</html>