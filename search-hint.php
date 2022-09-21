<?php
include 'inc/db.inc.php';
$value = $_POST['value'];
$sql = "SELECT * from movies WHERE mName LIKE '%$value%' OR mFileName LIKE '%$value%' LIMIT 8";
$result = mysqli_query($conn, $sql);
$resultChech = mysqli_num_rows($result);
if ($resultChech >0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='result-movie'><a href='https://online-kino.online/movies/".$row['mFileName']."'>".$row['mName']."</a></div>";
    }
}