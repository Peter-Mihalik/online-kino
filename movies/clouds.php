
                <html lang='en'>
                   <head>
                       <meta charset='UTF-8'>
                       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                       <meta name='description' content='Sleduj Clouds online CZ/SK dabing/titulky'>

                       <script
                        src='https://code.jquery.com/jquery-3.4.1.min.js'
                        integrity='sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo='
                        crossorigin='anonymous'></script>
                       
                       <meta property='og:title' content='' />
                       <meta property='og:image' content='g'>
                       <meta property='og:type' content='video.movie'>
                       <meta property='og:url' content='kino-online.online/'>
                    <meta property='og:description' content='Sleduj filmy online bez obmedzení. Naša stránka Online kino vám ponúka veľký výber online filmov k zliahnutiu kedykoľvek a kdekoľvek.'>
                       
                       <title>Clouds online CZ/SK</title>
                       <link rel='icon' href='https://online-kino.online/images/popcorn icon.png'>
                       
                       <link rel='stylesheet' href='../css/public/main.css'>
                       <link rel='stylesheet' href='../css/movies/movie.css'>
                   </head>
                   <body>
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
    </div>

    <div class='content'>
        <h1>Clouds</h1>
        <div class='movie-box'>
            <div class='buttons'>
                <div class='btn' onclick='changePlayerTwo()'>ZDROJ 1
                    <br><span>CZ/SK(dabing/titulky)</span>
                </div>
                <div class='btn' onclick='changePlayerOne()'>ZDROJ 2 
                    <br><span>CZ/SK(dabing/titulky)</span>
                </div>
            </div>
    
                <iframe src="https://streamtape.com/e/61oyr8120XI9Bow/ ?c1_file=https://www.freefilm.to/subtitles/18947_Clouds-(339042).vtt&c1_label=CZ titulky&directSRT=true&sub=https://www.freefilm.to/subtitles/18947_Clouds-(339042).vtt" style="margin:10px auto; display: block;" class="playerOne" allowfullscreen allowtransparency allow="autoplay" scrolling="no" frameborder="0"></iframe>
                <iframe style="margin:10px auto; display: none;" class="playerTwo" src="//mixdrop.co/e/4ndzl4xotlo9zp?c1_file=https://www.freefilm.to/subtitles/18947_Clouds-(339042).vtt&c1_label=CZ titulky&directSRT=true&sub=https://www.freefilm.to/subtitles/18947_Clouds-(339042).vtt" frameborder="0" allowfullscreen></iframe>

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

            <h2>Sleduj Clouds online</h2>
            <p class='inf'>
                In the fall of 2012, Zach Sobiech performs an acoustic rendition of "Sexy and I Know It" to an amused crowd at his school"s talent show. Zach has been struggling with osteosarcoma and has been receiving regular treatments for it. His best friend, Sammy Brown, conspires with him by helping him to write music ("Blueberries"). Zach manages to ask out fellow student Amy Adamle for a picnic, but before he is able to do so, he begins to have a coughing fit that concerns his mother, Laura, who rushes him to the hospital. He has a collapsed lung and an emergency surgery is performed on him. While they fix his lung, they learn that the treatments are no longer effective and his cancer is now terminal, giving him six to ten months to live.Zach tells Sammy and Amy about his diagnosis while he is inspired by his teacher, Milton Weaver, about what he is to do with the rest of his life.

In the winter of 2012, Zach and his family go to Lourdes, France, in Laura"s desperate attempt at Zach having some sort of miracle. Zach returns home to hang out with Sammy ("Coffee Cup") and learns that she has bought tickets to a Jason Mraz concert. Zach decides to use the opportunity to ask Amy about to prom and she accepts ("I"m Yours"). After having convulsions, Zach goes to Sammy"s house in the middle of the night demanding that they form a band. Both realize that they have romantic feelings for each other, but that they are incapable of having a full relationship. They continue to bond over songwriting ("Fix Me Up") and Sammy posts their music on YouTube which earns them some fame. Despite this, Zach is certain that he will fail to achieve anything beyond the video. He is later given encouragement by Mr. Weaver.

Zach"s father, Rob, borrows a Nissan GT-R for him to drive and impress Amy with. While at her house, the two proceed to make out ("My Little Dancer"), but when Amy comments on his scars, Zach becomes despondent and tells her that he will never offer the things she wants from him and breaks up with her while leaving in a huff. Laura confronts Rob over the decision to get a car for Zach and he breaks down admitting that he did it to make his son happy as he is unable to do anything about his eventual death. In the spring of 2013, Weaver reveals to Zach and Sammy that he showed their video to BMI and that they want to sign them. They head to New York City to sign their contracts, calling their band A Firm Handshake ("Ames"). On the flight back home, Zach suddenly has a moment of creative energy and writes the song "Clouds" and records it shortly afterwards, becoming a colossal hit.

Zach finally makes the time to apologize to Amy about his behavior and the two of them get back together. Zach speaks privately to his mother about how to handle his remains and his funeral, suggesting bagpipes be played. Sammy and the Sobiechs learn that Zach might not make it to prom. With Zach having been given the opportunity to play at the Metro Theatre, they decide to combine the concert with prom, a graduation, and a fundraiser for osteosarcoma. The day arrives and despite Zach"s worsening condition, he decides to go perform anyway. Sammy begins the show by performing "How to Go to Confession" before Zach heads out to perform "Clouds". Zach"s breathing begins to labor, but he is moved when the entire audience sings the song for him.

Zach passes away on May 20, 2013. Even though he never made it, Zach wrote a college essay telling people that you don"t need to find out you"re dying to start living. Sammy, Amy and other friends come together for a group photo in remembrance of Zach; noticing that a cloud in the sky resembles a "Z". During the credits, footage of the real Zach and Sammy play combined with footage of the filmmakers filming scenes of the movie as well as the cast and crew meeting with the real people involved in Zach"s life ("Sandcastles"). (WIKIPEDIA)
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
                