<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "railway_table";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$From = $_GET['From'];
$To = $_GET['To'];
$Seating = $_GET['Seating'];

$sql = "SELECT `Train number`, `Train name`, Source, Destination, `Departure Time`, `Arrival Time`, `Fare(1st Ac)`, `Seats Available(1st Ac)`, `Fare(2nd Ac)`, `Seats Available(2nd Ac)`, `Fare(3rd Ac)`, `Seats Available(3rd Ac)`, `Fare(Sleeper)`, `Seats Available(Sleeper)` FROM train_info WHERE Source='$From' AND Destination='$To'";
$result = $conn->query($sql);

if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Train number'] . "</td>";
        echo "<td>" . $row['Train name'] . "</td>";
        echo "<td>" . $row['Source'] . "</td>";
        echo "<td>" . $row['Destination'] . "</td>";
        echo "<td>" . $row['Departure Time'] . "</td>";
        echo "<td>" . $row['Arrival Time'] . "</td>";

        // Display Fare and Seats Available based on Preferred Seating
        if ($Seating === '1st Ac') {
            echo "<td>" . $row['Fare(1st Ac)'] . "</td>";
            echo "<td>" . $row['Seats Available(1st Ac)'] . "</td>";
        } elseif ($Seating === '2nd Ac') {
            echo "<td>" . $row['Fare(2nd Ac)'] . "</td>";
            echo "<td>" . $row['Seats Available(2nd Ac)'] . "</td>";
        } elseif ($Seating === '3rd Ac') {
            echo "<td>" . $row['Fare(3rd Ac)'] . "</td>";
            echo "<td>" . $row['Seats Available(3rd Ac)'] . "</td>";
        } elseif ($Seating === 'Sleeper') {
            echo "<td>" . $row['Fare(Sleeper)'] . "</td>";
            echo "<td>" . $row['Seats Available(Sleeper)'] . "</td>";
        }

        // Pass Train Number and Train Name as parameters in URL
        echo "<td><a href='result.html?From=$From&To=$To&Seating=$Seating&TrainNumber=" . urlencode($row['Train number']) . "&TrainName=" . urlencode($row['Train name']) . "'>Select</a></td>";
    }
} else {
    echo "<tr><td colspan='8'>No results found.</td></tr>";
}

$conn->close();
?>
