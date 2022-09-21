<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Uploader</title>
    <link rel="stylesheet" href="uploader.css">
</head>
<body>
<h1>NAHRAVANIE FILMOV</h1>
    <form action="inc/upload.inc.php" method='post' enctype="multipart/form-data">
    <input type="text" placeholder='NAZOV FILMU' name='mName'>
    <input type="text" placeholder='NAZOV ZLOŽKY' name='mFileName'>
    <input type="text" placeholder='TAG PRVÉHO PREHRÁVAČU' name='mPlayerTagOne'>
    <input type="text" placeholder='TAG DRUHÉHO PREHRÁVAČU' name='mPlayerTagTwo'>
    <textarea rows="20" cols="80" type="text" placeholder='POPIS FILMU' name='mInf'></textarea>
    <input type="text" placeholder='KATEGÓRIA' name='mCategorie'>
    <input type="text" placeholder='Špecialne priradenie' name='mSpecial'>
    <input type="file" name="file">
    <button type="submit" name='submit'>PRIDAŤ</button>
    </form>
</body>
</html>