<?php
// Include the database connection file
include 'db.php';

// Sanitize user inputs to prevent SQL injection
$title = $conn->real_escape_string($_POST['title']);
$author = $conn->real_escape_string($_POST['author']);
$genre = $conn->real_escape_string($_POST['genre']);
$year = (int)$_POST['year']; // Ensure that the year is treated as an integer

// Check if all necessary fields are filled
if (!empty($title) && !empty($author) && !empty($genre) && !empty($year)) {
    // Prepare the SQL query
    $sql = "INSERT INTO books (title, author, genre, year) VALUES ('$title', '$author', '$genre', $year)";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect to the index page if insertion is successful
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "All fields are required!";
}

// Close the database connection
$conn->close();
?>
