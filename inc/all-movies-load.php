<?php
 include 'db.inc.php';
 $limit = $_POST['movielimit'];
 $sql = "SELECT * FROM movies LIMIT $limit";
 $result = mysqli_query($conn, $sql);
 while($msg = mysqli_fetch_assoc($result)) {
    echo "<a title='Sleduj ".$msg['mName']."' href='movies/".$msg['mFileName']."'><div class='najMovie'>
     <img alt='Obrazok filmu ".$msg['mName']."' src='movies/imgs/".$msg['mImg']."'></img>
    <h3>".$msg['mName']."<h3>
    </div></a>";
}
?>