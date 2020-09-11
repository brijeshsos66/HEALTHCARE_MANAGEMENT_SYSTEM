<!DOCTYPE html>
<html>
<head>
    <title> mdic.php</title>
    <link href="css/tables.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .active {
            background-color: #4CAF50;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 17px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .topnav a:hover, .dropdown:hover .dropbtn {
            background-color: #555;
            color: white;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child), .dropdown .dropbtn {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }

            .topnav.responsive .dropdown {
                float: none;
            }

            .topnav.responsive .dropdown-content {
                position: relative;
            }

            .topnav.responsive .dropdown .dropbtn {
                display: block;
                width: 100%;
                text-align: left;
            }
        }

        h1 {
            font-size: 50px;
            color: black;
        }

        .logo {
            float: right;
            color: #aaa;
            font-size: 3vh;
            padding: 8px;
            letter-spacing: 5px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .activity .dropbtn {
            color: black;
            border: 3px solid #555;
            padding: 10px;
            border-radius: 5px;
        }

        .doctor {
            margin: 0 10vw;
        }

        .centering {
            margin: 10vh 0;
            float: right;
        }

        .bodybg {
            background: url("hm2.jpg");
            background-size: cover;
			height: 200vh;
        }
		
		
		.botdown{
			background: transparent;
			margin-top: 5vh;
			margin-left: 40vw;
		}
		
		.botdown .dropbtn{
			background: #333;
		}
    </style>
</head>
<body class="bg">
<div class="topnav" id="myTopnav">
    <a href="1st.html" class="active">Home</a>
    <a href="about.html">About Us</a>
    <a href="contact.html">Contact</a>
    <a href="mdic.php">Medicines Available</a>
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
		height: 200vh;
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
	.delbtn{
		padding: 10px;
		border-radius: 5px;
		border: 1px black solid;
		text-decoration: none;
		background: #333;
		color: white;
	}
	
	.tocenter{
		width: 100vw;
		margin-left: 50vw;
		transform: translateX(-50%);
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


    $query = "select * from medicine"; // Fetch all the records from the table customer
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
<section class="tocenter">
	<a href="delete.html" class="delbtn">DELETE MEDICINE RECORD</a>
</section>
<section class="topnav botdown">
	<div class="dropdown">
    <button class="dropbtn">UPDATE MEDICINE RECORD
    <i class="fa fa-caret-down"></i> 
    </button>
    <div class="dropdown-content">
      <a href="up1.html">UPDATE MEDICINE ID</a>
      <a href="up2.html">UPDATE MEDICINE NAME</a>
	   <a href="up3.html">UPDATE MANUFACTURER</a>
	   <a href="up4.html">UPDATE PRICE</a>
	    <a href="up5.html">UPDATE QUANTITY</a>
		 <a href="up6.html">UPDATE EXPIRY DATE</a>

    </div>
  </div> 
</div>
</section>


</body>
</html>
