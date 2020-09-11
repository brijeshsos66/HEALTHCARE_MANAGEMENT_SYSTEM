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
 $query="SELECT M_ID FROM medicine WHERE M_ID='$_POST[mid]'";
 $result=mysqli_query($conn,$query);
 $array=mysqli_fetch_row($result);
 if($array[0]>0)
 { 
 
$sql="DELETE FROM medicine WHERE M_ID='$_POST[mid]'";
 
if ($conn->query($sql) === TRUE) {
    echo " Medicine record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
 else
 echo "ATTEMPT TO DELETE INVALID RECORD";
mysqli_close($conn);
?>
</body>
</html>