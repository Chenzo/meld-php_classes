<?php 

class Autoloader {
    static public function loader($className) {
        $filename = $_SERVER['DOCUMENT_ROOT'] . "/classes/" . str_replace("\\", '/', $className) . ".php";
        if (file_exists($filename)) {
            include($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        }
        return FALSE;
    }
}
spl_autoload_register('Autoloader::loader');


class MeldOBJ {

    public function __construct() 
    {
        
    }

    public function __destruct()
    {
      //echo 'The class "', __CLASS__, '" was destroyed.<br />';
    }

    public function __toString()
    {
        return "You can't just outout a object as a string";
    }
}

?>