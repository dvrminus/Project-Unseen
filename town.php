<?php

require_once("init.php");

require_once("classes/town.php");
$game->town = new Town(1, $game);
$game->player->town = $game->town;

$game->smarty->assign("tpl_name", "town");

$game->smarty->assign("game", $game);
$game->smarty->display('index.tpl');

?>
