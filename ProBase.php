<?php
require_once 'Base.php';
class ProBase extends Base {
    public $b;
    public function __construct ($b){
        $this -> b = $b;
    }
};
?>