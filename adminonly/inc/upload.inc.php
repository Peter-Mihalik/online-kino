<?php
/*Upload IMG*/
if(isset($_POST['submit'])){ 
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = ['jpg', 'jpeg', 'png', 'pdf', 'webp'];

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize <50000000) {
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = '../../movies/imgs/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                /*INSERT TO DATABASE movies*/
                $mName = $_POST['mName'];
                $mFileName = $_POST['mFileName'];
                $mPlayerOne = $_POST['mPlayerTagOne'];
                $mPlayerTwo = $_POST['mPlayerTagTwo'];
                $mInf = $_POST['mInf'];
                $mCategorie = $_POST['mCategorie'];
                $mDate = date('Y-m-d H:i:s');
                $mSpecial = $_POST['mSpecial'];

                if (strpos($mPlayerOne, 'style="height:450px;width:720px"') !== false) {
                    $mPlayerOne = str_replace('style="height:450px;width:720px"', 'class="playerOne"', $mPlayerOne );
                }
                else if (strpos($mPlayerOne, 'height="450" width="720"') !== false) {
                    $mPlayerOne = str_replace('height="450" width="720"', 'style="margin:10px auto; display: block;" class="playerOne"', $mPlayerOne);
                }
                else if (strpos($mPlayerOne, 'width="560" height="315"') !== false) {
                    $mPlayerOne = str_replace('width="560" height="315"', 'style="margin:10px auto; display: block;" class="playerOne"', $mPlayerOne);
                }
                else {
                    $mPlayerOne = $mPlayerOne;
                }
        
                if (strpos($mPlayerTwo, 'width="560" height="315"') !== false) {
                    $mPlayerTwo = str_replace('width="560" height="315"', 'style="margin:10px auto; display: none;" class="playerTwo"',$mPlayerTwo);
                }
                else if (strpos($mPlayerTwo, 'height="450" width="720"') !== false) {
                    $mPlayerTwo = str_replace('height="450" width="720"', 'style="margin:10px auto; display: none;" class="playerTwo"', $mPlayerTwo);
                }
                else {
                    $mPlayerTwo = '<div class="playerTwo" style="margin:10px auto;display:none;background:black;text-align:center; color: white">Pripravuje sa</div>';
                }

                // REPLACE ASTIX IN IFNO
                $mInf = str_replace('\'', '"', $mInf);

                include 'db.inc.php';

                $sql = "INSERT INTO movies(mName, mFileName, mPlayerTagOne, mPlayerTagTwo, mInf, mCategorie, mImg, mDate) VALUES('$mName','$mFileName','$mPlayerOne','$mPlayerTwo','$mInf','$mCategorie','$fileNameNew', '$mDate');";
                mysqli_query($conn, $sql);
                echo $sql;
                // Dyspqly errors
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }
                
                if (!mysqli_query($sql, "SET a=1")) {
                    printf("Errormessage: %s\n", mysqli_error($sql));
                }
                /*INSERT INTO DATABASE categories*/
                if (strpos($mCategorie, 'Akcne') !== false){
                    $sqlAkcne = "INSERT INTO Akcne(akcFileName, akcMovieName, akcImg) VALUES('$mFileName', '$mName', '$fileNameNew');";
                    mysqli_query($conn, $sqlAkcne) ;
                    $sqlAkcneC = "UPDATE `categories` SET `cQuant` = cQuant + 1 WHERE `categories`.`cId` = 22;";
                    mysqli_query($conn, $sqlAkcneC);
                }
                else if (strpos($mCategorie, 'Detektivne') !== false){
                    $sqlDetektivne = "INSERT INTO detektivne(detFileName, detMovieName, detImg) VALUES('$mFileName', '$mName', '$fileNameNew');";
                    mysqli_query($conn, $sqlDetektivne);
                    $sqlDetC = "UPDATE `categories` SET `cQuant` = cQuant + 1 WHERE `categories`.`cId` = 23;";
                    mysqli_query($conn, $sqlDetC);
                }
                else if (strpos($mCategorie, 'Drama') !== false) {
                    $sqlDrama = "INSERT INTO drama(draFileName, draMovieName, draImg) VALUES('$mFileName', '$mName', '$fileNameNew');";
                    mysqli_query($conn, $sqlDrama);
                    $sqlDraC = "UPDATE `categories` SET `cQuant` = cQuant + 1 WHERE `categories`.`cId` = 24;";
                    mysqli_query($conn, $sqlDraC);
                }
                else if (strpos($mCategorie, 'Fantasy') !== false) {
                    $sqlFantasy = "INSERT INTO fantasy(fanFileName, fanMovieName, fanImg) VALUES('$mFileName', '$mName', '$fileNameNew');";
                    mysqli_query($conn, $sqlFantasy);
                    $sqlFanC = "UPDATE `categories` SET `cQuant` = cQuant + 1 WHERE `categories`.`cId` = 25;";
                    mysqli_query($conn, $sqlFanC);
                }
                else if (strpos($mCategorie, 'Horory') !== false) {
                    $sqlHorory = "INSERT INTO horory(horFileName, horMovieName, horImg) VALUES('$mFileName', '$mName', '$fileNameNew');";
                    mysqli_query($conn, $sqlHorory);
                    $sqlHorC = "UPDATE `categories` SET `cQuant` = cQuant + 1 WHERE `categories`.`cId` = 26;";
                    mysqli_query($conn, $sqlHorC);
                }
                else if (strpos($mCategorie, 'Komedie') !== false) {
                    $sqlKomedie = "INSERT INTO komedie(komFileName, komMovieName, komImg) VALUES('$mFileName', '$mName', '$fileNameNew');";
                    mysqli_query($conn, $sqlKomedie);
                    $sqlKomC = "UPDATE `categories` SET `cQuant` = cQuant + 1 WHERE `categories`.`cId` = 27;";
                    mysqli_query($conn, $sqlKomC);
                }
                else if (strpos($mCategorie, 'Marvel') !== false) {
                    $sqlMarvel = "INSERT INTO marvel(marFileName, marMovieName, marImg) VALUES('$mFileName', '$mName', '$fileNameNew')";;
                    mysqli_query($conn, $sqlMarvel);
                    $sqlMarC = "UPDATE `categories` SET `cQuant` = cQuant + 1 WHERE `categories`.`cId` = 28;";
                    mysqli_query($conn, $sqlMarC);
                }
                else if (strpos($mCategorie, 'Romanticke') !== false) {
                    $sqlRomanticke = "INSERT INTO romanticke(romFileName, romMovieName, romImg) VALUES('$mFileName', '$mName', '$fileNameNew');";
                    mysqli_query($conn, $sqlRomanticke);
                    $sqlRomC = "UPDATE `categories` SET `cQuant` = cQuant + 1 WHERE `categories`.`cId` = 29;";
                    mysqli_query($conn, $sqlRomC);
                }
                else if (strpos($mCategorie, 'Sci-fi') !== false) {
                    $sqlSciFi = "INSERT INTO scifi(scfFileName, scfMovieName, scfImg) VALUES('$mFileName', '$mName', '$fileNameNew');";
                    mysqli_query($conn, $sqlSciFi);
                    $sqlScfC = "UPDATE `categories` SET `cQuant` = cQuant + 1 WHERE `categories`.`cId` = 30;";
                    mysqli_query($conn, $sqlScfC);
                }
                else if (strpos($mCategorie, 'Vianocne') !== false) {
                    $sqlVianocne = "INSERT INTO vianocne(viaFileName, viaMovieName, viaImg) VALUES('$mFileName', '$mName', '$fileNameNew');";
                    mysqli_query($conn, $sqlVianocne);
                    $sqlViaC = "UPDATE `categories` SET `cQuant` = cQuant + 1 WHERE `categories`.`cId` = 31;";
                    mysqli_query($conn, $sqlViaC);
                }
                else if (strpos($mCategorie, 'Rozpravky') !== false) {
                    $sqlRozpravky = "INSERT INTO rozpravky(rozFileName, rozMovieName, rozImg) VALUES('$mFileName', '$mName', '$fileNameNew');";
                    mysqli_query($conn, $sqlRozpravky);
                    $sqlRozC = "UPDATE `categories` SET `cQuant` = cQuant + 1 WHERE `categories`.`cId` = 32;";
                    mysqli_query($conn, $sqlRozC);
                }
                else{
                    header("Location: ../movieUpload.php?zlemenokategorie");
                }
                /*CREATE MOVIE FILE*/
                $metaDes = "Sleduj $mName online CZ/SK dabing/titulky";
                $document_root = $_SERVER['DOCUMENT_ROOT'];
                $write = "
                <html lang='en'>
                   <head>
                       <meta charset='UTF-8'>
                       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                       <meta name='description' content='$metaDes'>

                       <script
                        src='https://code.jquery.com/jquery-3.4.1.min.js'
                        integrity='sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo='
                        crossorigin='anonymous'></script>
                       
                       <meta property='og:title' content='".$msg[mName]."' />
                       <meta property='og:image' content='".$msg[mImg]."g'>
                       <meta property='og:type' content='video.movie'>
                       <meta property='og:url' content='kino-online.online/".$msg[mFileName]."'>
                    <meta property='og:description' content='Sleduj filmy online bez obmedzení. Naša stránka Online kino vám ponúka veľký výber online filmov k zliahnutiu kedykoľvek a kdekoľvek.'>
                       
                       <title>".$mName." online CZ/SK</title>
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
        <h1>".$mName."</h1>
        <div class='movie-box'>
            <div class='buttons'>
                <div class='btn' onclick='changePlayerTwo()'>ZDROJ 1
                    <br><span>CZ/SK(dabing/titulky)</span>
                </div>
                <div class='btn' onclick='changePlayerOne()'>ZDROJ 2 
                    <br><span>CZ/SK(dabing/titulky)</span>
                </div>
            </div>
    
                $mPlayerOne
                $mPlayerTwo

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

            <h2>Sleduj $mName online</h2>
            <p class='inf'>
                $mInf
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
                ";

                $fp = fopen("../../movies/$mFileName", 'w');
                fwrite($fp, $write);
                fclose($fp);
                

                //header("Location: ../movieUpload.php?succes");
            }
            else {
                echo "YOUR FILE IS TOO BIG";
            }
        }
        else{
            echo "THERE WAS AN ERROR UPLOADING YOUR FILE";
        }
    }
    else {
        echo "YOU CANNOT UPLOAD FILES OF THIS TYPE!";
    }
}
?>