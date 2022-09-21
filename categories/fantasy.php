<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="najlepšie fantasy filmy online zadarmo, kedykoľvek a kdekoľvek.">
    <title>Fantasy filmy online - Online kino</title>
    <link rel="icon" href="https://online-kino.online/images/popcorn icon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/public/main.css">
    <link rel="stylesheet" href="../css/categories/categorie.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
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
            <h2>SLEDUJ FANTASY FILMY ONLINE</h2>
            <span class='line'>a</span>
            <div class='categoriesMoviesBlock'>
        <?php
            $db = $_GET['dbName'];
            include '../adminonly/inc/db.inc.php';
            $sql = "SELECT * FROM $db";
            $result = mysqli_query($conn, $sql);
            while($msg = mysqli_fetch_assoc($result)) {
                echo "<a href='../movies/".$msg['fanFileName']."'><div class='categoriesMovie'>
                <img src='../movies/imgs/".$msg['fanImg']."'></img>
                <h3>".$msg['fanMovieName']."<h3>
                </div></a>";
            }
            echo "<p style='color:white;'>Sleduj najlepšie akčne filmy online zadarmo, kedykoľvek a kdekoľvek.</p>";
        ?>
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
        include '../footer.php';
    ?>