<?php

class iClass {
    private $overload = array();

    public $db;
    public $smarty;

    public function __get($prop) {
        if (array_key_exists($prop, $this->overload)) {
            return $this->overload[$prop];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property for __get(): ' . $prop .
            ' in ' . $trace[0]['file'] .
            ' line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    public function __set($prop, $obj) {
        $this->overload[$prop] = $obj;
    }

    public function getProperties($classname, $id) {
        $rs = $this->db->Execute("SELECT * FROM ".$classname." WHERE id='".$id."'");
        if ($rs) {
            $oArr = get_object_vars($rs->FetchNextObject());
            foreach($oArr as $prop => $value) {
                $prop = strtolower($prop);
                 $this->$prop = $value;
            }
        }
    }
}

?>
