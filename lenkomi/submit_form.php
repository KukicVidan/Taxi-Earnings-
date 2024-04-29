<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $date = $_POST["date"];
    $location = $_POST["location_from"];
    $location2 = $_POST["location_to"];
    $amount = $_POST["amount"];
    $client = $_POST["client_name"];

    // Validate form fields
    if (empty($date) || empty($location) || empty($amount) || empty($client)) {
        echo "Popunite sva polja.";
    } else {
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lenkomi";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement
        $sql = "INSERT INTO taxi_drives (date, location_from, location_to, amount, client_name) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssds", $date, $location,$location2, $amount, $client);

        // Execute SQL statement
        if ($stmt->execute()) {
            echo "Uspesno unjeto u bazu!.";
            header("Location: input_form.php");
            
        } else {
            echo "Error: " . $conn->error;
        }

        // Close connection
        $stmt->close();
        $conn->close();
    }
} else {
    // Redirect to the form page if accessed directly
    header("Location: input_form.php");
    exit;
}
?>
