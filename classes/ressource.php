<?php
class Ressource extends Game {
    function __construct($id, $game) {
        if(!$id) return; // DVRDEBUG this should never happen!

        $this->db = $game->db;
        $this->smarty = $game->smarty;
        $this->getProperties("ressource", $id);
    }

    public function getProperties($classname, $idplayer) {
        $rs = $this->db->Execute("SELECT * FROM ".$classname." WHERE id_player='".$idplayer."'");
        if ($rs) {
            while ($o = $rs->FetchNextObject()) {
                $oArr = get_object_vars($o);
                foreach($oArr as $prop => $value) {
                    $prop = strtolower($prop);
                    if(strpos($prop, "id")===false)
                        $this->$prop =+ $value;
                    else
                        $this->$prop = $value;
                }
            }
        }
    }
}
?>
