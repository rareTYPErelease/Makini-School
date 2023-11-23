<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "school";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
if (isset($_POST['insert_data'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (fname, lname, email,course) VALUES ('$fname', '$lname', '$email','$course')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete data from the database
if (isset($_GET['delete_data'])) {
    $id_to_delete = $_GET['delete_data'];

    $sql_delete = "DELETE FROM students WHERE id = $id_to_delete";

    if ($conn->query($sql_delete) === TRUE) {
        echo "Data deleted successfully.";
    } else {
        echo "Error deleting data: " . $conn->error;
    }
}
?>

    
