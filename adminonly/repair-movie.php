<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repair Movies</title>
    <link rel="stylesheet" href="uploader.css">
</head>
<body>
<h1>Opravenie filmov</h1>
    <form action="inc/repair.inc.php" method='post'>
    <input type="text" placeholder='NAZOV FILMU' name='mName'>
    <input type="text" placeholder='TAG PRVÉHO PREHRÁVAČU' name='mPlayerTagOne'>
    <input type="text" placeholder='TAG DRUHÉHO PREHRÁVAČU' name='mPlayerTagTwo'>
    <textarea rows="20" cols="80" type="text" placeholder='POPIS FILMU' name='mInf'></textarea>
    <button type="submit" name='submit'>PRIDAŤ</button>
    </form>
</body>
</html>