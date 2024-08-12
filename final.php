<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Confirmed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Global Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Hero Section Styles */
        .hero {
            position: relative;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(12, 3, 51, 0.3), rgba(12, 3, 51, 0.3)), url('pexels_videos_2642258 (2160p).mp4');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero h1 {
            color: #fff;
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            color: #fff;
            font-size: 1.2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Logo Styles */
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 80px;
            height: auto;
        }

        /* Confirmation Container Styles */
        .confirmation-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            text-align: center;
        }

        .confirmation-container h1 {
            color: #3498db;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .confirmation-container p {
            color: #333;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Footer Styles */
        .footer {
            position: absolute;
            bottom: 20px;
            color: #666;
            font-size: 14px;
        }
        *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:'poppins',sans-serif;
    }
    
    .hero{
        width:100%;
        height:100vh;
        background-image:linear-gradient(rgba(12,3,51,0.3),rgba(12,3,51,0.3));
        position:relative;
        padding:0 5%;
        display:flex;
        align-items:center;
        justify-content:center;
        
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
    .content{
        text-align:center;
        
    }
    .content h1{
        font-size:100px;
        color:#fff;
        font-family: 600;
    }
    .content a{
        text-decoration: none;
        display:inline-block;
        color:#fff;
        font-size:24px;
        border:2px solid #fff;
        padding:14px 70px;
        border-radius:50px;
        margin-top:20px;
    }
    .background-clip{
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: -1;
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
        <div class="confirmation-container">
            <h1>Happy Journey!</h1>
            <p>Your ticket is confirmed. Thank you for choosing our service.</p>
        </div>
        <div class="footer">
            &copy; 2024 Ticket Confirmed. All rights reserved.
        </div>
    </div>
</body>

</html>
