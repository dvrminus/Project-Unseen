<?php

class Town extends Game {
    
    function __construct($id, $game) {
        if(!$id) return; // DVRDEBUG this should never happen!

        $this->db = $game->db;
        $this->smarty = $game->smarty;

        $this->getProperties("town", $id);

    }
}

?>
