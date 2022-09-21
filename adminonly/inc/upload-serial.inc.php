<?php
/*Upload IMG*/
if(isset($_POST['submit'])){
    include 'db-serialy.inc.php';
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = ['jpg', 'jpeg', 'png', 'pdf', 'webp'];

    $sDbNamePost = $_POST['sName'];
    $seasonNumber = $_POST["season"];
    $skName = $_POST["sSkName"];
    $seasonCount = $_POST["seasonCount"];
    $inf = $_POST["inf"];

    $sDbNameArray = explode(" ", $sDbNamePost);
    $sDbName = $sDbNameArray[0].$sDbNameArray[1].$sDbNameArray[2];
    $date = date('Y-m-d H:i:s');
    $serialName = $skName." / ".$sDbNamePost;
    $serialFileName = $sDbName.".php";
    $NumberOfEp = intval($_POST['sEpCount']);

    if (empty($_POST["sSkName"]) === false) {
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize <50000000) {
                    $fileNewName = $sDbName.".".$fileActualExt;
                    $fileDestination = '../../serialy/imgs/'.$fileNewName;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    /*VLOZIT DO SERILY DB*/
                    $sqlSerialyDb = "INSERT INTO serialy(sName, sFileName, sSezony, sInf, sImg, sDate) VALUES('$serialName', '$serialFileName', '$seasonCount', '$inf', '$fileNewName', '$date');";
                    mysqli_query($conn, $sqlSerialyDb);
                    /*Serial FILE CREATE*/
                    $writeSerialFile = '<html lang="en">
                <head>
                <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <meta name="description" content="'.$serialName.' online zadarmo v dabingu alebo s titulkami.">
                    <meta name="keywords" content="'.$sDbNamePost.' online, '.$skName.' online zadarmo">
                    
                    <meta property="og:title" content="Online kino - '.$serialName.'" />
                    <meta property="og:image" content="images/title.jpg">
                    <meta property="og:type" content="video.movie">
                    <meta property="og:url" content="online-kino.online/serialy/'.$serialFileName.'">
                    <meta property="og:description" content="Sleduj '.$serialName.' online zadarmo v dabingu alebo s titulkami.">
                    
                    <title>Online kino - '.$serialName.'</title>
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
                    <h1>'.$serialName.'<h1>
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
                        $sql = "SELECT * FROM '.$sDbName.'";
                        $result = mysqli_query($conn, $sql);
                        $i = 1;
                        while($msg = mysqli_fetch_assoc($result)) {
                            $season = $msg["season"];
                            echo "<div class=\'seria-btn\' onclick=\'showEpisodes$i()\'>$season. séria</div><div class=\'episodes$i-block\'>";
                            $dbName = "'.$sDbName.'S".$i;
                            $sqlEpisodes = "SELECT * FROM $dbName";
                            $resultEpisode = mysqli_query($conn, $sqlEpisodes);
                            while($row = mysqli_fetch_assoc($resultEpisode)) {
                                $episode = $row["eName"];
                                $fileName = $row["eFileName"];
                                echo "<div class=\'episode\'><a title=\'$episode. epizoda\' href=\''.$sDbName.'/$i/$fileName\'>$episode. epizóda<a></div>";
                            }
                            echo "</div>";
                            $i++;
                        }
                        echo "</div>";
                        ?>
                        <h2>Obsah serialu '.$serialName.':</h2>
                        <p class="inf" style="font-size: 20px;">'.$inf.'</p>
                
                
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
                        <span class=\'line\'>a</span>
                        <ul>
                            <li><a title="Preklik do DMCA" href="../dmca.php">DMCA</a></li>
                            <li><a title="Preklik do KONTAKT" href="../kontakt.php">KONTAKT</a></li>
                            <li><a title="Preklik do NAVRHNÚŤ FILM" href="../navrh.php">NAVRHNÚŤ FILM</a></li>
                            <li><a title="Preklik do NAHLÁSIŤ FILM" href="../nahlasit.php">NAHLÁSIŤ FILM</a></li>
                        </ul>
                    </footer>
                </body>
                </html>';

                $fpSerialFile = fopen("../../serialy/$serialFileName", 'w');
                fwrite($fpSerialFile, $writeSerialFile);
                fclose($fpSerialFile);
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
                /*VYTVORIT DB SERIALU*/
                $sqlCreateSerialDb = "CREATE TABLE $sDbName(
                    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
                    season varchar(256) not null
                );";
                mysqli_query($conn, $sqlCreateSerialDb);
                /*VLOZIT DO SERIAL DB*/
                $sqlInsetrSerialdb = "INSERT INTO $sDbName(season) VALUES('$seasonNumber')";
                mysqli_query($conn, $sqlInsetrSerialdb);
                /*VYTVORENIE DB PRE SEASON*/
                $dbSeasonName = $sDbName."S".$seasonNumber;
                $sqlCreateSeasonDb = "CREATE TABLE $dbSeasonName(
                    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
                    eName varchar(256) not null,
                    eFileName varchar(256) not null,
                    ePlayerDabing varchar(256) not null,
                    ePlayerOriginal varchar(256) not null
                );";
                mysqli_query($conn, $sqlCreateSeasonDb);
                /*Looop*/
                $i = 1;
                while (empty($_POST["ep".$i."PlayerDabing"]) != true) {
                    $ep = $_POST["ep".$i];
                    $PlayerDabing = $_POST["ep".$i."PlayerDabing"];
                    $PlayerOriginal = $_POST["ep".$i."PlayerOriginal"];
                    if (strpos($PlayerDabing, 'style="height:450px;width:720px"') !== false) {
                        $PlayerDabing = str_replace('style="height:450px;width:720px"', 'class="playerOne"', $PlayerDabing);
                    }
                    else if (strpos($PlayerDabing, 'height="450" width="720"') !== false) {
                        $PlayerDabing = str_replace('height="450" width="720"', 'style="margin:10px auto; display: block;" class="playerOne"', $PlayerDabing);
                    }
                    else if (strpos($PlayerDabing, 'width="560" height="315"') !== false) {
                        $PlayerDabing = str_replace('width="560" height="315"', 'style="margin:10px auto; display: block;" class="playerOne"', $PlayerDabing);
                    }
                    else {
                        $PlayerDabing = $PlayerDabing;
                    }
            
                    if (strpos($PlayerOriginal, 'width="560" height="315"') !== false) {
                        $PlayerOriginal = str_replace('width="560" height="315"', 'class="playerTwo"',$PlayerOriginal);
                    }
                    else {
                        $PlayerOriginal = $PlayerOriginal;
                    }
                    $titulky = "&?sub=https://online-kino.online/serialy/subtitles/$sDbName/$seasonNumber/$ep.vtt";
                    $PlayerOriginal = str_replace('?"', $titulky ,$PlayerOriginal);
                    $file_name = $sDbName."-s".$seasonNumber."-e".$ep.".php";
                    $e = $i + 1;
                    $a = $i - 1;
                    $next_file_name = $sDbName."-s".$seasonNumber."-e".$e.".php";
                    $previos_file_name = $sDbName."-s".$seasonNumber."-e".$a.".php";
                    $sql = "INSERT INTO $dbSeasonName(eName,eFileName, ePlayerDabing, ePlayerOriginal) VALUES('$ep','$file_name', '$PlayerDabing', '$PlayerOriginal')";
                    mysqli_query($conn, $sql);
                    /*CREATE MOVIE FILE*/
                $name = strtoupper($sDbNameArray[0])."  ".strtoupper($sDbNameArray[1])."  ".strtoupper($sDbNameArray[2])." S:".$seasonNumber." E:".$ep;
                $metaDes = "Sleduj ".$name." online CZ dabing/titulky";
                $document_root = $_SERVER['DOCUMENT_ROOT'];
                $write = "
                <html lang='en'>
                   <head>
                       <meta charset='UTF-8'>
                       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                       <meta name='description' content='$metaDes'>
                       
                       <meta property='og:title' content='$metaDes' />
                       <meta property='og:type' content='video.movie'>
                       <meta property='og:url' content='kino-online.online/$file_name'>
                    <meta property='og:description' content='Sleduj filmy online bez obmedzení. Naša stránka Online kino vám ponúka veľký výber online filmov k zliahnutiu kedykoľvek a kdekoľvek.'>
                       
                       <title>$name online cz/titulky</title>
                       <link rel='stylesheet' href='../../../css/style.css'>
                   </head>
                   <body>
                   <header>
                           <div class='logo'></div>
                           <form action='search.php' method='POST'>
                               <input name='searchWord' placeholder='Názov filmu' type='text'>
                               <button name='submit' type='submit'>Hľadaj</button>
                           </form>
                       </header>
                
                <div class='block'>
                    <h1>$name</h1>
                    
                     <div class='ad-block-mobile'>
            <script type='text/javascript'>
    var ad_idzone = '3657637',
    ad_width = '250',
    ad_height = '250'
</script>
<script type='text/javascript' src='https://a.exdynsrv.com/ads.js'></script>
<noscript>
    <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250' width='250' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
</noscript>
        </div>
        <div class='ad-block-pc'>
<script type='text/javascript'>
var ad_idzone = '3657637',
ad_width = '250',
ad_height = '250'
</script>
<script type='text/javascript' src='https://a.exdynsrv.com/ads.js'></script>
<noscript>
<iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250' width='250' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
</noscript>

<script type='text/javascript'>
var ad_idzone = '3657637',
ad_width = '250',
ad_height = '250'
</script>
<script type='text/javascript' src='https://a.exdynsrv.com/ads.js'></script>
<noscript>
<iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250' width='250' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
</noscript>

<script type='text/javascript'>
var ad_idzone = '3657637',
ad_width = '250',
ad_height = '250'
</script>
<script type='text/javascript' src='https://a.exdynsrv.com/ads.js'></script>
<noscript>
<iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250' width='250' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
</noscript>

<script type='text/javascript'>
var ad_idzone = '3657637',
ad_width = '250',
ad_height = '250'
</script>
<script type='text/javascript' src='https://a.exdynsrv.com/ads.js'></script>
<noscript>
<iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250' width='250' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
</noscript>
        </div> 
                
                    <div class='movie-box'>
                        <div class='buttons'>
                            <div class='btn' onclick='changePlayerTwo()'>ZDROJ 1
                                <br><span>DABING</span>
                            </div>
                            <div class='btn' onclick='changePlayerOne()'>ZDROJ 2 
                                <br><span>TITULKY</span>
                            </div>
                        </div>
                
                        $PlayerDabing
                        $PlayerOriginal</div>";
                if ($i > 1 && $i < $NumberOfEp){
                    $write = $write."<div class='buttons-episode'>
                    <a title='$previos_file_name' href='$previos_file_name'><div class='previous'>< MINULÁ EPIZÓDA</div></a>
                    <a title='$next_file_name' href='$next_file_name'><div class='next'>ĎALŠIA EPIZÓDA ></div></a>
                </div>";
                }
                else if ($i === 1 ) {
                    $write = $write."<div class='buttons-episode'>
                    <a title='$next_file_name' href='$next_file_name'><div class='next'>ĎALŠIA EPIZÓDA ></div></a>
                </div>";
                }
                else if ($i === $NumberOfEp){
                    $write = $write."<div class='buttons-episode'>
                    <a title='$previos_file_name' href='$previos_file_name'><div class='previous'>< MINULÁ EPIZÓDA</div></a></div>";
                }
                $write = $write."
                <div class='buttons-episode'><a title='ZOBRAZIŤ VŠETKY SERIE' href='../../$serialFileName'><div class='series'>VŠETKY SERIE</div></a></div>
                <script src='../../../js/script.js'></script>
                    
                    <h2>Sleduj $name online</h2>
                
                 <div class='ad-block-mobile'>
            <script type='text/javascript'>
    var ad_idzone = '3657637',
    ad_width = '250',
    ad_height = '250'
</script>
<script type='text/javascript' src='https://a.exdynsrv.com/ads.js'></script>
<noscript>
    <iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250' width='250' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
</noscript>
        </div>
        <div class='ad-block-pc'>
<script type='text/javascript'>
var ad_idzone = '3657637',
ad_width = '250',
ad_height = '250'
</script>
<script type='text/javascript' src='https://a.exdynsrv.com/ads.js'></script>
<noscript>
<iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250' width='250' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
</noscript>

<script type='text/javascript'>
var ad_idzone = '3657637',
ad_width = '250',
ad_height = '250'
</script>
<script type='text/javascript' src='https://a.exdynsrv.com/ads.js'></script>
<noscript>
<iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250' width='250' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
</noscript>

<script type='text/javascript'>
var ad_idzone = '3657637',
ad_width = '250',
ad_height = '250'
</script>
<script type='text/javascript' src='https://a.exdynsrv.com/ads.js'></script>
<noscript>
<iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250' width='250' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
</noscript>

<script type='text/javascript'>
var ad_idzone = '3657637',
ad_width = '250',
ad_height = '250'
</script>
<script type='text/javascript' src='https://a.exdynsrv.com/ads.js'></script>
<noscript>
<iframe src='https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3657637&output=noscript&type=250x250' width='250' height='250' scrolling='no' marginwidth='0' marginheight='0' frameborder='0'></iframe>
</noscript>
        </div> 
                
                    <footer>
                    <h2>Online kino</h2>
                    <span class='line'>a</span>
                    <ul>
                        <li><a href='../../../dmca.php'>DMCA</a></li>
                        <li><a href='../../../kontakt.php'>KONTAKT</a></li>
                        <li><a href='../../../navrh.php'>NAVRHNÚŤ FILM</a></li>
                        <li><a href='../../../nahlasit.php'>NAHLÁSIŤ FILM</a></li>
                    </ul>
                </footer>
            </body>
            </html>";
                if (!file_exists('serialy/$sDbName/$seasonNumber')) {
                    @mkdir("../../serialy/$sDbName", 0777, true);
                    @mkdir("../../serialy/$sDbName/$seasonNumber", 0777, true);
                }
                $fp = fopen("../../serialy/$sDbName/$seasonNumber/$file_name", 'w');
                fwrite($fp, $write);
                fclose($fp);
                $i++;
                }
                

                header("Location: ../serialUpload.php?succes");
}
?>