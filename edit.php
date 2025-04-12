<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Edit Book</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label>Title:</label>
            <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
            <label>Author:</label>
            <input type="text" name="author" value="<?php echo $row['author']; ?>" required><br>
            <input type="submit" value="Update Book">
        </form>
    </div>
</body>
</html>
