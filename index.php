<?php

require_once("init.php");

$game->smarty->assign("game", $game);
$game->smarty->display('index.tpl');

?>