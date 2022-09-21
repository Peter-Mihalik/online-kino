<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online kino - Filmy online zadarmo</title>
    <link rel="icon" href="https://online-kino.online/images/popcorn icon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/public/main.css">
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
    </header>