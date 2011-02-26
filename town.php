<?php

require_once("init.php");

// require_once("town/class.php");

$game->smarty->assign("title", "Townname");
$game->smarty->assign("tpl_name", "town");

// DVRDEBUG: $idcity für mehrere cities
$idcity = 1;

$rs = '';
$rs = $game->conn->Execute("SELECT `cityhall`, `thallium`, `acridon`, `radon`, `manpower`, `bank`, `factory`, `airport`, `spaceport`, `canon`, `shield`, `operations`, `satellite`, `radar`, `seti`, `tradepost`, `science`, `stargate` FROM `town` WHERE `id`='".$idcity."'");

$buildings = $rs->FetchRow();
$game->smarty->assign("buildings", "");
$game->smarty->display('index.tpl');

?>
