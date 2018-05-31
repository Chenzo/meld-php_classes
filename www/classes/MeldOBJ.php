<?php 

class MeldOBJ {

    public $name = "vince";

    public function __construct($myName) 
    {
        $this->name=$myName;
    }

    public function __destruct()
    {
      //echo 'The class "', __CLASS__, '" was destroyed.<br />';
    }

    public function __toString()
    {
        return "To use the meldOBJ, type new ";
    }
}

?>