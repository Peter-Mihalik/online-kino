<?php
include 'header.php';
include 'inc/db.inc.php';
?>

<?php
    if(empty($_POST['searchWordDesktop'])) {
        $searchWrd = $_POST['searchWordMobile'];
    }
    else{
        $searchWrd = $_POST['searchWordDesktop'];
    }
    $search = mysqli_real_escape_string($conn, $searchWrd);
    $sql = "SELECT * from movies WHERE mName LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $resultChech = mysqli_num_rows($result);

    if ($resultChech >0) {
        echo '<div class="seacrhBlock">
        <div class="ad-block-mobile">
                    <script type="text/javascript">
            var ad_idzone = "3657637",
            ad_width = "250",
            ad_height = "250"
        </script>
        <script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
        <noscript>
            <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
        </noscript>
                </div>
                <div style="margin:0 auto; min-width: 780px; padding:10px;" class="ad-block-pc">
        <script type="text/javascript">
        var ad_idzone = "3657637",
        ad_width = "250",
        ad_height = "250"
        </script>
        <script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
        <noscript>
        <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
        </noscript>
        
        <script type="text/javascript">
        var ad_idzone = "3657637",
        ad_width = "250",
        ad_height = "250"
        </script>
        <script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
        <noscript>
        <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
        </noscript>
        
        <script type="text/javascript">
        var ad_idzone = "3657637",
        ad_width = "250",
        ad_height = "250"
        </script>
        <script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
        <noscript>
        <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
        </noscript>
                </div>';
        echo "<h2>Výsledky hľadania <span class='change'>".$search."</span></h2>
        <div class='searchResults'>";
        while($msg = mysqli_fetch_assoc($result)) {
            echo "<a href='movies/".$msg['mFileName']."'><div class='srchMovie'>
            <img alt='Obrazok filmu ".$msg['mName']."' src='movies/imgs/".$msg['mImg']."'></img>
            <h3>".$msg['mName']."<h3>
            </div></a>";
        }
        echo "</div>";
    }
    else {
        echo "<div class='seacrhBlock'><h2>Neboli nájdené žiadne výsledky pre dopyt <span class='change'>".$search."</span></h2>
        <h3 class='skuste'>Skuste vyhladať anglicky názov</h3>";
    }
?>
<div class="ad-block-mobile">
            <script type="text/javascript">
    var ad_idzone = "3657637",
    ad_width = "250",
    ad_height = "250"
</script>
<script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
<noscript>
    <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</noscript>
        </div>
        <div style="margin:0 auto; min-width: 1000px; padding:10px;" class="ad-block-pc">
<script type="text/javascript">
var ad_idzone = "3657637",
ad_width = "250",
ad_height = "250"
</script>
<script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
<noscript>
<iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</noscript>

<script type="text/javascript">
var ad_idzone = "3657637",
ad_width = "250",
ad_height = "250"
</script>
<script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
<noscript>
<iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</noscript>

<script type="text/javascript">
var ad_idzone = "3657637",
ad_width = "250",
ad_height = "250"
</script>
<script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
<noscript>
<iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</noscript>

<script type="text/javascript">
var ad_idzone = "3657637",
ad_width = "250",
ad_height = "250"
</script>
<script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
<noscript>
<iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</noscript>
        </div>
</div>

<?php
include 'footer.php';
?>