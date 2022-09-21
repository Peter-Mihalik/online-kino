<html lang="en">
                <head>
                <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <meta name="description" content="Hra o Tróny / Game Of Thrones online zadarmo v dabingu alebo s titulkami.">
                    <meta name="keywords" content="Game Of Thrones online, Hra o Tróny online zadarmo">
                    
                    <meta property="og:title" content="Online kino - Hra o Tróny / Game Of Thrones" />
                    <meta property="og:image" content="images/title.jpg">
                    <meta property="og:type" content="video.movie">
                    <meta property="og:url" content="online-kino.online/serialy/GameOfThrones.php">
                    <meta property="og:description" content="Sleduj Hra o Tróny / Game Of Thrones online zadarmo v dabingu alebo s titulkami.">
                    
                    <title>Online kino - Hra o Tróny / Game Of Thrones</title>
                    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
                    <link rel="stylesheet" href="../css/style.css">
                    <script data-ad-client="ca-pub-1219907515503252" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                </head>
                </head>
                <body>
                <header>
                        <div class="logo"></div>
                        <form action="search.php" method="POST">
                            <input name="searchWord" placeholder="Názov filmu" type="text">
                            <button name="submit" type="submit">Hľadaj</button>
                        </form>
                    </header>
                    <div class="indexBlock">
                    <h1>Hra o Tróny / Game Of Thrones<h1>
                    <span class="line">a</span>
                
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
                
                        <div class="serie-block">
                        <?php
                        include "../adminonly/inc/db-serialy.inc.php";
                        $sql = "SELECT * FROM GameOfThrones";
                        $result = mysqli_query($conn, $sql);
                        $i = 1;
                        while($msg = mysqli_fetch_assoc($result)) {
                            $season = $msg["season"];
                            echo "<div class='seria-btn' onclick='showEpisodes$i()'>$season. séria</div><div class='episodes$i-block'>";
                            $dbName = "GameOfThronesS".$i;
                            $sqlEpisodes = "SELECT * FROM $dbName";
                            $resultEpisode = mysqli_query($conn, $sqlEpisodes);
                            while($row = mysqli_fetch_assoc($resultEpisode)) {
                                $episode = $row["eName"];
                                $fileName = $row["eFileName"];
                                echo "<div class='episode'><a title='$episode. epizoda' href='GameOfThrones/$i/$fileName'>$episode. epizóda<a></div>";
                            }
                            echo "</div>";
                            $i++;
                        }
                        echo "</div>";
                        ?>
                        <h2>Obsah serialu Hra o Tróny / Game Of Thrones:</h2>
                        <p class="inf" style="font-size: 20px;">Kontinent, kde léta trvají desítky roků a zimy se mohou protáhnout na celý lidský život, začínají sužovat nepokoje. Všech Sedm království Západozemí - pletichářský jih, divoké východní krajiny i ledový sever ohraničený starobylou Zdí, která chrání království před pronikáním temnoty - je zmítáno bojem dvou mocných rodů na život a na smrt o nadvládu nad celou říší. Zemí otřásá zrada, chtíč, intriky a nadpřirozené síly. Krvavý boj o Železný trůn, post nejvyššího vládce Sedmi království, bude mít nepředvídatelné a dalekosáhlé důsledky... Výpravný seriál HBO Hra o trůny, podle bestsellerové fantasy ságy Píseň ohně a ledu od George R. R. Martina, zachycuje soupeření o moc mezi králi a královnami, rytíři a odpadlíky, lháři a šlechtici. Na počátku požádá král Robert Baratheon, jehož žena Cersei pochází z rodu bohatých a bezohledných Lannisterů, lorda Eddarda Starka, aby přijel na jih a pomohl mu spravovat království poté, co záhadně skonal jeho pobočník. Zároveň trůn z východu ohrožuje dospívající princezna Daenerys </p>
                
                
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
                        <script src="../js/script.js"></script>
                    </div>
                
                    <footer>
                        <h2>Online kino</h2>
                        <span class='line'>a</span>
                        <ul>
                            <li><a title="Preklik do DMCA" href="../dmca.php">DMCA</a></li>
                            <li><a title="Preklik do KONTAKT" href="../kontakt.php">KONTAKT</a></li>
                            <li><a title="Preklik do NAVRHNÚŤ FILM" href="../navrh.php">NAVRHNÚŤ FILM</a></li>
                            <li><a title="Preklik do NAHLÁSIŤ FILM" href="../nahlasit.php">NAHLÁSIŤ FILM</a></li>
                        </ul>
                    </footer>
                </body>
                </html>