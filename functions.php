<?php
function loadData() {
    $jsondata = file_get_contents("data/data.json");
    $json = json_decode($jsondata, true);
    return $json;
}


function getPlayerCount($game) {
    $json = loadData();
    echo $json[$game];
}
