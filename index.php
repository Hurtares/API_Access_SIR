<?php
    include "getData.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOL STATS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
</head>
<body>
    <div>
        <form action="index.php" method="get">
            <fieldset class="input">
                <input type="text" name="username" id="summonerId">
            </fieldset>
            <fieldset class="send">
                <input type="submit" name="Limpar">
                <input type="submit" name="tipoRequest" value="Match History">
                <input type="reset" name="Limpar">
            </fieldset>
        </form>
    </div>
    <?php 
        include "displayData.php";
    ?>
</body>
</html>