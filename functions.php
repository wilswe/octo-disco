<?php
function loadData($url) {
    $jsondata = file_get_contents($url);
    $json = json_decode($jsondata, true);
    return $json;
}


function getGameId($game) {
    $json = loadData('data/data.json');
    return $json[$game];
}


function loadGamePC($game) {
    // convert name of the game into its id
    $gameid = getGameId($game);

    $json = loadData("https://api.steampowered.com/ISteamUserStats/GetNumberOfCurrentPlayers/v1/?appid=$gameid");

    $result = $json['response']['player_count'];

    if ($gameid == "") {
        $result = "error";
    }

    $arr = array("Game"=>$game, "Players"=>$result);
    return $output = $arr;
}
