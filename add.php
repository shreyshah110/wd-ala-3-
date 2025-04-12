<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Add New Book</h2>
    <form action="insert.php" method="post">
        Title: <input type="text" name="title" required><br><br>
        Author: <input type="text" name="author" required><br><br>
        Genre: <input type="text" name="genre"><br><br>
        Year: <input type="number" name="year"><br><br>
        <input type="submit" value="Add Book">
    </form>
</body>
</html>
