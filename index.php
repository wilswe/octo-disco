<?php

include 'functions.php';

header('Content-type: application/json');

$game = $_GET['g'];

$re = loadGamePC($game);

echo json_encode($re);
