<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['train_number'])) {
        // Assuming you have a form for adding new entries
        // Redirect to the form with the selected train_number
        header("Location: add_form.php?train_number=" . $_GET['train_number']);
        exit();
    }
}
?>
