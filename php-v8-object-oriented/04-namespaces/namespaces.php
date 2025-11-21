<?php

// import files
require_once("YouTube/Gateway.php");
require_once("PeerTube/Gateway.php");

// using use to import class and distinct them with alias
use Venza\YouTube\Gateway as YouTube;
use  Venza\PeerTube\Gateway as PeerTube;

$youtubeGateway = new Youtube();
$peerTubeGateway = new PeerTube();

$uploadYoutube = $youtubeGateway->uploadYoutube();
$uploadPeerTube = $peerTubeGateway->uploadPeertube();

var_dump($uploadYoutube);
var_dump($uploadPeerTube);
