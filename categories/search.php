<?php
include 'header.php';
include 'inc/db.inc.php';
?>

<main>
        <div class="resultsDesktop"></div>

        <div class="mobile-add">
            <script type="application/javascript">
                var ad_idzone = "3934296",
                ad_width = "300",
                ad_height = "250"
            </script>
            <script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript>
                <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934296&output=noscript&type=300x250" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
            </noscript>
        </div>

        <div class="header-footer-add desktop-add">
            <script type="application/javascript">
                var ad_idzone = "3934252",
                ad_width = "900",
                ad_height = "250"
            </script>
            <script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript>
                <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934252&output=noscript&type=900x250" width="900" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
            </noscript>

            <script type="application/javascript">
                var ad_idzone = "3934252",
                ad_width = "900",
                ad_height = "250"
            </script>
            <script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript>
                <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934252&output=noscript&type=900x250" width="900" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
            </noscript>
        </div>

        <div class="side-add desktop-add">
            <script type="application/javascript">
                var ad_idzone = "3934254",
                ad_width = "160",
                ad_height = "600"
            </script>
            <script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript>
                <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934254&output=noscript&type=160x600" width="160" height="600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
            </noscript>

            <script type="application/javascript">
                var ad_idzone = "3934254",
                ad_width = "160",
                ad_height = "600"
            </script>
            <script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript>
                <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934254&output=noscript&type=160x600" width="160" height="600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
            </noscript>
        </div>

        <div class="content">
            <?php
            if(empty($_POST['searchWordDesktop'])) {
                $searchWrd = $_POST['searchWordMobile'];
            }
            else{
                $searchWrd = $_POST['searchWordDesktop'];
            }
            $search = mysqli_real_escape_string($conn, $searchWrd);
            $sql = "SELECT * from movies WHERE mName LIKE '%$search%' OR mFileName LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $resultChech = mysqli_num_rows($result);
                                
                if ($resultChech >0) {
                    echo '<div class="seacrhBlock">
                    <div class="resultsDesktop"></div>
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
        </div>

        <div class="side-add desktop-add">
            <script type="application/javascript">
                var ad_idzone = "3934254",
                ad_width = "160",
                ad_height = "600"
            </script>
            <script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript>
                <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934254&output=noscript&type=160x600" width="160" height="600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
            </noscript>

            <script type="application/javascript">
                var ad_idzone = "3934254",
                ad_width = "160",
                ad_height = "600"
            </script>
            <script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript>
                <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934254&output=noscript&type=160x600" width="160" height="600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
            </noscript>
        </div>

        <div class="mobile-add">
            <script type="application/javascript">
                var ad_idzone = "3934296",
                ad_width = "300",
                ad_height = "250"
            </script>
            <script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript>
                <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934296&output=noscript&type=300x250" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
            </noscript>
        </div>

        <div class="header-footer-add desktop-add">
            
            <script type="application/javascript">
                var ad_idzone = "3934252",
                ad_width = "900",
                ad_height = "250"
            </script>
            <script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript>
                <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934252&output=noscript&type=900x250" width="900" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
            </noscript>

            <script type="application/javascript">
                var ad_idzone = "3934252",
                ad_width = "900",
                ad_height = "250"
            </script>
            <script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript>
                <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934252&output=noscript&type=900x250" width="900" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
            </noscript>

        </div>
        <script src="js/script.js"></script>
        <script type="application/javascript" src="https://syndication.exdynsrv.com/splash.php?idzone=3934320&capping=0"></script>
    </main>

    <?php
        include 'footer.php';
    ?>