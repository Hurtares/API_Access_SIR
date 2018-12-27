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
    <script src="main.js"></script>
</head>
<body>
    <div>
        <form action="index.php" method="get">
            <fieldset class="input">
                <input type="text" name="username" id="summonerId">
            </fieldset>
            <fieldset class="send">
                <input type="submit" name="Enviar">
                <input type="reset" name="Limpar">
            </fieldset>
        </form>
    </div>
    <?php 
        include "displayData.php";
    ?>
</body>
</html>