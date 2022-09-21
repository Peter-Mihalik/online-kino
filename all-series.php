<?php
include "header.php";
?>
<div class="indexBlock">
<h1>Všetky Serialy</h1>
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
        <div class="ad-block-pc">
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
<div class="blockNew blockVyber">
            <?php
            include 'adminonly/inc/db-serialy.inc.php';
            $sql = "SELECT * FROM serialy";
            $result = mysqli_query($conn, $sql);
            while($msg = mysqli_fetch_assoc($result)) {
                echo "<a title='Sleduj ".$msg['sName']."' href='serialy/".$msg['sFileName']."'><div class='najMovie'>
                <img alt='Obrazok serialu ".$msg['sName']."' src='serialy/imgs/".$msg['sImg']."'></img>
                <h3>".$msg['sName']."<h3>
                </div></a>";
            }
            ?>
        </div>
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
        <div class="ad-block-pc">
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
include "footer.php";
?>