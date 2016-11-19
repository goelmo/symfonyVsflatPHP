<?php
// index.php
// every thing is on one single page all the code are on here
// ... which is bad for some good reasons

//list 2-1
$link = new PDO("mysql:host=localhost;dbname=blog_db", 'myuser', '');
$result = $link->query('SELECT id, title FROM post');
?>

<!DOCTYPE html>
<html>
<head>
    <title>List of Posts</title>
</head>
<body>
    <h1>List of Posts</h1>
    <ul>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>
                <a href="/show.php?id=<?= $row['id'] ?>">
                    <?= $row['title'] ?>
                </a>
            </li>
        <?php endwhile ?>
    </ul>
</body>
</html>

<?php
    $link = null;
?>