<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap">
    <style>
        body {
            background-image: url('pic1.jpg');
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin-bottom: -150px;
        }

        .container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .1);
            padding: 40px;
            width: 100%;
            text-align: center;
            overflow-x: auto; /* Enable horizontal scrolling on small screens */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "railway_table";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get Train number from query parameter
    $trainNumber = $_GET['trainNumber'];

    // Perform your database query to get details based on $trainNumber
    $sql = "SELECT * FROM train_info WHERE `Train number` = '$trainNumber'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <div class="container">
            <h1>Train Details</h1>
            <table>
                <tr>
                    <th>Train Number</th>
                    <th>Train Name</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Seats Available(1st Ac)</th>
                    <th>Seats Available(2nd Ac)</th>
                    <th>Seats Available(3rd Ac)</th>
                    <th>Seats Available(Sleeper)</th>
                    <th>Fare(1st Ac)</th>
                    <th>Fare(2nd Ac)</th>
                    <th>Fare(3rd Ac)</th>
                    <th>Fare(Sleeper)</th>
                </tr>
                <tr>
                    <td><?php echo $row['Train number']; ?></td>
                    <td><?php echo $row['Train name']; ?></td>
                    <td><?php echo $row['Source']; ?></td>
                    <td><?php echo $row['Destination']; ?></td>
                    <td><?php echo $row['Departure Time']; ?></td>
                    <td><?php echo $row['Arrival Time']; ?></td>
                    <td><?php echo $row['Seats Available(1st Ac)']; ?></td>
                    <td><?php echo $row['Seats Available(2nd Ac)']; ?></td>
                    <td><?php echo $row['Seats Available(3rd Ac)']; ?></td>
                    <td><?php echo $row['Seats Available(Sleeper)']; ?></td>
                    <td><?php echo $row['Fare(1st Ac)']; ?></td>
                    <td><?php echo $row['Fare(2nd Ac)']; ?></td>
                    <td><?php echo $row['Fare(3rd Ac)']; ?></td>
                    <td><?php echo $row['Fare(Sleeper)']; ?></td>
                </tr>
            </table>
        </div>
        <?php
    } else {
        echo "Train details not found.";
    }
}

// Close your database connection
$conn->close();
?>
</body>

</html>
