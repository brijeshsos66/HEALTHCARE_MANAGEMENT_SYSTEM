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
 
 
$sql="INSERT INTO patient (P_SSN,P_NAME,GENDER,AGE,PHONE) VALUES ('$_POST[ptid]','$_POST[pname]','$_POST[gen]','$_POST[age]','$_POST[ph]')";
 
if ($conn->query($sql) === TRUE) {
    echo "New patient record created successfully!!!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
</body>
</html>