<?php

// DVRDEBUG
require_once("debug.php");

// Libaries
require_once("Smarty.class.php");
require_once("adodb.inc.php");

// Game configuration
require_once("config.php");

// Game Object
require_once("classes/iClass.php");
require_once("classes/game.php");
//require_once("classes/session.php");
require_once("classes/player.php");
require_once("classes/ressource.php");
$game = new Game;
$game->player = new Player(1, $game);
$game->ressource = new Ressource($game->player->id, $game);
// Initialisation



?>
