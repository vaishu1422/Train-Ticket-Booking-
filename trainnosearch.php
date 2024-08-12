<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap">
    <style>
        body {
         font-family: 'Poppins', sans-serif;
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         outline: none;
         border: none;
         text-decoration: none;
    
         display: flex;
         align-items: center;
         justify-content: center;
         height: 100vh;
         margin-bottom: -150px;
         overflow: hidden; /* To prevent scrollbars due to the video */
      }

      video {
         position: fixed;
         right: 0;
         bottom: 0;
         min-width: 100%;
         min-height: 100%;
         width: auto;
         height: auto;
         z-index: -1;
      }


        .sidebar {
            position: fixed;
            left: 0;
            width: 250px;
            height: 100%;
            background: #042331;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar header {
            font-size: 22px;
            color: white;
            text-align: center;
            line-height: 70px;
            background: #063146;
            user-select: none;
            width: 100%;
        }

        .sidebar ul {
            list-style: none;
            padding: 20px 0;
            width: 100%;
        }

        .sidebar ul a {
            display: block;
            height: 100%;
            line-height: 65px;
            font-size: 16px;
            color: white;
            padding-left: 20px;
            box-sizing: border-box;
            border-bottom: 1px solid rgba(255, 255, 255, .1);
            transition: .4s;
        }

        .sidebar ul a:hover {
            padding-left: 30px;
            background: #063146;
        }

        .container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .1);
            padding: 40px;
            width: 400px;
            text-align: center;
        }

        .container h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .container form .inputBox {
            margin-bottom: 20px;
            text-align: left;
        }

        .container form .inputBox span {
            display: block;
            color: #555;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .container form .inputBox input,
        .container form .inputBox select {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid rgba(0, 0, 0, .2);
            color: #555;
            transition: border-color 0.3s ease;
        }

        .container form .inputBox input:focus,
        .container form .inputBox select:focus {
            border-color: #3498db;
        }

        .container form .flexbox {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
        }

        .container form .submit-btn {
            width: 100%;
            background: linear-gradient(45deg, #3498db, #2ecc71);
            margin-top: 20px;
            padding: 14px;
            font-size: 16px;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;
            transition: .2s linear;
        }

        .container form .submit-btn:hover {
            opacity: .8;
        }
        nav{
        width:100%;
        position:absolute;
        top:0;
        left:0;
        padding:20px 8%;
        display:flex;
        align-items:center;
        justify-content: start;
        background-color: #131212;
    }
    nav ul li{
        list-style:none;
        display:inline-block;
        margin-left:100px;
       
        
    }
    nav ul li a{
        text-decoration:none;
        color:#fff;
        font-size: 17px;
    }
    iframe{
    width: 431px;
    height: 351px;
}
.profile-dropdown {
        position: relative;
    }

    .profile-dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        z-index: 1;
        right: 0;
    }

    .profile-dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .profile-dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .profile-dropdown:hover .profile-dropdown-content {
        display: block;
    }
    .logo {
    width: 70px; /* Adjust width as needed */
    height: 70px; /* Maintain aspect ratio */
    margin-right: 20px; /* Add some spacing between the logo and navigation links */
}

  


    </style>
</head>

<body>
    <video autoplay loop muted plays-inline class="back-video">
        <source src="train_video.mp4" type="video/mp4">
    </video>
    <nav>
    <img src="logo.jpeg" class="logo">
        <!--img src= "" class="logo"-->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="weath.html">Weather</a></li>
            <li><a href="tourism.html">Tourism</a></li>
            <li><a href="contactus.html">Contact us</a></li>
            <li><a href="map.html">Map</a></li>
            
            <li class="profile-dropdown">
                <a href="#">
                    <i class="fas fa-user"></i> <!-- Profile icon -->
                    Profile
                </a>
                <div class="profile-dropdown-content">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <?php echo $_SESSION['admin_name']; ?> <!-- Display admin name -->
                    </a>
                    <a href="#">
                        Email: <?php echo $_SESSION['admin_email']; ?>
                    </a>
                    <a href="#">
                        User Type: <?php echo $_SESSION['admin_type']; ?>
                    </a>
                    <!-- Add more profile details here if needed -->
                    <a href="history.php">
                        Booking History 
                        <i class="fas fa-history"></i> <!-- Booking history icon -->
                    </a>
                    <a href="logout.php">
                        Logout
                        <i class="fas fa-sign-out-alt"></i> <!-- Logout icon -->
                    </a>
                </div>
            </li>
            
        </ul>

    </nav>
    
    <div class="sidebar">
        <header>E booking</header>
        <ul>
            
            <li><a href="index2.php">View Train</a></li>
            <li><a href="searchbwstnhtml.php">Train between stations</a></li>
            <li><a href="fareenquiry.php">Fare enquiry</a></li>
            <li><a href="index2.php">Seat Availability</a></li>
            <li><a href="trainnosearch.php">Search by train no</a></li>
            
        </ul>
    </div>

    <div class="container">
        <h1>Train Details</h1>
        <form onsubmit="fetchTrainDetails(event)">
            <div class="flexbox">
                <div class="inputBox">
                    <span>Train Number</span>
                    <input type="text" id="trainNumberInput" class="input" required>
                </div>
            </div>
            <button type="submit" class="submit-btn">Search</button>
        </form>
    </div>

    <script>
        function fetchTrainDetails(event) {
            event.preventDefault();
            const trainNumber = document.getElementById('trainNumberInput').value;
    
            // Redirect to the result page with the Train number as a query parameter
            window.location.href = `trainresult.php?trainNumber=${trainNumber}`;
        }
    </script>
</body>

</html>
