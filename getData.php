<?php

if (isset($_GET["username"])) {
    $summonerName = urlencode($_GET["username"]);
}else{
    $summonerName = NULL;
}
if ($summonerName) {
    $region="euw1";
    //vai buscar o id do summoner atraves do summoner name
    $requestSummonerId = "/lol/summoner/v3/summoners/by-name/";
    // vai buscar todos os champions organisados pelo mastery level
    $requestChampionMastery = "/lol/champion-mastery/v3/champion-masteries/by-summoner/";
    // vai buscar a lista dos champions
    $requestChampion = "http://ddragon.leagueoflegends.com/cdn/6.24.1/data/en_US/champion.json";
    //vai buscar a informaçao dos ultimos jogos com o id da conta
    $requestMatchList = "/lol/match/v3/matchlists/by-account/";
    // vais buscar a informaçao de um jogo em especifico com o matchId
    $requestMatch = "/lol/match/v3/matches/";

    $summonerName = $_GET["username"];
    $APIKey = "RGAPI-4b76ecc1-3e37-4b6e-831f-894ec52ecfaa";

    switch ($tipoRequest) {
        
        case 'accountID':
            # code...

            break;
        
        case 'champion':
            # code...
            break;    
                
        case 'mastery':
            # code...
            break;
        
        case 'matchList':
            # code...
            break;

        case 'match':
            # code...
            break;

        default:
            # code...
            break;
    }
    
    
    
    $requestURL="https://".$region.".api.riotgames.com".$requestSummonerId.$summonerName."?api_key=".$APIKey;
    
    $data_json =file_get_contents($requestURL);
    $data = json_decode($data_json);
    
    $accountID = $data->accountId;
    $summonerID = $data->id;
    $summonerLevel = $data->summonerLevel;
}

?>