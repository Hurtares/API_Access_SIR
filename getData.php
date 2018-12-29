<?php

if (isset($_GET["username"]) && isset($_GET["tipoRequest"])) {
    $tipoRequest = $_GET["tipoRequest"];
    $summonerName = urlencode($_GET["username"]);
}else{
    $summonerName = NULL;
    $tipoRequest = NULL;
}
if ($summonerName && $tipoRequest) {
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
    $APIKey = "RGAPI-25b2c8e9-8e89-4590-b9eb-3f6d1921bdf2";

    /*
    $accountID = $data->accountId;
    $summonerID = $data->id;
    $summonerLevel = $data->summonerLevel;
*/

    function getAccountDetails(){
        global $region,$requestSummonerId,$summonerName,$APIKey,$accountID,$summonerID,$summonerLevel;
        $requestURL="https://".$region.".api.riotgames.com".$requestSummonerId.$summonerName."?api_key=".$APIKey;
        
        $data_json =file_get_contents($requestURL);
        $data = json_decode($data_json);
        
        $accountID = $data->accountId;
        $summonerID = $data->id;
        $summonerLevel = $data->summonerLevel;
    }

    function getMatchHistory()
    {
        global $region,$requestMatchList,$accountID,$APIKey,$matches;
        $requestURL="https://".$region.".api.riotgames.com".$requestMatchList.$accountID."?api_key=".$APIKey;

        $data_json =file_get_contents($requestURL);
        $data = json_decode($data_json);

        $matches = $data->matches;
    }

    function getMatchDetails()
    {
        if(isset($_GET["matchId"])){
            global $requestMatch,$APIKey,$region;
            $matchId = $_GET["matchId"];
            $requestURL="https://".$region.".api.riotgames.com".$requestMatch."?api_key=".$APIKey;

            $data_json =file_get_contents($requestURL);
            $data = json_decode($data_json);
            //3872549044
        }


    }
    
    getAccountDetails();
    

    switch ($tipoRequest) {
        case 'matchDetails':
            echo "It works";
            break;    
                
        case 'mastery':
            # code...
            break;
        
        case 'Match History':
            getMatchHistory();
            break;

        default:
            # code...
            break;
    }


    
}

?>