<?php
include 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];

$sql = "UPDATE books SET title='$title', author='$author' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // go back to list
} else {
    echo "Error updating record: " . $conn->error;
}
?>

