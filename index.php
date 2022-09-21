<html lang="en">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156196128-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156196128-1');
</script>

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sleduj filmy a serialy online bez obmedzení. Lepší ako bombuj. Online kino vám ponúka veľký výber online filmov a serialov.">
    <meta name="keywords" content="online kino, filmy online, filmy online zadarmo, online filmy, serialy online, serialy zadarmo">
    
    <meta property="og:title" content="Online kino" />
    <meta property="og:image" content='images/title.jpg'>
    <meta property="og:type" content="video.movie">
    <meta property="og:url" content="online-kino.online">
    <meta property="og:description" content="Sleduj filmy a serialy online bez obmedzení. Naša stránka Online kino vám ponúka veľký výber online filmov k zliahnutiu kedykoľvek a kdekoľvek.">
    
    <title>Online kino - Filmy online zadarmo - Lepší ako bombuj</title>
    <link rel="icon" href="https://online-kino.online/images/popcorn icon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/public/main.css">
    <link rel="stylesheet" href="css/index/index.css">
    <script data-ad-client="ca-pub-1219907515503252" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
    
<script>
    $(document).ready(function() {
        /*ANIMATE DESKTOP SERACH BAR*/
        $(".search_desktop").click(function() {
            $(".search_desktop").animate({
                width: "400px"
            });
         });
         $(".search_desktop").blur(function() {
             $(".search_desktop").animate({
                 width: "200px"
             });
         });
        /*ANIMATE MOBILE SEARCH BAR*/
        $(".search_mobile").click(function() {
            $(".logo").fadeOut("fast");
            //$(".submit_search_mobile").css("display", "inline-block")
            setTimeout(function() {
                $(".submit_search_mobile").fadeIn("slow")
                $(".search_mobile").animate({
                width: "200px"
                });
            }, 400);
         });
         $(".search_mobile").blur(function() {
            //$(".submit_search_mobile").css("display", "none")
            $(".submit_search_mobile").fadeOut()
             $(".search_mobile").animate({
                 width: "115px"
             });
             setTimeout(function() {
                $(".logo").fadeIn("slow");
             }, 500)
         });

         //DINAMIC RESULTS FROM SEARCH
         $('.search_desktop').keypress(function() {
            let value = $('.search_desktop').val();
            $('.resultsDesktop').show();
            $('.resultsDesktop').load('https://online-kino.online/search-hint.php', {value:value});
         });
         $('body').click(function() {
            $('.resultsDesktop').hide();
         });
    });
</script>
<header>
    <a href="https://online-kino.online" title="Domovska stránka"><div class="logo"></div></a>
        <form action="search.php" method="POST">
            <input class="search_desktop" name='searchWordDesktop' placeholder="Názov filmu" type="text" autocomplete="off">
            <input class="search_mobile" name='searchWordMobile' placeholder="Názov filmu" type="text" autocomplete="off"> 
            <button name='submit' type="submit" class="submit_search_desktop">Hľadaj</button>
            <button name='submit' type="submit" class="submit_search_mobile">Hľadaj</button>
        </form>
        <br>
    </header>

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

        <div class='header-footer-add desktop-add'>
        <script type='application/javascript'>
            var ad_idzone = '3934316',
            ad_width = '300',
            ad_height = '250'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934316&output=noscript&type=300x250' width='300' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>
        
        <script type='application/javascript'>
            var ad_idzone = '3934316',
            ad_width = '300',
            ad_height = '250'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934316&output=noscript&type=300x250' width='300' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>

        <script type='application/javascript'>
            var ad_idzone = '3934316',
            ad_width = '300',
            ad_height = '250'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934316&output=noscript&type=300x250' width='300' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>

        <script type='application/javascript'>
            var ad_idzone = '3934316',
            ad_width = '300',
            ad_height = '250'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934316&output=noscript&type=300x250' width='300' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
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
            <h1>Online kino - Filmy online zadarmo</h1>

            <p>Sleduj filmy online <span class="change">bez obmedzení</span>. Naša stránka Online kino vám ponúka veľký výber online filmov k zliahdutiu
                <span class="change">kedykoľvek</span> a <span class="change"> kdekoľvek</span>. Pred pozeraním vám bráni iba <span class="change">jedna reklama.</span>
            </p>

            <span class="line">a</span>

            <ul class="main-links">
                <li><a href="all-movies.php">Zobraziť všetky filmy</a></li>
             </ul>

             <span class="line">a</span>

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

             <ul class="change-blocks-links">
                <li class='li' onclick="indexChangeNaj()">Posledné filmy</li>
                <li class='li' onclick="indexChangePopular()">Populárne filmy</li>
                <li class='li' onclick="indexChangeCategories()">Kategórie filmov</li>
            </ul>

            <div class="blockNew blockVyber">
                <?php
                    include 'adminonly/inc/db.inc.php';
                    $sql = "SELECT * FROM movies ORDER BY mDate DESC LIMIT 20";
                    $result = mysqli_query($conn, $sql);
                    while($msg = mysqli_fetch_assoc($result)) {
                        echo "<a title='Sleduj ".$msg['mName']."' href='movies/".$msg['mFileName']."'><div class='najMovie'>
                        <img alt='Obrazok filmu ".$msg['mName']."' src='movies/imgs/".$msg['mImg']."'></img>
                        <h3>".$msg['mName']."<h3>
                        </div></a>";
                    }
                ?>
            </div>

            <div class="popular blockVyber"  style='display:none;'>
                <?php
                    $sqlP = "SELECT * FROM popular ORDER BY pDate DESC LIMIT 20";
                    $resultP = mysqli_query($conn, $sqlP);
                    while($msg = mysqli_fetch_assoc($resultP)) {
                        echo "<a href='movies/".$msg['pFileName']."'><div class='najMovie'>
                        <img src='movies/imgs/".$msg['pImg']."'></img>
                        <h3>".$msg['pName']."<h3>
                        </div></a>";
                    }
                ?>
            </div>

            <div class="csfd blockVyber"  style='display:none;'>
                <?php
                    $sqlP = "SELECT * FROM csfdnaj ORDER BY scfdNajDate DESC LIMIT 20";
                    $resultP = mysqli_query($conn, $sqlP);
                    while($msg = mysqli_fetch_assoc($resultP)) {
                        echo "<a href='movies/".$msg['scfdNajFileName']."'><div class='najMovie'>
                        <img src='movies/imgs/".$msg['scfdNajImg']."'></img>
                        <h3>".$msg['scfdNajName']."<h3>
                        </div></a>";
                    }
                ?>
            </div>

            <div class='categories blockVyber' style='display:none;'>
                <ul>
                    <li><form action='categories/akcne.php' method='GET'><input type="hidden" name='dbName' value='Akcne'><button name='submit'>Akčne</button></form></li>
                    <li><form action='categories/detektivne.php' method='GET'><input type="hidden" name='dbName' value='detektivne'><button name='submit'>Detektívne</button></form></li>
                    <li><form action='categories/drama.php' method='GET'><input type="hidden" name='dbName' value='drama'><button name='submit'>Drama</button></form></li>
                    <li><form action='categories/fantasy.php' method='GET'><input type="hidden" name='dbName' value='fantasy'><button name='submit'>Fantasy</button></form></li>
                    <li><form action='categories/horory.php' method='GET'><input type="hidden" name='dbName' value='horory'><button name='submit'>Horory</button></form></li>
                    <li><form action='categories/komedie.php' method='GET'><input type="hidden" name='dbName' value='komedie'><button name='submit'>Komédie</button></form></li>
                    <li><form action='categories/marvel.php' method='GET'><input type="hidden" name='dbName' value='marvel'><button name='submit'>Marvel</button></form></li>
                    <li><form action='categories/romanticke.php' method='GET'><input type="hidden" name='dbName' value='romanticke'><button name='submit'>Romanticke</button></form></li>
                    <li><form action='categories/rozpravky.php' method='GET'><input type="hidden" name='dbName' value='rozpravky'><button name='submit'>Rozprávky</button></form></li>
                    <li><form action='categories/scifi.php' method='GET'><input type="hidden" name='dbName' value='scifi'><button name='submit'>Sci-fi</button></form></li>
                    <li><form action='categories/vianocne.php' method='GET'><input type="hidden" name='dbName' value='vianocne'><button name='submit'>Vianočné</button></form></li>
                </ul>
            </div>
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

        <div class='header-footer-add desktop-add'>
        <script type='application/javascript'>
            var ad_idzone = '3934316',
            ad_width = '300',
            ad_height = '250'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934316&output=noscript&type=300x250' width='300' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>
        
        <script type='application/javascript'>
            var ad_idzone = '3934316',
            ad_width = '300',
            ad_height = '250'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934316&output=noscript&type=300x250' width='300' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>

        <script type='application/javascript'>
            var ad_idzone = '3934316',
            ad_width = '300',
            ad_height = '250'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934316&output=noscript&type=300x250' width='300' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>

        <script type='application/javascript'>
            var ad_idzone = '3934316',
            ad_width = '300',
            ad_height = '250'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934316&output=noscript&type=300x250' width='300' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>
    </div>
        <script src="js/script.js"></script>
        <script type="application/javascript" src="https://syndication.exdynsrv.com/splash.php?idzone=3934320&capping=0"></script>
    </main>

    <?php
        include 'footer.php';
    ?>