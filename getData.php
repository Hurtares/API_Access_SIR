<?php

if (isset($_GET["username"])) {
    $summonerName = urlencode($_GET["username"]);
}else{
    $summonerName = NULL;
}
if ($summonerName) {
    $region="euw1";
    $requestSummonerId = "/lol/summoner/v3/summoners/by-name/";
    $requestChampionMastery;
    $requestChampion;
    $requestMatchList;
    $requestMatch;
    $summonerName = $_GET["username"];
    $APIKey = "RGAPI-246bf5a7-acad-44a5-a459-d0e5d34e0ddc";

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