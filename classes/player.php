<?php

class Player extends Game {

    public function __construct($id, $game) {
        // DVRDEBUG check is Player is child of Game, else throw up
        if(!$id) return; // DVRDEBUG this should never happen!

        $this->db = $game->db;
        $this->smarty = $game->smarty;
        $this->getProperties("player", $id);
    }
}
    
?>
