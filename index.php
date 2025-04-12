<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Dark/Light Mode Toggle -->
    <button onclick="toggleTheme()" style="float:right; margin: 10px;">🌓 Toggle Theme</button>

    <div class="form-container">
        <h2>Book List</h2>
        <a href="add.php" class="add-btn">➕ Add New Book</a><br><br>

        <table>
            <tr>
                <th>ID</th><th>Title</th><th>Author</th><th>Genre</th><th>Year</th><th>Actions</th>
            </tr>
            <?php
            $result = $conn->query("SELECT * FROM books");
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['author']}</td>
                    <td>{$row['genre']}</td>
                    <td>{$row['year']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}' class='edit-btn'>Edit</a>
                        <a href='delete.php?id={$row['id']}' class='delete-btn' onclick='return confirm(\"Delete this book?\");'>Delete</a>
                    </td>
                </tr>";
            }
            ?>
        </table>
    </div>

    <script>
    function toggleTheme() {
        const body = document.body;
        const theme = body.getAttribute('data-theme');
        body.setAttribute('data-theme', theme === 'dark' ? 'light' : 'dark');
        localStorage.setItem('theme', theme === 'dark' ? 'light' : 'dark');
    }

    window.onload = () => {
        const saved = localStorage.getItem('theme') || 'light';
        document.body.setAttribute('data-theme', saved);
    };
    </script>
</body>
</html>
