<?php

class Game {
    // Lib
    var $conn;
    var $smarty;

    // Game
    var $playerid;

    function __construct() {
        $this->conn = &ADONewConnection('mysql');
        $this->conn->PConnect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

        $this->smarty = new Smarty;

        $this->playerid = $this->getPlayerid();
    }

    function getPlayerid() {
        // DVRDEBUG: Until multiuser is implemented
        return 1;
    }

    function hasLogin() {
        // DVRDEBUG: Until auth is implemented
        $hasLogin = true;

        if (!$hasLogin)
            die(header("Location: login.php"));
    }

    function displayRessources() {
       $rs = &$this->conn->Execute("SELECT * FROM ressource WHERE id_player = '".$this->playerid."'");
       // if (!$rs) echo $conn->ErrorMsg();
       list(, , $currThallium, $currAcridon, $currRadon, $currManpower, $currBank, $currDeposit) = $rs->FetchRow();

       $this->smarty->assign("thallium", $currThallium);
       $this->smarty->assign("acridon", $currAcridon);
       $this->smarty->assign("radon", $currRadon);
       $this->smarty->assign("manpower", $currManpower);
       $this->smarty->assign("bank", $currBank);
       $this->smarty->assign("deposit", $currDeposit);
    }
}

?>
