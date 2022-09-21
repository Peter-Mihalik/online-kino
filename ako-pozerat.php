<?php
include "header.php"
?>
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
        <h1>AKO SPUSTIŤ FILM?</h1>
            <div class="image-1 image-ako-pozerat"></div>
            <h2 class="kroky">1. Kliknite na film, ktorý chcete pozerať</h2>

            <div class="image-2 image-ako-pozerat"></div>
            <h2 class="kroky">2. Kliknite na tlačítko play</h2>

            <div class="image-3 image-ako-pozerat"></div>
            <h2 class="kroky">3. Po kliknuti na tlačítko play sa zobrazí reklama v novom okne alebo na novej karte, ktorú rýchlo zatvoríte krížikom</h3>
            <span class="warning">Reklamy môžu mať erotický obsah</span>

            <div class="image-4 image-ako-pozerat"></div>
            <h2 class="kroky">4. Po zavretí reklami sa film spustí</h2>
            <span class="warning">Ak sa film nespustí tak opakujte klikanie na tlačidlo play a zatváranie reklám</span>
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