<?php
if (isset($_GET['train_number'])) {
    $train_number = $_GET['train_number'];

    // Database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "railway_table";
    $connection = new mysqli($host, $username, $password, $database);

    // Delete the record
    $sql = "DELETE FROM train_info WHERE `Train number` = '$train_number'";
    $result = $connection->query($sql);

    if ($result) {
        echo "Record deleted successfully";
        $connection->commit();
        // Add a button to go back to index.php
        echo '<br><a href="index1.php" class="btn btn-primary mt-3">Go Back to Train List</a>';
        exit();
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    $connection->close();
} else {
    echo "Train number not provided for deletion.";
}
?>
