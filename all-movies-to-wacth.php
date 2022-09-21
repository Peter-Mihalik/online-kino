<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All MOVIES</title>
</head>
<body>
    <h1>All movies</h1>
    <div>
        <ul>
            <?php
                include 'inc/db.inc.php';
                $sql = "SELECT * FROM movies";
                $result = mysqli_query($conn, $sql);
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li><a href='../movies/".$row['mFileName']."' id='$i' class='movie'>".$row['mName']."<a><li>";
                    $i++;
                }
            ?>
        </ul>
    </div>
</body>
</html>