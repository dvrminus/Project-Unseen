<?php

class Game extends iClass {
    var $sessionID;

    public function __construct() {
        $this->db = &ADONewConnection('mysql');
        $this->db->PConnect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

        $this->smarty = new Smarty;
    }

    public function getSmarty() {
        return $this->smarty;
    }

    public function getDb() {
        return $this->db;
    }
}

?>
