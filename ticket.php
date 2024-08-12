<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "railway_table";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // Check if email is passed as a parameter in the URL
    if (isset($_GET['email'])) {
        // Store the email in session
        $_SESSION['email'] = $_GET['email'];
    } else {
        // Redirect to login page if email is not provided
        header('location: login_form.php');
        exit();
    }
}

// Extract booking details from the query parameters
$email = $_SESSION['email'];
$trainName = $_GET['TrainName'];
$from = $_GET['From'];
$to = $_GET['To'];
$totalFare = $_GET['totalFare'];
$seating = $_GET['Seating'];

// Insert the booking details into the history table
$sql = "INSERT INTO history (`email`, `Train name`, `From`, `To`, `Total fare`, `Seating`) VALUES ('$email', '$trainName', '$from', '$to', '$totalFare', '$seating')";

if ($conn->query($sql) === TRUE) {
    echo "Booking details added to history successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
        }
        p {
            margin: 5px 0;
        }
        strong {
            font-weight: bold;
        }
        #confirmationDetails {
            margin-top: 20px;
        }
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
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
        <br>
        <br>
        <br>
        <br>
    <div class="container">
        <h1>Booking Confirmation</h1>

        <div id="confirmationDetails"></div>

        <!-- Button to send confirmation via email -->
        <button id="sendEmailButton" onclick="redirectToMailOption()">Send Confirmation via Email</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const confirmationDetailsDiv = document.getElementById('confirmationDetails');

            // Function to extract query parameters from URL
            function getQueryParam(name) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(name);
            }

            // Display confirmation details
            const email = '<?php echo $_SESSION['email']; ?>'; // Get email from session or URL parameter
            const From = getQueryParam('From');
            const To = getQueryParam('To');
            const Seating = getQueryParam('Seating');
            const TrainNumber = getQueryParam('TrainNumber');
            const TrainName = getQueryParam('TrainName');
            const passengers = JSON.parse(getQueryParam('passengers'));

            confirmationDetailsDiv.innerHTML += `<p><strong>From:</strong> ${From}</p>`;
            confirmationDetailsDiv.innerHTML += `<p><strong>To:</strong> ${To}</p>`;
            confirmationDetailsDiv.innerHTML += `<p><strong>Seating:</strong> ${Seating}</p>`;
            confirmationDetailsDiv.innerHTML += `<p><strong>Train Number:</strong> ${TrainNumber}</p>`;
            confirmationDetailsDiv.innerHTML += `<p><strong>Train Name:</strong> ${TrainName}</p>`;
            confirmationDetailsDiv.innerHTML += `<p><strong>Email:</strong> ${email}</p>`;

            confirmationDetailsDiv.innerHTML += '<h2>Passenger Details</h2>';
            passengers.forEach((passenger, index) => {
                confirmationDetailsDiv.innerHTML += `<p><strong>Passenger ${index + 1}:</strong></p>`;
                confirmationDetailsDiv.innerHTML += `<p><strong>Name:</strong> ${passenger.name}</p>`;
                confirmationDetailsDiv.innerHTML += `<p><strong>Age:</strong> ${passenger.age}</p>`;
                confirmationDetailsDiv.innerHTML += `<p><strong>Gender:</strong> ${passenger.gender}</p>`;
            });

            const totalFare = parseFloat(getQueryParam('totalFare'));

            if (!isNaN(totalFare)) {
                confirmationDetailsDiv.innerHTML += `<p><strong>Total Fare:</strong> Rs${totalFare.toFixed(2)}</p>`;
            } else {
                confirmationDetailsDiv.innerHTML += `<p><strong>Total Fare:</strong> N/A</p>`;
            }
        });

        function redirectToMailOption() {
            const From = encodeURIComponent(getQueryParam('From'));
            const To = encodeURIComponent(getQueryParam('To'));
            const Seating = encodeURIComponent(getQueryParam('Seating'));
            const passengers = encodeURIComponent(getQueryParam('passengers'));
            const totalFare = encodeURIComponent(getQueryParam('totalFare'));
            
            const url = `mailoption.html?From=${From}&To=${To}&Seating=${Seating}&passengers=${passengers}&totalFare=${totalFare}`;
            window.location.href = url;
        }

        // Function to extract query parameters from URL
        function getQueryParam(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }

    </script>
</body>
</html>
