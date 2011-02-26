<?php

// Libaries
require_once("Smarty.class.php");
require_once("adodb.inc.php");

// Game configuration
require_once("config.php");

// Game Object
require_once("classes/game.php");
$game = new Game;

// Initialisation
$game->hasLogin();
$game->displayRessources();

?>
