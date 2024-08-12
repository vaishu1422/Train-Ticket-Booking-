<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "railway_table";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Source = $_GET['Source'];
$Destination = $_GET['Destination'];

// Perform your database query to get the fare based on $fromStation and $toStation
// Modify the SQL query accordingly

$sql = "SELECT `Fare(1st Ac)`,`Fare(2nd Ac)`,`Fare(3rd Ac)`,`Fare(Sleeper)` FROM train_info WHERE Source = '$Source' AND Destination = '$Destination'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $Fare1 = $row['Fare(1st Ac)'];
    $Fare2 = $row['Fare(2nd Ac)'];
    $Fare3 = $row['Fare(3rd Ac)'];
    $Fare4 = $row['Fare(Sleeper)'];

    // Store fare details in an associative array
    $fareDetails = array(
        'Fare1' => $Fare1,
        'Fare2' => $Fare2,
        'Fare3' => $Fare3,
        'Fare4' => $Fare4,
    );

    // Convert the array to a JSON string
    $fareDetailsJson = json_encode($fareDetails);

    // Output the JSON string
    echo $fareDetailsJson;
} else {
    echo "Fare not available.";
}

$conn->close();
?>
