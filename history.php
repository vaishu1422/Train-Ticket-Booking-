<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin_email'])) {
    // Redirect to login page if not logged in
    header('location: login_form.php');
    exit();
}

// Include the database configuration file
include_once 'confighist.php';

// Fetch all rows from history table where email matches logged-in user's email
$sql = "SELECT * FROM history WHERE email = '{$_SESSION['admin_email']}'";
$result = mysqli_query($conn, $sql);

// Check for SQL query execution errors
if (!$result) {
    die("Error executing the query: " . mysqli_error($conn));
}

// Delete record if delete button is clicked
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM history WHERE id = $delete_id";
    $delete_result = mysqli_query($conn, $delete_query);

    // Check if deletion was successful
    if ($delete_result) {
        // Redirect to this page to refresh the table after deletion
        header("Location: {$_SERVER['PHP_SELF']}?cancelled=true");
        exit();
    } else {
        die("Error deleting record: " . mysqli_error($conn));
    }
}

// Check if the ticket has been cancelled and display message accordingly
$cancelled_message = "";
if (isset($_GET['cancelled']) && $_GET['cancelled'] == true) {
    $cancelled_message = "Your ticket has been cancelled successfully. Refund will be made shortly.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking History</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
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
    .contact{
    overflow: hidden;
    margin-bottom: 100px;
    background-color: #a1c2f5;
}
.contact-info h2{
    font-size: 35px;
    font-weight: 800;
    letter-spacing: -1.5px;
}
form input,form textarea{
    display: block;
    width: 100%;
    outline: none;
    margin-bottom: 30px;
    padding: 15px;
    transition: all 0.3s ease;
}
form input:focus,form textarea:focus{
    
    border-color:  black;
  
}
form button{
    width: 100%;
    border: none;
    background-color: black;
    color: white;
    outline: none;
    font-size: 23px;
    letter-spacing: -0.5px;
    padding: 10px 0;
    border-radius: 8px;
    transition: all 0.3s ease;
}
form button:hover{
    background-color: red;
}
.contcat-map h2{
    font-size: 35px;
    font-weight: 800;
    letter-spacing: -1.5px;
}
.contcat-map p{
    font-size: 18px;
    font-weight: 500;
    color: gray;
}
.contcat-map h5{
    font-size: 18px;
    font-weight: 500;
    color: gray;}
.contcat-map p i{
    color: red;
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


  



    @media (min-width: 994px) {
        /* For mobile phones: */
        .addtion-r::after{
            content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 1px;
        height: 93%;
        background-color: #131212;
            
        }
      }
    
        
  </style>
</head>

<body>
<nav>
    <img src="logo.jpeg" class="logo">
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
<div class="container mt-5">
    <h1 class="mb-4">Booking History</h1>
    <?php if (!empty($cancelled_message)): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $cancelled_message; ?>
        </div>
    <?php endif; ?>
    <table class="table">
        <!-- Table headers -->
        <tbody>
            <?php
            // Check if there are any rows fetched
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    // Output each cell's data
                    // Modify this according to your database structure
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['Train name'] . "</td>";
                    echo "<td>" . $row['From'] . "</td>";
                    echo "<td>" . $row['To'] . "</td>";
                    echo "<td>" . $row['Total fare'] . "</td>";
                    echo "<td>" . $row['Seating'] . "</td>";
                    // Adding delete button
                    echo "<td><a href='{$_SERVER['PHP_SELF']}?delete_id={$row['id']}' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to cancel this ticket?\");'>Cancel Ticket</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No booking history found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
