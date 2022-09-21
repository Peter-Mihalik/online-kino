
        <html lang='en'>
           <head>
               <meta charset='UTF-8'>
               <meta name='viewport' content='width=device-width, initial-scale=1.0'>
               <meta http-equiv='X-UA-Compatible' content='ie=edge'>
               <meta name='description' content='Sleduj Spojenci / Allied online CZ/SK dabing/titulky'>

               <script
                src='https://code.jquery.com/jquery-3.4.1.min.js'
                integrity='sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo='
                crossorigin='anonymous'></script>
               
               <meta property='og:title' content='Spojenci / Allied' />
               <meta property='og:image' content='5e1f719b675077.72496387.webpg'>
               <meta property='og:type' content='video.movie'>
               <meta property='og:url' content='kino-online.online/allied.php'>
            <meta property='og:description' content='Sleduj filmy online bez obmedzení. Naša stránka Online kino vám ponúka veľký výber online filmov k zliahnutiu kedykoľvek a kdekoľvek.'>
               
               <title>Spojenci / Allied online CZ/SK</title>
               <link rel='icon' href='https://online-kino.online/images/popcorn icon.png'>
              
                <link rel='stylesheet' href='../css/public/main.css'>
                <link rel='stylesheet' href='../css/movies/movie.css'>
           </head>
           <script>
           $(document).ready(function() {
               /*ANIMATE DESKTOP SERACH BAR*/
               $('.search_desktop').click(function() {
                   $('.search_desktop').animate({
                       width: '400px'
                   });
                });
                $('.search_desktop').blur(function() {
                    $('.search_desktop').animate({
                        width: '200px'
                    });
                });
               /*ANIMATE MOBILE SEARCH BAR*/
               $('.search_mobile').click(function() {
                   $('.logo').fadeOut('fast');
                   //$('.submit_search_mobile').css('display', 'inline-block')
                   setTimeout(function() {
                       $('.submit_search_mobile').fadeIn('slow')
                       $('.search_mobile').animate({
                       width: '200px'
                       });
                   }, 400);
                });
                $('.search_mobile').blur(function() {
                   //$('.submit_search_mobile').css('display', 'none')
                   $('.submit_search_mobile').fadeOut()
                    $('.search_mobile').animate({
                        width: '115px'
                    });
                    setTimeout(function() {
                       $('.logo').fadeIn('slow');
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
    <a href='https://online-kino.online' title='Domovska stránka'><div class='logo'></div></a>
        <form action='search.php' method='POST'>
            <input class='search_desktop' name='searchWordDesktop' placeholder='Názov filmu' type='text' autocomplete='off'>
            <input class='search_mobile' name='searchWordMobile' placeholder='Názov filmu' type='text' autocomplete='off'> 
            <button name='submit' type='submit' class='submit_search_desktop'>Hľadaj</button>
            <button name='submit' type='submit' class='submit_search_mobile'>Hľadaj</button>
        </form>
    </header>
        
    <main>
    <div class='resultsDesktop'></div>

    <div class='mobile-add'>
        <script type='application/javascript'>
            var ad_idzone = '3934296',
            ad_width = '300',
            ad_height = '250'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934296&output=noscript&type=300x250' width='300' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
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
    
    <div class='side-add desktop-add'>
        <script type='application/javascript'>
            var ad_idzone = '3934254',
            ad_width = '160',
            ad_height = '600'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934254&output=noscript&type=160x600' width='160' height='600' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>

        <script type='application/javascript'>
            var ad_idzone = '3934254',
            ad_width = '160',
            ad_height = '600'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934254&output=noscript&type=160x600' width='160' height='600' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>

        <script type='application/javascript'>
            var ad_idzone = '3934254',
            ad_width = '160',
            ad_height = '600'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934254&output=noscript&type=160x600' width='160' height='600' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>
    </div>

    <div class='content'>
        <h1>Spojenci / Allied</h1>
        <div class='movie-box'>
            <div class='buttons'>
                <div class='btn' onclick='changePlayerTwo()'>ZDROJ 1
                    <br><span>CZ/SK(dabing/titulky)</span>
                </div>
                <div class='btn' onclick='changePlayerOne()'>ZDROJ 2 
                    <br><span>CZ/SK(dabing/titulky)</span>
                </div>
            </div>
    
                <iframe src="https://hqq.tv/player/embed_player.php?vid=THJjeHNxZzZtMVJYSXk4aUYxOGQ4Zz09&autoplay=no" style="margin:10px auto; display: block;" class="playerOne" webkitAllowFullScreen mozallowfullscreen allowfullscreen frameborder="0" scrolling="no"></iframe>
                <div class="playerTwo" style="margin:10px auto;display:none;background:black;text-align:center; color: white">Pripravuje sa</div>

                <a href='https://online-kino.online/ako-pozerat.php'><div class='how-to-watch'>AKO SPUSTIŤ FILM?</div></a>
            </div>

            <div class='mobile-add'>
                <script type='application/javascript'>
                    var ad_idzone = '3934296',
                    ad_width = '300',
                    ad_height = '250'
                </script>
                <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
                <noscript>
                    <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934296&output=noscript&type=300x250' width='300' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
                </noscript>
            </div>
            
            <div class='classic-add desktop-add'>
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

            <h2>Sleduj Spojenci / Allied online</h2>
            <p class='inf'>
                Píše se rok 1942 a Max Vatan (Brad Pitt) seskakuje padákem do dun marocké pouště s cílem zabít v Casablance německého velvyslance. V městě se setkává s Francouzkou Marianne (Marion Cotillard), která má hrát roli jeho manželky a pomoci mu se splněním jeho mise. Předstírání manželské intimity a zamilovanosti postupně přeroste v opravdovou vášeň, a proto po ukončení operace společně odjedou do Londýna, kde se vezmou, válce navzdory. Jejich rodinné štěstí trvá jen do chvíle, kdy se Max dozví, že i tohle může být jen důmyslná hra, která by ve finále mohla výrazně ovlivnit výsledek Druhé světové války. V tu chvíli začíná jeho zoufalý hon za pravdou a za nadějí, že to, co o jeho ženě tvrdí jeho nadřízení, není pravda.(CSFD)
            </p>

            <script src='../js/script.js'></script>
        </div>

    <div class='side-add desktop-add'>
        <script type='application/javascript'>
            var ad_idzone = '3934254',
            ad_width = '160',
            ad_height = '600'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934254&output=noscript&type=160x600' width='160' height='600' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>

        <script type='application/javascript'>
            var ad_idzone = '3934254',
            ad_width = '160',
            ad_height = '600'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934254&output=noscript&type=160x600' width='160' height='600' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>

        <script type='application/javascript'>
            var ad_idzone = '3934254',
            ad_width = '160',
            ad_height = '600'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934254&output=noscript&type=160x600' width='160' height='600' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
        </noscript>
    </div>

    <div class='mobile-add'>
        <script type='application/javascript'>
            var ad_idzone = '3934296',
            ad_width = '300',
            ad_height = '250'
        </script>
        <script type='application/javascript' src='https://a.exdynsrv.com/ads.js'></script>
        <noscript>
            <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3934296&output=noscript&type=300x250' width='300' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
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
    <script src='../js/script.js'></script>
    <script type='application/javascript' src='https://syndication.exdynsrv.com/splash.php?idzone=3934320&capping=0'></script>
</main>

<?php
    include '../footer.php';
?>
        