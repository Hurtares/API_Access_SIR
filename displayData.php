<?php
echo "Summoner Name: $summonerName";
echo "Account ID: $accountID";
echo "Summoner ID: $summonerID";
echo "Summoner Level: $summonerLevel";
echo "<br>";

//MATCH HISTORY
$data_json =file_get_contents("http://ddragon.leagueoflegends.com/cdn/6.24.1/data/en_US/champion.json");
$data = json_decode($data_json);

foreach ($matches as $m) {
    $name;
    foreach ($data->data as $d) {
        if($d->key == $m->champion){
            $champ = $d;
        }
    }
    echo '<a href="index.php?username='.$summonerName.'&tipoRequest=matchDetails&matchID='.$m->gameId.'">';
    echo '<img id="champLogo" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/champion/'.$champ->image->full.'" alt='.$champ->name.'>';
    echo '<font size="6">'.$champ->name.' '.date("d/m/Y H:i:s",(float)$m->timestamp/1000).'</font>';
    echo "<br>";
    echo "</a>";
    
}

?>
