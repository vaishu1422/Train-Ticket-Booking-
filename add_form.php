<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Train Entry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
</head>

<body style="margin: 50px;">
    <h1>Add Train Entry</h1>
    <form action="process_add.php" method="POST">
        <!-- You may include other input fields as needed -->
        <div class="mb-3">
            <label for="train_number" class="form-label">Train Number</label>
            <input type="text" class="form-control" id="train_number" name="train_number" required>
        </div>
        <div class="mb-3">
            <label for="train_name" class="form-label">Train Name</label>
            <input type="text" class="form-control" id="train_name" name="train_name" required>
        </div>
        <div class="mb-3">
            <label for="source" class="form-label">Source</label>
            <input type="text" class="form-control" id="source" name="source" required>
        </div>
        <div class="mb-3">
            <label for="destination" class="form-label">Destination</label>
            <input type="text" class="form-control" id="destination" name="destination" required>
        </div>
        <div class="mb-3">
            <label for="Departure_Time" class="form-label">Departure Time</label>
            <input type="text" class="form-control" id="Departure_Time" name="Departure_Time" required>
        </div>
        <div class="mb-3">
            <label for="Arrival_Time" class="form-label">Arrival Time</label>
            <input type="text" class="form-control" id="Arrival_Time" name="Arrival_Time" required>
        </div>
        <div class="mb-3">
            <label for="Seats_Available_1st_Ac" class="form-label">Seats Available(1st Ac)</label>
            <input type="text" class="form-control" id="Seats_Available_1st_Ac" name="Seats_Available_1st_Ac"
                required>
        </div>
        <div class="mb-3">
            <label for="Seats_Available_2nd_Ac" class="form-label">Seats Available(2nd Ac)</label>
            <input type="text" class="form-control" id="Seats_Available_2nd_Ac" name="Seats_Available_2nd_Ac"
                required>
        </div>
        <div class="mb-3">
            <label for="Seats_Available_3rd_Ac" class="form-label">Seats Available(3rd Ac)</label>
            <input type="text" class="form-control" id="Seats_Available_3rd_Ac" name="Seats_Available_3rd_Ac"
                required>
        </div>
        <div class="mb-3">
            <label for="Seats_Available_Sleeper" class="form-label">Seats Available(Sleeper)</label>
            <input type="text" class="form-control" id="Seats_Available_Sleeper" name="Seats_Available_Sleeper"
                required>
        </div>
        
        <div class="mb-3">
            <label for="Fare_1st_Ac" class="form-label">Fare(1st Ac)</label>
            <input type="text" class="form-control" id="Fare_1st_Ac" name="Fare_1st_Ac" required>
        </div>
        <div class="mb-3">
            <label for="Fare_2nd_Ac" class="form-label">Fare(2nd Ac)</label>
            <input type="text" class="form-control" id="Fare_2nd_Ac" name="Fare_2nd_Ac" required>
        </div>
        <div class="mb-3">
            <label for="Fare_3rd_Ac" class="form-label">Fare(3rd Ac)</label>
            <input type="text" class="form-control" id="Fare_3rd_Ac" name="Fare_3rd_Ac" required>
        </div>
        <div class="mb-3">
            <label for="Fare_Sleeper" class="form-label">Fare(Sleeper)</label>
            <input type="text" class="form-control" id="Fare_Sleeper" name="Fare_Sleeper" required>
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
