<!DOCTYPE html>
<html>
<head>
    <title> mdic.php</title>
    <link href="css/tables.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <style>
    </style>
</head>
<body class="bg">
<div class="topnav" id="myTopnav">
    <a href="1st.html">Home</a>
    <a href="about.html">About Us</a>
    <a href="contact.html">Contact</a>
    <a href="mdic.php" class="active">Medicines Available</a>
    <div class="dropdown">
        <button class="dropbtn">Login
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="doctor.html">Doctor</a>
            <a href="patient.html">Patient</a>
        </div>
    </div>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    <div class="logo">Health Care</div>
</div>
<style>
    .bg{
        background: url("s.jpg") no-repeat;
        background-size: cover;
    }
    .mytable{
        background-color: rgba(0,0,0,0.7);
    }
    h3{
        font-size: 50px;
        font-weight: 900;
        color: white;
        text-shadow: 2px 2px black;
        letter-spacing: 5px;
    }
</style>
<center>
    <?php
    // Create connection
    $conn = new mysqli('localhost', 'root', '');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // this will select the Database sample_db
    mysqli_select_db($conn, "healthcare");


    $query = "CALL sp()"; // Fetch all the records from the table customer
    $result = mysqli_query($conn, $query);
    ?>

    <h3> MEDICINE DETAILS </h3>

    <section class="mytable">
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th> MEDICINE ID</th>
                    <th> MEDICINE NAME</th>
                    <th> MANUFACTURER</th>
                    <th> PRICE</th>
                    <th>QUANTITY</th>
                    <th> EXPIRY DATE</th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                <?php while ($array = mysqli_fetch_row($result)) { ?>
                    <tr>
                        <td><?php echo $array[0]; ?></td>
                        <td><?php echo $array[1]; ?></td>
                        <td><?php echo $array[2]; ?></td>
                        <td><?php echo $array[3]; ?></td>
                        <td><?php echo $array[4]; ?></td>
                        <td><?php echo $array[5]; ?></td>
                    </tr>
                <?php }
                mysqli_free_result($result);
                mysqli_close($conn); ?>
                </tbody>
            </table>
        </div>
    </section>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

</body>
</html>
