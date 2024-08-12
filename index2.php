<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="margin:50px;">
    <h1> List of Trains</h1>
    <br>
    <table class="table">
        <thead>
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
        </thead>
        <tbody>
            <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "railway_table";
            $connection = new mysqli($host, $username, $password, $database);
            $sql = "SELECT * FROM train_info";
            $result = $connection->query($sql);

            if (!$result) {
                die("Connection failed: " . $connection->error);
            }

            while ($row = $result->fetch_assoc()) {

                echo "<tr>
                    <td>" . $row["Train number"] . "</td>
                    <td>" . $row["Train name"] . "</td>
                    <td>" . $row["Source"] . "</td>
                    <td>" . $row["Destination"] . "</td>
                    <td>" . $row["Departure Time"] . "</td>
                    <td>" . $row["Arrival Time"] . "</td>
                    <td>" . $row["Seats Available(1st Ac)"] . "</td>
                    <td>" . $row["Seats Available(2nd Ac)"] . "</td>
                    <td>" . $row["Seats Available(3rd Ac)"] . "</td>
                    <td>" . $row["Seats Available(Sleeper)"] . "</td>
                    <td>" . $row["Fare(1st Ac)"] . "</td>
                    <td>" . $row["Fare(2nd Ac)"] . "</td>
                    <td>" . $row["Fare(3rd Ac)"] . "</td>
                    <td>" . $row["Fare(Sleeper)"] . "</td>
                    
                    </tr>";
            }
            ?>
        </tbody>
        
    </table>
</body>
</html>
