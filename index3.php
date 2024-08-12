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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Booking Form</title>

    <style>
         @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap');
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: url('your-new-background-image.jpg') no-repeat center center fixed;
        background-size: cover;
    }

    .sidebar {
        position: fixed;
        left: 0;
        width: 250px;
        height: 100%;
        background: linear-gradient(to right, #004e92, #000428);
        color: white;
    }

    .sidebar header {
        font-size: 22px;
        text-align: center;
        line-height: 70px;
        background: #063146;
        user-select: none;
    }

    .sidebar ul a {
        display: block;
        height: 100%;
        width: 100%;
        line-height: 65px;
        font-size: 18px;
        color: white;
        padding-left: 20px;
        box-sizing: border-box;
        border-top: 1px solid rgba(255, 255, 255, .1);
        border-bottom: 1px solid black;
        transition: .4s;
    }

    .container {
        position: relative;
        z-index: 1;
        margin-top: 50px;
        text-align: center;
        color: white;
    }

    .form-group {
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 10px;
        padding: 20px;
        width: 400px;
        margin: auto;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    .form-group h1 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #333;
    }

    #input-group {
        width: 100%;
        margin: 10px 0;
        padding: 15px;
        border: none;
        border-radius: 5px;
        outline: none;
        background: rgba(255, 255, 255, 0.9);
        color: #333;
        font-size: 16px;
        box-sizing: border-box;
    }

    select#input-group {
        width: 100%;
        margin: 10px 0;
        padding: 15px;
        border: none;
        border-radius: 5px;
        outline: none;
        background: rgba(255, 255, 255, 0.9);
        color: #333;
        font-size: 16px;
        box-sizing: border-box;
    }

    .btn {
        padding: 15px 20px;
        margin-top: 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
    }

    .btn-warning {
        background-color: #ffc107;
        color: #333;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
    }

    .back-video {
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: -1;
        width: 100%;
        height: auto;
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
    <script src="script.js"></script> 
</head>

<body>
    <div class="sidebar">
        <header>E booking</header>
        <ul>
            
            <li><a href="index2.php">View Train</a></li>
            <li><a href="searchbwstnhtml.php">Train Between Stations</a></li>
            <li><a href="fareenquiry.php">Fare Enquiry</a></li>
            <li><a href="index2.php">Seat Availability</a></li>
            <li><a href="trainnosearch.php">Search by Train No</a></li>
            
        </ul>
    </div>

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
    <div class="container">
        <form class="form-group" onsubmit="fetchTrainDetails(event)">
            <h1>Train Booking</h1>
            <div>
                <input type="text" id="From" placeholder="From">
                <br>
                <input type="text" id="To" placeholder="To">
                <br>
                <input type="date" id="DepartureDate" placeholder="Departure Date">
                <br>
                <select id="Seating">
                    <option value="">Seating</option>
                    <option value="1st Ac">1st Ac</option>
                    <option value="2nd Ac">2nd Ac</option>
                    <option value="3rd Ac">3rd Ac</option>
                    <option value="Sleeper">Sleeper</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Search</button>
            <button type="reset" class="btn btn-primary">Clear</button>
            <div id="result"></div>
        </form>
    </div>


</body>

</html>
